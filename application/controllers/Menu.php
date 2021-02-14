<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
   //security
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
      $this->load->model('Menu_model');
   }

   public function index()
   {
      $data['title'] = 'Menu Management';
      $data['mn'] = 'Menu';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['menu'] = $this->Menu_model->getUMOrderBy();

      $this->form_validation->set_rules('menu', 'Menu', 'required');
      $this->form_validation->set_rules('icons', 'Icons', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('menu/index', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'menu' => $this->input->post('menu'),
            'icons' => $this->input->post('icons')
         ];
         $this->db->insert('user_menu', $data);
         $this->session->set_flashdata('message', 'Menu Added!');
         redirect('menu');
      }
   }

   public function add_menu()
   {
      $data['title'] = 'Menu Management';
      $data['mn'] = 'Menu';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['menu'] = $this->Menu_model->getUMOrderBy();

      $this->form_validation->set_rules('menu', 'Menu', 'required');
      $this->form_validation->set_rules('icons', 'Icons', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('menu/add_menu', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'menu' => $this->input->post('menu'),
            'icons' => $this->input->post('icons')
         ];
         $this->db->insert('user_menu', $data);
         $this->session->set_flashdata('message', 'New Menu Added!');
         redirect('menu');
      }
   }

   public function edit_menu($id)
   {
      $data['title'] = 'Menu Management';
      $data['mn'] = 'Menu';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['menu'] = $this->Menu_model->getUMOrderBy();

      $data['menumn'] = $this->Menu_model->getMenumnById($id);

      $this->form_validation->set_rules('menu', 'Menu', 'required');
      $this->form_validation->set_rules('icons', 'Icons', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('menu/edit_menu', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'menu' => $this->input->post('menu'),
            'icons' => $this->input->post('icons')
         ];
         $this->Menu_model->changeMenumn();
         $this->session->set_flashdata('message', 'Menu Changed!');
         redirect('menu');
      }
   }

   public function hapus_menu($id)
   {
      $this->Menu_model->hapusMenumn($id);
      $this->session->set_flashdata('message', 'Menu has been Deleted!');
      redirect('menu');
   }

   public function submenu()
   {
      $data['title'] = 'Submenu Management';
      $data['mn'] = 'Menu';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->model('Menu_model', 'menu');

      $data['subMenu'] = $this->menu->getSubMenu();
      $data['menu'] = $this->Menu_model->getUMOrderBy();

      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('menu_id', 'Menu', 'required');
      $this->form_validation->set_rules('url', 'Url', 'required');
      $this->form_validation->set_rules('icon', 'Icon', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('menu/submenu', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'active' => $this->input->post('is_active')
         ];
         $this->db->insert('user_sub_menu', $data);
         $this->session->set_flashdata('message', 'Sub Menu Added!');
         redirect('menu/submenu');
      }
   }

   public function add_submenu()
   {
      $data['title'] = 'Submenu Management';
      $data['mn'] = 'Menu';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->model('Menu_model', 'menu');

      $data['subMenu'] = $this->menu->getSubMenu();
      $data['menu'] = $this->Menu_model->getUMOrderBy();

      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('menu_id', 'Menu', 'required');
      $this->form_validation->set_rules('url', 'Url', 'required');
      $this->form_validation->set_rules('icon', 'Icon', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('menu/add_submenu', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'active' => $this->input->post('is_active')
         ];
         $this->db->insert('user_sub_menu', $data);
         $this->session->set_flashdata('message', 'New Sub Menu Added!');
         redirect('menu/submenu');
      }
   }

   public function edit_submenu($id)
   {
      $data['title'] = 'Submenu Management';
      $data['mn'] = 'Menu';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['menu'] = $this->Menu_model->getUMOrderBy();
      $data['subMenu'] = $this->Menu_model->getSubMenu();

      $data['submenurow'] = $this->Menu_model->getSubMenurow($id);
      $data['submenumn'] = $this->Menu_model->getSubMenumnById($id);

      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('menu_id', 'Menu', 'required');
      $this->form_validation->set_rules('url', 'Url', 'required');
      $this->form_validation->set_rules('icon', 'Icon', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('menu/edit_submenu', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'active' => $this->input->post('is_active')
         ];
         $this->Menu_model->changeSubMenumn();
         $this->session->set_flashdata('message', 'Sub Menu Changed!');
         redirect('menu/submenu');
      }
   }

   public function hapus_submenu($id)
   {
      $this->Menu_model->hapusSubMenumn($id);
      $this->session->set_flashdata('message', 'Sub Menu has been Deleted!');
      redirect('menu/submenu');
   }
}
