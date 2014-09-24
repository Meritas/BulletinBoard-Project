<?php

class Home Extends CI_Controller{

	function index(){
		$this->load->view('first');
	}

	function about(){
		echo 'About page';
	}

}

?>