<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Template_controller
 * copy this file in your directory /application/controllers
 */
class Template_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->add_package_path(FCPATH . 'vendor/philsturgeon/codeigniter-template/src');

		$this->load->config('template');

		$this->load->library('template');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/template_controller
	 *    - or -
	 *        http://example.com/index.php/template_controller/index
	 */
	public function index()
	{
		$this->template
			->set_layout('default')
			->build('welcome_message')
		;
	}

}
