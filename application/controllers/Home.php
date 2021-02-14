<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
   public function index()
   {
      $data['title'] = "Home";

      $this->load->model('Home_model', 'hm');

      $data['rec'] = $this->hm->getRec();
      $data['rb'] = $this->hm->getRB();
      $data['sb'] = $this->hm->getSB();
      $data['db'] = $this->hm->getDB();

      $this->load->view('templates/home_header', $data);
      $this->load->view('home/index');
      $this->load->view('templates/home_footer');
   }
}
