<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
   public function getRec()
   {
      $this->db->select('*');
      $this->db->from('result r');
      $this->db->join('menu_package mp', 'r.mpr_id = mp.id_mp');
      $this->db->order_by('mp.mp_price', 'asc');
      $this->db->limit(8);
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getRB()
   {
      // SELECT * FROM order o JOIN menu_package mp ON o.mp_id = mp.id_mp WHERE mp.p_type = "rice box" ORDER BY mp.id_mp DESC LIMIT 3
      $this->db->select('*');
      $this->db->from('order o');
      $this->db->join('menu_package mp', 'o.mp_id = mp.id_mp');
      $this->db->where('mp.p_type', 'rice box');
      $this->db->order_by('mp.id_mp', 'desc');
      $this->db->limit(3);
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getSB()
   {
      // SELECT * FROM order o JOIN menu_package mp ON o.mp_id = mp.id_mp WHERE mp.p_type = "rice box" ORDER BY mp.id_mp DESC LIMIT 3
      $this->db->select('*');
      $this->db->from('order o');
      $this->db->join('menu_package mp', 'o.mp_id = mp.id_mp');
      $this->db->where('mp.p_type', 'snack box');
      $this->db->order_by('mp.id_mp', 'desc');
      $this->db->limit(3);
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getDB()
   {
      // SELECT * FROM order o JOIN menu_package mp ON o.mp_id = mp.id_mp WHERE mp.p_type = "rice box" ORDER BY mp.id_mp DESC LIMIT 3
      $this->db->select('*');
      $this->db->from('order o');
      $this->db->join('menu_package mp', 'o.mp_id = mp.id_mp');
      $this->db->where('mp.p_type', 'dessert box');
      $this->db->order_by('mp.id_mp', 'desc');
      $this->db->limit(3);
      $data = $this->db->get('')->result_array();
      return $data;
   }
}
