<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
   public function getSubMenu()
   {
      // $query = "SELECT sm.*, m.menu
      //             FROM user_sub_menu sm JOIN user_menu m
      //             ON sm.menu_id = m.id ORDER BY sm.id DESC";
      $this->db->select('user_sub_menu.*, user_menu.menu');
      $this->db->from('user_sub_menu');
      $this->db->join('user_menu', 'user_sub_menu.menu_id = user_menu.id_menu');
      $this->db->order_by('user_sub_menu.id_sm', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getMenumnById($id)
   {
      return $this->db->get_where('user_menu', ['id_menu' => $id])->row_array();
   }

   public function changeMenumn()
   {
      $data = [
         'menu' => $this->input->post('menu', true),
         'icons' => $this->input->post('icons', true)
      ];

      $this->db->where('id_menu', $this->input->post('id'));
      $this->db->update('user_menu', $data);
   }

   public function hapusMenumn($id)
   {
      $this->db->delete('user_menu', ['id_menu' => $id]);
   }

   public function getUMOrderBy()
   {
      $this->db->select('*');
      $this->db->from('user_menu');
      $this->db->order_by('id_menu', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getSubMenumnById($id)
   {
      return $this->db->get_where('user_sub_menu', ['id_sm' => $id])->row_array();
   }

   public function getSubMenurow($id)
   {
      $this->db->select('user_sub_menu.*, user_menu.menu');
      $this->db->from('user_sub_menu');
      $this->db->join('user_menu', 'user_sub_menu.menu_id = user_menu.id_menu');
      $this->db->where('user_sub_menu.id_sm', $id);
      $this->db->order_by('user_sub_menu.id_sm', 'desc');
      $data = $this->db->get('')->row_array();
      return $data;
   }

   public function changeSubMenumn()
   {
      $data = [
         'title' => $this->input->post('title', true),
         'menu_id' => $this->input->post('menu_id', true),
         'url' => $this->input->post('url', true),
         'icon' => $this->input->post('icon', true),
         'active' => $this->input->post('is_active', true)
      ];

      $this->db->where('id_sm', $this->input->post('id'));
      $this->db->update('user_sub_menu', $data);
   }

   public function hapusSubMenumn($id)
   {
      $this->db->delete('user_sub_menu', ['id_sm' => $id]);
   }
}
