<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Parceiros_model extends MY_Model
{
     public function __construct()
    {
        parent::__construct();
    }


    public function getByUf($uf) 
    {
        $this->db->select('parceiros.fan_page, 
                           parceiros.logo, 
                           app_pagseguro.titulo,
                           parceiros.cidade,
                           parceiros.id_parceiro
                           ')
                 ->join('app_pagseguro', 'parceiros.id_parceiro = app_pagseguro.id_parceiro','left')
                 ->where('parceiros.uf',$uf)
                 ->where('app_pagseguro.premium', 1)
                 ->order_by('parceiros.id_parceiro', 'ramdom')
                 ->order_by('titulo');
        $query = $this->db->get('parceiros');
        return $query;
	}

    public function groupedByUf() 
    {
        $this->db->select('apps_mapsEstados.uf, apps_mapsEstados.cordenada')
                 ->select('count(*) total', false)
                 ->join('apps_mapsEstados','apps_mapsEstados.uf=parceiros.uf')
                 ->join('app_pagseguro', 'app_pagseguro.id_parceiro=parceiros.id_parceiro')
                 ->group_by('parceiros.uf');

        $lojas_result = $this->get_all()->result();
        $lojas = array();
        foreach ($lojas_result as $item) {
            $cordenadas = explode(',', $item->cordenada);
            $item->lat = $cordenadas[0];
            $item->long = $cordenadas[1];
        }
        return $lojas_result;
    }

    public function getInfo($id_parceiro) 
    {
        $this->db->select('parceiros.fan_page, 
                           parceiros.logo, 
                           parceiros.uf, 
                           parceiros.cidade,
                           parceiros.telefone,
                           app_pagseguro.titulo,
                           app_pagseguro.email,
                           app_pagseguro.endereco
                           ')
                 ->join('app_pagseguro', 'parceiros.id_parceiro = app_pagseguro.id_parceiro','left')
                 ->where('parceiros.id_parceiro', $id_parceiro);
        return $this->get_all()->row();
    }

}
