<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
    var $data = array(
        'titulo' => '',
        'menu' => '',
        'current_menu' => '',
    );
    public function __construct() 
    {
        parent::__construct();
    }
}
