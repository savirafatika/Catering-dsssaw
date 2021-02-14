<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catering_model extends CI_Model
{
   public function getSlider()
   {
      // SELECT * FROM result r JOIN menu_package mp ON r.mpr_id = mp.id_mp ORDER BY r.score DESC LIMIT 3
      $this->db->select('*');
      $this->db->from('result r');
      $this->db->join('menu_package mp', 'r.mpr_id = mp.id_mp');
      $this->db->order_by('r.score', 'desc');
      $this->db->limit(3);
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getSharing()
   {
      // SELECT * FROM result r JOIN menu_package mp ON r.mpr_id = mp.id_mp WHERE mp.p_type = "sharing" ORDER BY r.score DESC LIMIT 3
      $this->db->select('*');
      $this->db->from('result r');
      $this->db->join('menu_package mp', 'r.mpr_id = mp.id_mp');
      $this->db->where('mp.p_type', 'sharing');
      $this->db->order_by('r.score', 'desc');
      $this->db->limit(3);
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getSB()
   {
      // SELECT * FROM menu_package mp WHERE mp.p_type = "snack box" ORDER BY mp.mp_price ASC
      $this->db->select('*');
      $this->db->from('menu_package mp');
      $this->db->where('mp.p_type', 'snack box');
      $this->db->order_by('mp.mp_price', 'asc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getSH()
   {
      // SELECT * FROM menu_package mp WHERE mp.p_type = "sharing" ORDER BY mp.mp_price ASC
      $this->db->select('*');
      $this->db->from('menu_package mp');
      $this->db->where('mp.p_type', 'sharing');
      $this->db->order_by('mp.mp_price', 'asc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getDB()
   {
      // SELECT * FROM menu_package mp WHERE mp.p_type = "dessert box" ORDER BY mp.mp_price ASC
      $this->db->select('*');
      $this->db->from('menu_package mp');
      $this->db->where('mp.p_type', 'dessert box');
      $this->db->order_by('mp.mp_price', 'asc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getRB()
   {
      // SELECT * FROM menu_package mp WHERE mp.p_type = "rice box" ORDER BY mp.mp_price ASC
      $this->db->select('*');
      $this->db->from('menu_package mp');
      $this->db->where('mp.p_type', 'rice box');
      $this->db->order_by('mp.mp_price', 'asc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getB()
   {
      // SELECT * FROM menu_package mp WHERE mp.p_type = "buffet" ORDER BY mp.mp_price ASC
      $this->db->select('*');
      $this->db->from('menu_package mp');
      $this->db->where('mp.p_type', 'buffet');
      $this->db->order_by('mp.mp_price', 'asc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getAllSC1()
   {
      $this->db->select('*');
      $this->db->from('sub_criteria');
      $this->db->where('criteria_id', 'C01');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getAllSC2()
   {
      $this->db->select('*');
      $this->db->from('sub_criteria');
      $this->db->where('criteria_id', 'C02');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getAllSC3()
   {
      $this->db->select('*');
      $this->db->from('sub_criteria');
      $this->db->where('criteria_id', 'C03');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getAllMProw()
   {
      $this->db->select('*');
      $this->db->from('menu_package');
      $this->db->order_by('id_mp', 'desc');
      $data = $this->db->get('')->row_array();
      return $data;
   }

   public function getAllMP()
   {
      $this->db->select('*');
      $this->db->from('menu_package mp');
      $this->db->order_by('mp.id_mp', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getAllOrder()
   {
      $id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->db->select('*');
      $this->db->from('order or');
      $this->db->join('menu_package mp', 'or.mp_id = mp.id_mp');
      $this->db->where('user_id', $id['id']);
      $this->db->order_by('or.no_invoice', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getAllOrderReport()
   {
      $this->db->select('*');
      $this->db->from('order or');
      $this->db->join('menu_package mp', 'or.mp_id = mp.id_mp');
      $this->db->order_by('or.no_invoice', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getQty()
   {
      $id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->db->select_sum('qty');
      $this->db->from('order or');
      $this->db->join('menu_package mp', 'or.mp_id = mp.id_mp');
      $this->db->where('user_id', $id['id']);
      $data = $this->db->get('')->row_array();
      return $data;
   }

   public function getQtyReport()
   {
      $this->db->select_sum('qty');
      $this->db->from('order or');
      $this->db->join('menu_package mp', 'or.mp_id = mp.id_mp');
      $data = $this->db->get('')->row_array();
      return $data;
   }

   public function getTotal()
   {
      $id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->db->select_sum('bill');
      $this->db->from('order or');
      $this->db->join('menu_package mp', 'or.mp_id = mp.id_mp');
      $this->db->where('user_id', $id['id']);
      $data = $this->db->get('')->row_array();
      return $data;
   }

   public function getTotalReport()
   {
      $this->db->select_sum('bill');
      $this->db->from('order or');
      $this->db->join('menu_package mp', 'or.mp_id = mp.id_mp');
      $data = $this->db->get('')->row_array();
      return $data;
   }

   public function getCodeByDate($prefix = null, $table = null, $field = null)
   {
      // after maksudnya peletakan % di query
      $this->db->select('no_invoice');
      $this->db->like($field, $prefix, 'after');
      $this->db->order_by($field, 'desc');
      $this->db->limit(1);

      return $this->db->get($table)->row_array()[$field];
   }

   public function hapusOrder($no_invoice)
   {
      $this->db->delete('order', ['no_invoice' => $no_invoice]);
   }

   public function changeOrder()
   {
      $q = $this->input->post('jml');
      $b = $this->input->post('price');
      $bill = $q * $b;
      $data = [
         'no_invoice' => $this->input->post('no_invoice'),
         'qty' => $q,
         'bill' => $bill
      ];

      $this->db->where('no_invoice', $this->input->post('no_invoice'));
      $this->db->update('order', $data);
   }

   public function getAllLatestOrder()
   {
      $this->db->select('*');
      $this->db->from('order or');
      $this->db->join('menu_package mp', 'or.mp_id = mp.id_mp');
      $this->db->order_by('or.no_invoice', 'desc');
      $this->db->limit(5);
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getAllResult()
   {
      // SELECT * FROM result r JOIN menu_package mp ON r.mpr_id = mp.id_mp JOIN matrix m ON r.mat_id = m.id_mat ORDER BY r.score DESC
      $this->db->select('*');
      $this->db->from('result r');
      $this->db->join('menu_package mp', 'r.mpr_id = mp.id_mp');
      $this->db->join('matrix m', 'r.mat_id = m.id_mat');
      $this->db->order_by('r.score', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }
}
