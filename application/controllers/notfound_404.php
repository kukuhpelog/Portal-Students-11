<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Notfound_404 extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('');
	}
	
	public function index() {
		$this->load->view('home/404_notfound');
	}
}
?>