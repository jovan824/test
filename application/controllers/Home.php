<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->model("Home_Model");
	}

	public function index()
	{
		$data["page"] = "home";
		
		$this->load->view("common/template",$data);
	}
}
