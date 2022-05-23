<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Player extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mplayer');
  }


  public function index()
  {
    $data['status'] = 1;
    $data['title'] = 'M E D I A';
    $this->load->view('layouts/header', $data);
    $this->load->view('layouts/navbar');
    $this->load->view('dashboard_v');
    $this->load->view('layouts/footer', $data);
  }

  public function show()
  {
    $data['status'] = 0;
    $data['title'] = 'M E D I A';
    $data['media'] = $this->Mplayer->load();
    $this->load->view('layouts/header', $data);
    $this->load->view('layouts/navbar');
    $this->load->view('list_media_v', $data);
    $this->load->view('layouts/footer', $data);
  }

  public function create()
  {
    $data['status'] = 0;
    $data['title'] = 'M E D I A';
    $this->load->view('layouts/header', $data);
    $this->load->view('layouts/navbar');
    $this->load->view('create_v');
    $this->load->view('layouts/footer', $data);
  }

  public function do_upload()
  {
    $this->Mplayer->upload();
    redirect('player/show');
  }

  public function ajaxRead()
  {
    $data = $this->Mplayer->load();

    echo json_encode($data);
  }

  public function ajaxUpdate()
  {
    $id = $_POST['idMedia'];
    $nilai = $_POST['nilai'];
    $data = $this->Mplayer->update($id, $nilai);

    echo json_encode($data);
  }
}
  
  /* End of file Player.php */
