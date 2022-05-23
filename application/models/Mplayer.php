<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mplayer extends CI_Model
{

  function load()
  {
    return $this->db->get('tb_media')->result_array();
  }

  function upload()
  {
    $config['upload_path']          = './assets/upload';
    $config['allowed_types']        = 'gif|jpg|png|mp4|webm';
    $config['max_size']             = 2000;
    $config['max_width']            = 1280;
    $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('userfile')) {
      $error = array('error' => $this->upload->display_errors());

      print_r($error);
    } else {
      $data = array('up' => $this->upload->data());

      $file = [
        'id' => uniqid(),
        'nama_file' => $data['up']['file_name'],
        'ekstensi' => $data['up']['file_type'],
        'direktori_file' => $data['up']['file_path'],
        'ukuran_file' => $data['up']['file_size'],
      ];

      $this->db->insert('tb_media', $file);
    }
  }

  function update($id, $is_active)
  {
    if ($is_active == 1) {
      $data = 0;
      $this->db->set('is_active', $data);
    } else {
      $data = 1;
      $this->db->set('is_active', $data);
    }
    $this->db->where('id', $id);
    $this->db->update('tb_media');
    return $data;
  }
}
  
  /* End of file Mplayer.php */
