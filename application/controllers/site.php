<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

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
		$this->load->view('home_view');
	}
	
	public function overview()
	{
		$this->load->view('overview_view');
	}
	
	public function rules()
	{
		$this->load->view('rules_view');
	}
	
	public function faq()
	{
		$this->load->view('faq_view');
	}
	
	public function contact()
	{
		$this->load->view('contact_view');
	}
	
	public function presurvey()
	{
		$this->load->view('presurvey_view');
	}
	public function about()
	{
		$this->load->view('overview_view');
	}
	public function report()
	{
		$this->load->view('report_view');
	}
	public function dates()
	{
		$this->load->view('dates_view');
	}
	public function registration()
	{
		$this->load->view('registration_view');
	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */