<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function about()
	{
		//fungsi untuk me-loadd view about.php
		$this->load->view('about');
	}
	public function profile()
	{
		//fungsi untuk me-loadd view profile.php
		$this->load->view('profile');
	}
}
