<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
   //security
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->model('Role_model', 'rolem');
      $this->load->model('Member_model', 'member');
      $this->load->model('Catering_model', 'gt');
      $this->load->model('DSS_model', 'dss');
   }

   public function index()
   {
      $data['title'] = 'Dashboard';
      $data['mn'] = 'Admin';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['rct'] = $this->gt->getSlider();
      $data['Order'] = $this->gt->getAllLatestOrder();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/index', $data);
      $this->load->view('templates/footer');
   }

   public function role()
   {
      $data['title'] = 'Role';
      $data['mn'] = 'Admin';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['role'] = $this->rolem->getAllRole();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/role', $data);
      $this->load->view('templates/footer');
   }

   public function roleAccess($role_id)
   {
      $data['title'] = 'Role';
      $data['mn'] = 'Admin';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['role'] = $this->db->get_where('user_role', ['id_role' => $role_id])->row_array();

      $this->db->where('id_menu !=', 1);
      $data['menu'] = $this->db->get('user_menu')->result_array();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/role-access', $data);
      $this->load->view('templates/footer');
   }

   public function changeAccess()
   {
      $menu_id = $this->input->post('menuId');
      $role_id = $this->input->post('roleId');

      $data = [
         'ur_role_id' => $role_id,
         'um_menu_id' => $menu_id
      ];

      $result = $this->db->get_where('user_access_menu', $data);

      if ($result->num_rows() < 1) {
         $this->db->insert('user_access_menu', $data);
      } else {
         $this->db->delete('user_access_menu', $data);
      }

      $this->session->set_flashdata('message', 'Access Changed!');
   }

   public function add_role()
   {
      $data['title'] = 'Role';
      $data['mn'] = 'Admin';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['role'] = $this->rolem->getAllRole();

      $this->form_validation->set_rules('role', 'Role', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('admin/add_role', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'role' => $this->input->post('role')
         ];
         $this->db->insert('user_role', $data);
         $this->session->set_flashdata('message', 'New Role Added!');
         redirect('admin/role');
      }
   }

   public function edit_role($id)
   {
      $data['title'] = 'Role';
      $data['mn'] = 'Admin';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['role'] = $this->rolem->getAllRole();
      $data['role_row'] = $this->rolem->getRoleById($id);

      $this->form_validation->set_rules('role', 'Role', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('admin/edit_role', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'role' => $this->input->post('role')
         ];
         $this->rolem->changeRole();
         $this->session->set_flashdata('message', 'Role Changed!');
         redirect('admin/role');
      }
   }

   public function hapus_role($id)
   {
      $this->rolem->hapusRole($id);
      $this->session->set_flashdata('message', 'User Role has been Deleted!');
      redirect('admin/role');
   }

   public function member()
   {
      $data['title'] = 'Member';
      $data['mn'] = 'Admin';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['member'] = $this->member->getAllMember();

      $this->form_validation->set_rules('is_active', 'is_active', 'required');
      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('admin/member', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'is_active' => $this->input->post('is_active')
         ];
         $this->member->changeActiveMember();
         $this->session->set_flashdata('message', 'Status Changed!');
         redirect('admin/member');
      }
   }

   public function hapus_member($id)
   {
      $this->member->hapusMember($id);
      $this->session->set_flashdata('message', 'Member has been Deleted!');
      redirect('admin/member');
   }

   public function sales()
   {
      $data['title'] = 'Sales';
      $data['mn'] = 'Admin';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['Order'] = $this->gt->getAllOrderReport();
      $data['qty'] = $this->gt->getQtyReport();
      $data['ttl'] = $this->gt->getTotalReport();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/sales', $data);
      $this->load->view('templates/footer');
   }
   // tutup class
}
