<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage extends CI_Controller {

	public function view($page = 'Manage MR')
	{

			$_SESSION['profile']="'MR'";
			$_SESSION['head_profile']="'TM'";
	        $data['title'] = ucfirst($page); // Capitalize the first letter
	        $this->load->helper('url');
	        $this->load->view('templates/header', $data);
	        $this->load->view('templates/navbar');
	        $this->load->view("manage");
	        $this->load->view('templates/footer');
	}
	public function index(){
		$this->view();
	}
}

