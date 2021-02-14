<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catering extends CI_Controller
{
   //security
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->model('Catering_model', 'gt');
      $this->load->model('DSS_model', 'dss');
   }

   public function index()
   {
      $data['title'] = 'Food Package';
      $data['mn'] = 'Catering';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['Slider'] = $this->gt->getSlider();
      $data['Sharing'] = $this->gt->getSharing();
      $data['SB'] = $this->gt->getSB();
      $data['SH'] = $this->gt->getSH();
      $data['DB'] = $this->gt->getDB();
      $data['RB'] = $this->gt->getRB();
      $data['B'] = $this->gt->getB();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('catering/index', $data);
      $this->load->view('templates/footer');
   }

   public function rec()
   {
      $data['title'] = 'Recommendation';
      $data['mn'] = 'Catering';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['C1'] = $this->gt->getAllSC1();
      $data['C2'] = $this->gt->getAllSC2();
      $data['C3'] = $this->gt->getAllSC3();
      $data['C4'] = $this->dss->getAllSC4();
      $data['C5'] = $this->dss->getAllSC5();
      $data['C6'] = $this->dss->getAllSC6();
      $data['result'] = $this->gt->getAllResult();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('catering/rec', $data);
      $this->load->view('templates/footer');
   }

   public function ordering()
   {
      $data['title'] = 'Ordering';
      $data['mn'] = 'Catering';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['MP'] = $this->gt->getAllMP();
      $data['MP_row'] = $this->gt->getAllMProw();
      $data['Order'] = $this->gt->getAllOrder();
      $data['qty'] = $this->gt->getQty();
      $data['ttl'] = $this->gt->getTotal();

      $this->form_validation->set_rules('menu', 'menu', 'required');
      $this->form_validation->set_rules('qty', 'qty', 'required|trim|numeric');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('catering/ordering', $data);
         $this->load->view('templates/footer');
      } else {
         $q = $this->input->post('qty');
         $b = $this->input->post('bill');
         $bill = $q * $b;
         $data = [
            'no_invoice' => $this->input->post('invoice'),
            'date_ordered' => date('d F Y'),
            'qty' => $q,
            'bill' => $bill,
            'user_id' => $this->input->post('userid'),
            'mp_id' => $this->input->post('menu')
         ];
         $this->db->insert('order', $data);
         $this->session->set_flashdata('message', 'You have successfully placed your order!');
         redirect('catering/ordering');
      }
   }

   public function edit_order()
   {
      $data['title'] = 'Ordering';
      $data['mn'] = 'Catering';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['MP'] = $this->gt->getAllMP();
      $data['MP_row'] = $this->gt->getAllMProw();
      $data['Order'] = $this->gt->getAllOrder();

      $this->form_validation->set_rules('jml', 'jml', 'required|trim|numeric');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('catering/ordering', $data);
         $this->load->view('templates/footer');
      } else {
         $this->gt->changeOrder();
         $this->session->set_flashdata('message', 'Quantity order Changed!');
         redirect('catering/ordering');
      }
   }

   public function hapus_order($no_invoice)
   {
      $this->gt->hapusOrder($no_invoice);
      $this->session->set_flashdata('message', 'Product has been Deleted!');
      redirect('catering/ordering');
   }

   public function factur()
   {
      $data['title'] = 'Print Factur';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['Order'] = $this->gt->getAllOrder();
      $data['qty'] = $this->gt->getQty();
      $data['ttl'] = $this->gt->getTotal();

      $this->load->view('templates/header', $data);
      $this->load->view('catering/factur');
   }

   public function load_k2()
   {
      $k2 = $_GET['k2'];
      $this->db->select('*');
      $this->db->from('result r');
      $this->db->join('menu_package mp', 'r.mpr_id = mp.id_mp');
      $this->db->join('matrix m', 'r.mat_id = m.id_mat');
      $this->db->where('c2', $k2);
      $this->db->order_by('r.score', 'desc');
      $data = $this->db->get('')->result_array();
      $i = 1;
      foreach ($data as $r) : ?>
         <tr>
            <th><?= $i; ?></th>
            <td>
               <img src="<?= base_url('assets/img/menu/') . $r['mp_image']; ?>" alt="profile picture" style="width: 150px; height: 100px;">
            </td>
            <td><?= $r['mp_name']; ?></td>
            <td style="color: white;">
               <?php
               if ($r['mp_category'] == 'Weight') {
                  echo '<a class="badge" style="background-color: #605ca8;">Weight</a>';
               } else if ($r['mp_category'] == 'Medium') {
                  echo '<a class="badge" style="background-color: #39cccc;">Medium</a>';
               } else if ($r['mp_category'] == 'Light') {
                  echo '<a class="badge" style="background-color: #e83e8c;">Light</a>';
               }
               ?>
            </td>
            <td><?= number_format($r['mp_price'], 2, ",", "."); ?></td>
            <td><?= $r['mp_event']; ?></td>
            <td><?= $r['p_type']; ?></td>
            <td><?= $r['mp_desc']; ?></td>
         </tr>
         <?php $i++; ?>
         <?php endforeach; ?><?php
                           }

                           public function load_k4()
                           {
                              $k4 = $_GET['k4'];
                              $this->db->select('*');
                              $this->db->from('result r');
                              $this->db->join('menu_package mp', 'r.mpr_id = mp.id_mp');
                              $this->db->join('matrix m', 'r.mat_id = m.id_mat');
                              $this->db->where('c4', $k4);
                              $this->db->order_by('r.score', 'desc');
                              $data = $this->db->get('')->result_array();
                              $i = 1;
                              foreach ($data as $r) : ?>
         <tr>
            <th><?= $i; ?></th>
            <td>
               <img src="<?= base_url('assets/img/menu/') . $r['mp_image']; ?>" alt="profile picture" style="width: 150px; height: 100px;">
            </td>
            <td><?= $r['mp_name']; ?></td>
            <td style="color: white;">
               <?php
                                 if ($r['mp_category'] == 'Weight') {
                                    echo '<a class="badge" style="background-color: #605ca8;">Weight</a>';
                                 } else if ($r['mp_category'] == 'Medium') {
                                    echo '<a class="badge" style="background-color: #39cccc;">Medium</a>';
                                 } else if ($r['mp_category'] == 'Light') {
                                    echo '<a class="badge" style="background-color: #e83e8c;">Light</a>';
                                 }
               ?>
            </td>
            <td><?= number_format($r['mp_price'], 2, ",", "."); ?></td>
            <td><?= $r['mp_event']; ?></td>
            <td><?= $r['p_type']; ?></td>
            <td><?= $r['mp_desc']; ?></td>
         </tr>
         <?php $i++; ?>
         <?php endforeach; ?><?php
                           }

                           public function load_k5()
                           {
                              $k5 = $_GET['k5'];
                              $this->db->select('*');
                              $this->db->from('result r');
                              $this->db->join('menu_package mp', 'r.mpr_id = mp.id_mp');
                              $this->db->join('matrix m', 'r.mat_id = m.id_mat');
                              $this->db->where('c5', $k5);
                              $this->db->order_by('r.score', 'desc');
                              $data = $this->db->get('')->result_array();
                              $i = 1;
                              foreach ($data as $r) : ?>
         <tr>
            <th><?= $i; ?></th>
            <td>
               <img src="<?= base_url('assets/img/menu/') . $r['mp_image']; ?>" alt="profile picture" style="width: 150px; height: 100px;">
            </td>
            <td><?= $r['mp_name']; ?></td>
            <td style="color: white;">
               <?php
                                 if ($r['mp_category'] == 'Weight') {
                                    echo '<a class="badge" style="background-color: #605ca8;">Weight</a>';
                                 } else if ($r['mp_category'] == 'Medium') {
                                    echo '<a class="badge" style="background-color: #39cccc;">Medium</a>';
                                 } else if ($r['mp_category'] == 'Light') {
                                    echo '<a class="badge" style="background-color: #e83e8c;">Light</a>';
                                 }
               ?>
            </td>
            <td><?= number_format($r['mp_price'], 2, ",", "."); ?></td>
            <td><?= $r['mp_event']; ?></td>
            <td><?= $r['p_type']; ?></td>
            <td><?= $r['mp_desc']; ?></td>
         </tr>
         <?php $i++; ?>
         <?php endforeach; ?><?php
                           }

                           public function load_k6()
                           {
                              $k6 = $_GET['k6'];
                              $this->db->select('*');
                              $this->db->from('result r');
                              $this->db->join('menu_package mp', 'r.mpr_id = mp.id_mp');
                              $this->db->join('matrix m', 'r.mat_id = m.id_mat');
                              $this->db->where('c6', $k6);
                              $this->db->order_by('r.score', 'desc');
                              $data = $this->db->get('')->result_array();
                              $i = 1;
                              foreach ($data as $r) : ?>
         <tr>
            <th><?= $i; ?></th>
            <td>
               <img src="<?= base_url('assets/img/menu/') . $r['mp_image']; ?>" alt="profile picture" style="width: 150px; height: 100px;">
            </td>
            <td><?= $r['mp_name']; ?></td>
            <td style="color: white;">
               <?php
                                 if ($r['mp_category'] == 'Weight') {
                                    echo '<a class="badge" style="background-color: #605ca8;">Weight</a>';
                                 } else if ($r['mp_category'] == 'Medium') {
                                    echo '<a class="badge" style="background-color: #39cccc;">Medium</a>';
                                 } else if ($r['mp_category'] == 'Light') {
                                    echo '<a class="badge" style="background-color: #e83e8c;">Light</a>';
                                 }
               ?>
            </td>
            <td><?= number_format($r['mp_price'], 2, ",", "."); ?></td>
            <td><?= $r['mp_event']; ?></td>
            <td><?= $r['p_type']; ?></td>
            <td><?= $r['mp_desc']; ?></td>
         </tr>
         <?php $i++; ?>
         <?php endforeach; ?><?php
                           }
                        }
