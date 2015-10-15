<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_holamundo extends CI_Controller {
public function muestra_vista()
{
$this->load->view('vista_holamundo');
}
}