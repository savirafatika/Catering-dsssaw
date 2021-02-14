<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_model extends CI_Model
{
   public function getAllMember()
   {
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('role_id', 2);
      $this->db->order_by('id', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function changeActiveMember()
   {
      $data = [
         'is_active' => $this->input->post('is_active')
      ];

      $this->db->where('id', $this->input->post('id_user'));
      $this->db->update('user', $data);
   }

   public function hapusMember($id)
   {
      $this->db->delete('user', ['id' => $id, 'role_id' => 2]);
   }
}
