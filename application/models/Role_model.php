<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
   public function getAllRole()
   {
      $this->db->select('*');
      $this->db->from('user_role');
      $this->db->order_by('id_role', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getRoleById($id)
   {
      return $this->db->get_where('user_role', ['id_role' => $id])->row_array();
   }

   public function changeRole()
   {
      $data = [
         'role' => $this->input->post('role', true)
      ];

      $this->db->where('id_role', $this->input->post('id_role'));
      $this->db->update('user_role', $data);
   }

   public function hapusRole($id)
   {
      $this->db->delete('user_role', ['id_role' => $id]);
   }
}
