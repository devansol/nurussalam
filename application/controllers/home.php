<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->helper('url');
	}
	public function index() {
		$this->load->view('header');
		$this->load->view('page/intro');
		$this->load->view('page/about');
		$this->load->view('page/program');
		$this->load->view('page/darulaitam');
		$this->load->view('page/slider-content');
		$this->load->view('page/contact');
		$this->load->view('footer');
	}
}
