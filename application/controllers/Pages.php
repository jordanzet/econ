<?php
class Pages extends CI_Controller {

	public function index(){
		$this->load->view('econ/index');
	}

	function conferencias(){
		$this->load->view('econ/conferencias');
	}
		
	function feria(){
		$this->load->view('econ/feria');
	}
		
	function talleres(){
		$this->load->view('econ/talleres');
	}

	function encuentroemp(){
		$this->load->view('econ/encuentroemp');
	}
}