<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function index()
  {
    $data['judul'] = 'Kaizen';
    $this->load->view('template/head', $data);
    $this->load->view('template/sidebar');
    $this->load->view('template/nav');
    $this->load->view('mainV');
    $this->load->view('template/footer');
  }
}
  
  /* End of file Home.php */
