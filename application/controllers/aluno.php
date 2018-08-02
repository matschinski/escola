<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aluno extends CI_Controller {

   // public function verificar_sessao() {
  //      if ($this->session->userdata('logado') == false) {
  //          redirect('dashboard/login');
   //     }
  //  }

    public function index($indice = null) {
    //    $this->verificar_sessao();
        $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
        $this->load->view('aluno');
        $this->load->view('includes/html_footer');
    }
}
  ?>