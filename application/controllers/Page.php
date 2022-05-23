<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mplayer');
  }

  public function index()
  {
    $data['status'] = 0;
    $data['title'] = 'One Page';
    $this->load->view('layouts/header', $data);
    $this->load->view('layouts/navbar');
    $this->load->view('page/home_v');
    $this->load->view('layouts/footer', $data);
  }

  public function create()
  {
    $this->load->view('page/navigation');
  }

  public function show()
  {
    $this->load->view('page/input_v');
  }
}
  
  /* End of file Page.php */
