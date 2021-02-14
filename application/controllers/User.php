<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
   //security
   public function __construct()
   {
      parent::__construct();
      is_logged_in();
   }

   public function index()
   {
      $data['title'] = 'My Profile';
      $data['mn'] = 'User';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/index', $data);
      $this->load->view('templates/footer');
   }

   public function edit()
   {
      $data['title'] = 'Edit Profile';
      $data['mn'] = 'User';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
      $this->form_validation->set_rules('address', 'Address', 'required|trim');
      $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('user/edit', $data);
         $this->load->view('templates/footer');
      } else {

         // cek jika ada gambar yg akan diupload
         $upload_image = $_FILES['image']['name'];

         if ($upload_image) {
            $config['upload_path'] = './assets/img/profile/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
               $old_image = $data['user']['image'];
               if ($old_image != 'default.jpg') {
                  unlink(FCPATH . 'assets/img/profile/' . $old_image);
               }

               $new_image = $this->upload->data('file_name');
               $this->db->set('image', $new_image);
            } else {
               $error = $this->upload->display_errors();
               $this->session->set_flashdata('message-danger', $error);
               redirect('user/edit');
            }
         }

         $name =  $this->input->post('name', true);
         $address = $this->input->post('address', true);
         $phone = $this->input->post('phone', true);
         $email =  $this->input->post('email', true);

         $data = [
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'email' => $email
         ];

         $this->db->where('email', $email);
         $this->db->update('user', $data);

         $this->session->set_flashdata('message', 'Profile Changed!');
         redirect('user');
      }
   }

   public function changePassword()
   {
      $data['title'] = 'Change Password';
      $data['mn'] = 'User';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
      $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[8]|matches[new_password2]');
      $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|matches[new_password1]');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('user/changepassword', $data);
         $this->load->view('templates/footer');
      } else {
         $current_password = $this->input->post('current_password');
         $new_password = $this->input->post('new_password1');

         if (!password_verify($current_password, $data['user']['password'])) {
            $this->session->set_flashdata('message-danger', 'Wrong Current Password!');
            redirect('user/changepassword');
         } else {
            if ($current_password == $new_password) {
               $this->session->set_flashdata('message-danger', 'New password cannot be the same as current password!');
               redirect('user/changepassword');
            } else {
               // passwordnya sudah bener
               $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

               $this->db->set('password', $password_hash);
               $this->db->where('email', $this->session->userdata('email'));
               $this->db->update('user');

               $this->session->set_flashdata('message', 'Password Changed!');
               redirect('user/changepassword');
            }
         }
      }
   }
   // tutup
}
