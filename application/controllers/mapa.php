<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapa extends CI_Controller
{
    var $data = array();

    public function __construct() {
        parent::__construct();
    }


    public function parceiros($uf) 
    {
        $this->load->model('parceiros_model', 'parceiros');
        // Executando método parceiros
        $dados = $this->parceiros->getByUf($uf);
        // Passando informações para view mapa
        $this->data['dados'] = $dados->result();
        $this->load->view('lista_lojas', $this->data);
    }

    public function index() {
        $this->load->model('Parceiros_model','parceiros');
        $this->data['lojas'] = $this->parceiros->groupedByUf();
        $this->data['totalLojas'] = $this->parceiros->total();
        $this->load->view('mapa', $this->data);
    }
}
