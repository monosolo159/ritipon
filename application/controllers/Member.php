<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION)) {
			session_start();
		}
	}

	public function login()
	{
		$data = $this->input->post();
		$User = $this->Membermodel->login($data);
		if (empty($User))
		{
			redirect($this->agent->referrer(), 'refresh');
		} else {
			$_SESSION['MEMBER_ID'] = $User[0]['member_id'];
			$_SESSION['MEMBER_FNAME'] = $User[0]['member_fname'];
			$_SESSION['MEMBER_LNAME'] = $User[0]['member_lname'];
			redirect('Home');
		}
	}

	public function logout() {
		unset($_SESSION["MEMBER_ID"]);
		unset($_SESSION["MEMBER_FNAME"]);
		unset($_SESSION["MEMBER_LNAME"]);
		redirect('Home');
	}

	public function memberAdd(){
		$input = $this->input->post();
		$input['member_regdate'] = date("Y-m-d H:i:s");
		$this->Membermodel->memberAdd($input);
		redirect('Admin/memberList');
	}
	public function memberAddFront(){
		$input = $this->input->post();
		$input['member_regdate'] = date("Y-m-d H:i:s");
		$this->Membermodel->memberAdd($input);
		redirect('Home');
	}
	public function memberDel(){
		$id = $this->uri->segment(3);
		$this->Membermodel->memberDel($id);
		redirect('Admin/memberList');
	}
	public function memberEdit(){
		$input = $this->input->post();
		$this->Membermodel->memberEdit($input);
		redirect('Admin/memberList');
	}
	public function memberEditFront(){
		$input = $this->input->post();
		$this->Membermodel->memberEdit($input);
		redirect('Home/profile');
	}





}
