<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lojas extends CI_Controller
{
    var $data = array();
    public function info($id_parceiro) 
    {
        $this->load->model('parceiros_model','parceiros');
        $this->data['loja'] = $this->parceiros->getInfo($id_parceiro);
        $this->load->view('info', $this->data);
    }
}
