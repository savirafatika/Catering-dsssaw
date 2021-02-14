<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DSS extends CI_Controller
{
   //security
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->model('DSS_model', 'dss');
   }

   public function index()
   {
      $data['title'] = 'Menu Package';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['mp'] = $this->dss->getAllMP();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('dss/index', $data);
      $this->load->view('templates/footer');
   }

   public function add_mp()
   {
      $data['title'] = 'Menu Package';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['mp'] = $this->dss->getAllMP();

      $this->form_validation->set_rules('Category', 'Category', 'required');
      $this->form_validation->set_rules('Name', 'Name', 'required');
      $this->form_validation->set_rules('Desc', 'Desc', 'required');
      $this->form_validation->set_rules('Event', 'Event', 'required');
      $this->form_validation->set_rules('Price', 'Price', 'required|trim|numeric');
      $this->form_validation->set_rules('Type', 'Type', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('dss/add_mp', $data);
         $this->load->view('templates/footer');
      } else {

         // cek jika ada gambar yg akan diupload
         $upload_image = $_FILES['mp_image']['name'];

         if ($upload_image = '') {
            # code...
         } else {
            $config['upload_path']          = './assets/img/menu/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['max_width']            = 4000;
            $config['max_height']           = 4000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('mp_image')) {
               $Image = $this->upload->data('file_name');
            } else {
               $error = $this->upload->display_errors();
               $this->session->set_flashdata('message-danger', $error);
               redirect('dss/add_mp');
            }
         }

         $data = [
            'mp_category' => $this->input->post('Category'),
            'mp_name' => $this->input->post('Name'),
            'mp_desc' => $this->input->post('Desc'),
            'mp_event' => $this->input->post('Event'),
            'mp_image' => $Image,
            'mp_price' => $this->input->post('Price'),
            'p_type' => $this->input->post('Type'),
         ];
         $this->db->insert('menu_package', $data);
         $this->session->set_flashdata('message', 'New Menu Package Added!');
         redirect('dss');
      }
   }

   public function edit_mp($id_mp)
   {
      $data['title'] = 'Menu Package';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['mp_row'] = $this->dss->getMPById($id_mp);

      $this->form_validation->set_rules('Category', 'Category', 'required');
      $this->form_validation->set_rules('Name', 'Name', 'required');
      $this->form_validation->set_rules('Desc', 'Desc', 'required');
      $this->form_validation->set_rules('Event', 'Event', 'required');
      $this->form_validation->set_rules('Price', 'Price', 'required|trim|numeric');
      $this->form_validation->set_rules('Type', 'Type', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('dss/edit_mp', $data);
         $this->load->view('templates/footer');
      } else {

         // cek jika ada gambar yg akan diupload
         $upload_image = $_FILES['mp_image']['name'];

         if ($upload_image) {
            $config['upload_path']          = './assets/img/menu/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('mp_image')) {
               $old_image = $data['mp_row']['mp_image'];
               if ($old_image != null) {
                  unlink(FCPATH . 'assets/img/menu/' . $old_image);
               }

               $new_image = $this->upload->data('file_name');
               $this->db->set('mp_image', $new_image);
            } else {
               $error = $this->upload->display_errors();
               $this->session->set_flashdata('message-danger', $error);
               redirect('dss');
            }
         }

         $dt = [
            'mp_category' => $this->input->post('Category', true),
            'mp_name' => $this->input->post('Name', true),
            'mp_desc' => $this->input->post('Desc', true),
            'mp_event' => $this->input->post('Event', true),
            'mp_price' => $this->input->post('Price', true),
            'p_type' => $this->input->post('Type', true)
         ];

         $this->db->where('id_mp', $id_mp);
         $this->db->update('menu_package', $dt);

         $this->session->set_flashdata('message', 'Menu Package Changed!');
         redirect('dss');
      }
   }

   public function hapus_mp($id)
   {
      $this->dss->hapusMP($id);
      $this->session->set_flashdata('message', 'Menu and Package has been Deleted!');
      redirect('dss');
   }

   public function criteria()
   {
      $data['title'] = 'Criteria';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['criteria'] = $this->dss->getAllCriteria();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('dss/criteria', $data);
      $this->load->view('templates/footer');
   }

   public function add_criteria()
   {
      $data['title'] = 'Criteria';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['criteria'] = $this->dss->getAllCriteria();

      $this->form_validation->set_rules('Criteria', 'Criteria', 'required');
      $this->form_validation->set_rules('Type', 'Type', 'required');
      $this->form_validation->set_rules('Pref', 'Pref', 'required|trim|numeric');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('dss/add_criteria', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'id_criteria' => $this->input->post('Code'),
            'c_name' => $this->input->post('Criteria'),
            'type' => $this->input->post('Type'),
            'pref' => $this->input->post('Pref')
         ];
         $this->db->insert('criteria', $data);
         $this->session->set_flashdata('message', 'New Criteria Added!');
         redirect('dss/criteria');
      }
   }

   public function edit_criteria($id)
   {
      $data['title'] = 'Criteria';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['criteria'] = $this->dss->getAllCriteria();
      $data['cr_row'] = $this->dss->getCriteriaById($id);

      $this->form_validation->set_rules('Criteria', 'Criteria', 'required');
      $this->form_validation->set_rules('Type', 'Type', 'required');
      $this->form_validation->set_rules('Pref', 'Pref', 'required|trim|numeric');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('dss/edit_criteria', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'c_name' => $this->input->post('Criteria'),
            'type' => $this->input->post('Type'),
            'pref' => $this->input->post('Pref')
         ];
         $this->dss->changeCriteria();
         $this->session->set_flashdata('message', 'Data Criteria Changed!');
         redirect('dss/criteria');
      }
   }

   public function hapus_criteria($id)
   {
      $this->dss->hapusCriteria($id);
      $this->session->set_flashdata('message', 'Criteria has been Deleted!');
      redirect('dss/criteria');
   }

   public function sc()
   {
      $data['title'] = 'Sub Criteria';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['sc'] = $this->dss->getAllSC();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('dss/sc', $data);
      $this->load->view('templates/footer');
   }

   public function add_sc()
   {
      $data['title'] = 'Sub Criteria';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['sc'] = $this->dss->getAllSC();
      $data['criteria'] = $this->dss->getAllCriteria();

      $this->form_validation->set_rules('SCriteria', 'SCriteria', 'required');
      $this->form_validation->set_rules('Weight', 'Weight', 'required|trim|numeric');
      $this->form_validation->set_rules('SCid', 'SCid', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('dss/add_sc', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'id_sc' => $this->input->post('Code'),
            'sub' => $this->input->post('SCriteria'),
            'weight' => $this->input->post('Weight'),
            'criteria_id' => $this->input->post('SCid')
         ];
         $this->db->insert('sub_criteria', $data);
         $this->session->set_flashdata('message', 'New Sub Criteria Added!');
         redirect('dss/sc');
      }
   }

   public function edit_sc($id)
   {
      $data['title'] = 'Sub Criteria';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['sc'] = $this->dss->getAllSC();
      $data['criteria'] = $this->dss->getAllCriteria();
      $data['sc_row'] = $this->dss->getSCById($id);

      $this->form_validation->set_rules('SCriteria', 'SCriteria', 'required');
      $this->form_validation->set_rules('Weight', 'Weight', 'required|trim|numeric');
      $this->form_validation->set_rules('SCid', 'SCid', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('dss/edit_sc', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'sub' => $this->input->post('SCriteria'),
            'weight' => $this->input->post('Weight'),
            'criteria_id' => $this->input->post('SCid')
         ];
         $this->dss->changeSC();
         $this->session->set_flashdata('message', 'Data Sub Criteria Changed!');
         redirect('dss/sc');
      }
   }

   public function hapus_sc($id)
   {
      $this->dss->hapusSC($id);
      $this->session->set_flashdata('message', 'Sub Criteria has been Deleted!');
      redirect('dss/sc');
   }

   public function matrix()
   {
      $data['title'] = 'Matrix';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['matriks'] = $this->dss->getAllMatriks();
      $data['cr'] = $this->dss->getC();
      $data['max1'] = $this->dss->MaxC1();
      $data['min2'] = $this->dss->MinC2();
      $data['max3'] = $this->dss->MaxC3();
      $data['min4'] = $this->dss->MinC4();
      $data['max5'] = $this->dss->MaxC5();
      $data['min6'] = $this->dss->MinC6();
      $data['b1'] = $this->dss->getBobotK1();
      $data['b2'] = $this->dss->getBobotK2();
      $data['b3'] = $this->dss->getBobotK3();
      $data['b4'] = $this->dss->getBobotK4();
      $data['b5'] = $this->dss->getBobotK5();
      $data['b6'] = $this->dss->getBobotK6();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('dss/matrix', $data);
      $this->load->view('templates/footer');
   }

   public function add_av()
   {
      $data['title'] = 'Matrix';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['matriks'] = $this->dss->getAllMatriks();
      $data['mpasc'] = $this->dss->getAllMPAsc();
      $data['C4'] = $this->dss->getAllSC4();
      $data['C5'] = $this->dss->getAllSC5();
      $data['C6'] = $this->dss->getAllSC6();

      $this->form_validation->set_rules('Menu', 'Menu', 'required|trim|numeric');
      $this->form_validation->set_rules('k1', 'k1', 'required|trim|numeric');
      $this->form_validation->set_rules('k2', 'k2', 'required|trim|numeric');
      $this->form_validation->set_rules('k3', 'k3', 'required|trim|numeric');
      $this->form_validation->set_rules('k4', 'k4', 'required|trim|numeric');
      $this->form_validation->set_rules('k5', 'k5', 'required|trim|numeric');
      $this->form_validation->set_rules('k6', 'k6', 'required|trim|numeric');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('dss/add_av', $data);
         $this->load->view('templates/footer');
      } else {
         $up = [
            'c1' => $this->input->post('k1'),
            'c2' => $this->input->post('k2'),
            'c3' => $this->input->post('k3'),
            'c4' => $this->input->post('k4'),
            'c5' => $this->input->post('k5'),
            'c6' => $this->input->post('k6'),
            'idv_mp' => $this->input->post('Menu')
         ];

         $this->db->insert('matrix', $up);
         $this->session->set_flashdata('message', 'New Alternative Value Added to Matrix!');
         redirect('dss/matrix');
      }
   }

   public function edit_matrix($id)
   {
      $data['title'] = 'Matrix';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['matriks'] = $this->dss->getAllMatriks();
      $data['C4'] = $this->dss->getAllSC4();
      $data['C5'] = $this->dss->getAllSC5();
      $data['C6'] = $this->dss->getAllSC6();
      $data['mat_row'] = $this->dss->getMatbyId($id);

      $this->form_validation->set_rules('k4', 'k4', 'required|trim|numeric');
      $this->form_validation->set_rules('k5', 'k5', 'required|trim|numeric');
      $this->form_validation->set_rules('k6', 'k6', 'required|trim|numeric');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('dss/edit_matrix', $data);
         $this->load->view('templates/footer');
      } else {
         $this->dss->changeMatrix();
         $this->session->set_flashdata('message', 'Alternative Value Changed!');
         redirect('dss/matrix');
      }
   }

   public function hapus_matrix($id)
   {
      $this->dss->hapusMtx($id);
      $this->session->set_flashdata('message', 'Alternative has been Deleted!');
      redirect('dss/matrix');
   }

   public function hapusemua_matrix()
   {
      $this->dss->hapusAllMtx();
      $this->dss->hapusAllRs();
      $this->session->set_flashdata('message', 'All Alternative has been Deleted!');
      redirect('dss/matrix');
   }

   public function hapusemua_result()
   {
      $this->dss->hapusAllRs();
      $this->session->set_flashdata('message', 'Results have been Cleared!');
      redirect('dss/matrix');
   }

   public function rangking()
   {
      $this->dss->Rank();
      $this->session->set_flashdata('message', 'Alternative has been Ranked!');
      redirect('dss/ranked');
   }

   public function ranked()
   {
      $data['title'] = 'Matrix';
      $data['mn'] = 'DSS';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['result'] = $this->dss->getAllResult();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('dss/ranked', $data);
      $this->load->view('templates/footer');
   }
   // tutup class
}
