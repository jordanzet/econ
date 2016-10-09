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

	function encuentrocient(){
		$this->load->view('econ/encuentrocient');
	}

	function cronograma(){
		$this->load->view('econ/cronograma');
	}
}