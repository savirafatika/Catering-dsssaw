<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DSS_model extends CI_Model
{
   public function getAllMP()
   {
      $this->db->select('*');
      $this->db->from('menu_package');
      $this->db->order_by('id_mp', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getMPById($id_mp)
   {
      return $this->db->get_where('menu_package', ['id_mp' => $id_mp])->row_array();
   }

   public function hapusMP($id)
   {
      $this->db->delete('menu_package', ['id_mp' => $id]);
   }

   public function getAllCriteria()
   {
      $this->db->select('*');
      $this->db->from('criteria');
      $this->db->order_by('id_criteria', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getCode($table = null, $field = null)
   {
      $this->db->select_max($field);
      $this->db->order_by($field, 'desc');
      return $this->db->get($table)->row_array()[$field];
   }

   public function getCriteriaById($id)
   {
      return $this->db->get_where('criteria', ['id_criteria' => $id])->row_array();
   }

   public function changeCriteria()
   {
      $data = [
         'c_name' => $this->input->post('Criteria'),
         'type' => $this->input->post('Type'),
         'pref' => $this->input->post('Pref')
      ];

      $this->db->where('id_criteria', $this->input->post('id_criteria'));
      $this->db->update('criteria', $data);
   }

   public function hapusCriteria($id)
   {
      $this->db->delete('criteria', ['id_criteria' => $id]);
   }

   public function getAllSC()
   {
      // $query = 'SELECT * FROM sub_criteria sc JOIN criteria c on sc.criteria_id = c.id_criteria';
      $this->db->select('*');
      $this->db->from('sub_criteria sc');
      $this->db->join('criteria c', 'sc.criteria_id = c.id_criteria');
      $this->db->order_by('sc.id_sc', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getSCById($id)
   {
      $this->db->select('*');
      $this->db->from('sub_criteria sc');
      $this->db->join('criteria c', 'sc.criteria_id = c.id_criteria');
      $this->db->where('sc.id_sc', $id);
      $this->db->order_by('sc.id_sc', 'desc');
      $data = $this->db->get('')->row_array();
      return $data;
   }

   public function changeSC()
   {
      $data = [
         'sub' => $this->input->post('SCriteria'),
         'weight' => $this->input->post('Weight'),
         'criteria_id' => $this->input->post('SCid')
      ];

      $this->db->where('id_sc', $this->input->post('Code'));
      $this->db->update('sub_criteria', $data);
   }

   public function hapusSC($id)
   {
      $this->db->delete('sub_criteria', ['id_sc' => $id]);
   }

   public function getAllMatriks()
   {
      // SELECT m.*, mp.id_mp, mp.mp_category, mp.mp_name, mp.mp_event, mp.mp_price, mp.p_type FROM matrix m JOIN menu_package mp on m.idv_mp = mp.id_mp
      $this->db->select('m.*, mp.id_mp, mp.mp_category, mp.mp_name, mp.mp_event, mp.mp_price, mp.p_type');
      $this->db->from('matrix m');
      $this->db->join('menu_package mp', 'm.idv_mp = mp.id_mp');
      $this->db->order_by('id_mat', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getC()
   {
      $this->db->select('id_criteria');
      $this->db->from('criteria');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getAllCrAcs()
   {
      $this->db->select('*');
      $this->db->from('criteria');
      $this->db->order_by('id_criteria');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getAllSC4()
   {
      $this->db->select('*');
      $this->db->from('sub_criteria');
      $this->db->where('criteria_id', 'C04');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getAllSC5()
   {
      $this->db->select('*');
      $this->db->from('sub_criteria');
      $this->db->where('criteria_id', 'C05');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getAllSC6()
   {
      $this->db->select('*');
      $this->db->from('sub_criteria');
      $this->db->where('criteria_id', 'C06');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function hapusMtx($id)
   {
      $this->db->delete('matrix', ['id_mat' => $id]);
      $this->db->delete('result', ['mat_id' => $id]);
   }

   public function hapusAllMtx()
   {
      $this->db->truncate('matrix');
   }

   public function hapusAllRs()
   {
      $this->db->truncate('result');
   }

   public function getAllMPAsc()
   {
      // SELECT * FROM menu_package mp LEFT JOIN matrix m on mp.id_mp = m.idv_mp WHERE m.id_mat is null
      $this->db->select('*');
      $this->db->from('menu_package mp');
      $this->db->join('matrix m', 'mp.id_mp = m.idv_mp ', 'left');
      $this->db->where('m.id_mat', null);
      $this->db->order_by('id_mp', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }

   public function getMatbyId($id)
   {
      return $this->db->get_where('matrix', ['id_mat' => $id])->row_array();
   }

   public function changeMatrix()
   {
      $data = [
         'c4' => $this->input->post('k4'),
         'c5' => $this->input->post('k5'),
         'c6' => $this->input->post('k6')
      ];

      $this->db->where('id_mat', $this->input->post('id_mat'));
      $this->db->update('matrix', $data);
   }

   public function MaxC1()
   {
      // SELECT MAX(matrix.c1) as C1 FROM matrix
      $this->db->select_max('c1', 'C1');
      $data = $this->db->get('matrix')->row_array();
      return $data;
   }

   public function MinC2()
   {
      // SELECT MIN(matrix.c2) as C2 FROM matrix
      $this->db->select_min('c2', 'C2');
      $data = $this->db->get('matrix')->row_array();
      return $data;
   }

   public function MaxC3()
   {
      // SELECT MAX(matrix.c3) as C3 FROM matrix
      $this->db->select_max('c3', 'C3');
      $data = $this->db->get('matrix')->row_array();
      return $data;
   }

   public function MinC4()
   {
      // SELECT MIN(matrix.c4) as C4 FROM matrix
      $this->db->select_min('c4', 'C4');
      $data = $this->db->get('matrix')->row_array();
      return $data;
   }

   public function MaxC5()
   {
      // SELECT MAX(matrix.c5) as C5 FROM matrix
      $this->db->select_max('c5', 'C5');
      $data = $this->db->get('matrix')->row_array();
      return $data;
   }

   public function MinC6()
   {
      // SELECT MIN(matrix.c6) as C6 FROM matrix
      $this->db->select_min('c6', 'C6');
      $data = $this->db->get('matrix')->row_array();
      return $data;
   }

   public function getBobotK1()
   {
      return $this->db->get_where('criteria', ['id_criteria' => 'C01'])->row_array();
   }

   public function getBobotK2()
   {
      return $this->db->get_where('criteria', ['id_criteria' => 'C02'])->row_array();
   }

   public function getBobotK3()
   {
      return $this->db->get_where('criteria', ['id_criteria' => 'C03'])->row_array();
   }

   public function getBobotK4()
   {
      return $this->db->get_where('criteria', ['id_criteria' => 'C04'])->row_array();
   }

   public function getBobotK5()
   {
      return $this->db->get_where('criteria', ['id_criteria' => 'C05'])->row_array();
   }

   public function getBobotK6()
   {
      return $this->db->get_where('criteria', ['id_criteria' => 'C06'])->row_array();
   }

   public function Rank()
   {
      $idMat = $this->input->post('matId');
      $result = array();
      foreach ($idMat as $key => $val) {
         $result[] = array(
            'score'  => $_POST['Score'][$key],
            'mat_id'  => $_POST['matId'][$key],
            'mpr_id'  => $_POST['mpId'][$key]
         );
      }
      $this->db->insert_batch('result', $result);
   }

   public function getAllResult()
   {
      // SELECT * FROM result r JOIN menu_package mp ON r.mpr_id = mp.id_mp ORDER BY r.score DESC
      $this->db->select('*');
      $this->db->from('result r');
      $this->db->join('menu_package mp', 'r.mpr_id = mp.id_mp');
      $this->db->order_by('r.score', 'desc');
      $data = $this->db->get('')->result_array();
      return $data;
   }
   // tutup class
}
