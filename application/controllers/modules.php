<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modules extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('modules/modules_about_view');
	}
	
	public function MITM()
	{
		$this->load->view('modules/modules_MITM_view');
	}
	public function DNS()
	{
		$this->load->view('modules/modules_DNS_view');
	}
	public function ARP()
	{
		$this->load->view('modules/modules_ARP_view');
	}
	public function Buffer()
	{
		$this->load->view('modules/modules_Buffer_view');
	}
	public function PWSniff()
	{
		$this->load->view('modules/modules_PWSniff_view');
	}
	public function Port()
	{
		$this->load->view('modules/modules_Port_view');
	}
	public function MACSpoof()
	{
		$this->load->view('modules/modules_MAC_view');
	}
	public function Mysql()
	{
		$this->load->view('modules/modules_Mysql_view');
	}
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */