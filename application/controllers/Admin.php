<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION)) {
			session_start();
		}
	}

	public function LoadPage($value){
		if(isset($value['Result'])){
			$data = $value['Result'];
			$this->load->view('back/template/header', $data);
		}else{
			$this->load->view('back/template/header');
		}
		$this->load->view('back/template/sidebar');
    $this->load->view($value['View']);
    $this->load->view('back/template/footer');
  }


	public function index(){
		if(!isset($_SESSION["ADMIN_ID"])){
			$this->load->view('back/login');
		}else{
			redirect('Admin/bookList');
		}
	}

	public function loginform(){
		$this->load->view('back/login');
	}

	public function login()
	{
		$data = $this->input->post();
		$User = $this->Adminmodel->login($data);
		if (empty($User))
		{
			redirect($this->agent->referrer(), 'refresh');
		} else {
			$_SESSION['ADMIN_ID'] = $User[0]['admin_id'];
			$_SESSION['ADMIN_FNAME'] = $User[0]['admin_fname'];
			$_SESSION['ADMIN_LNAME'] = $User[0]['admin_lname'];

			redirect('Admin');
		}
	}

	public function logout() {
		// session_destroy();
		unset($_SESSION["ADMIN_ID"]);
		unset($_SESSION["ADMIN_FNAME"]);
		unset($_SESSION["ADMIN_LNAME"]);

		redirect('Admin');
	}


	public function ckupload(){
		$image = 'assets/img/upload/'.time()."_".$_FILES['upload']['name']; // กำหนดชื่อไฟล์
		$url_img = base_url();
		if (($_FILES['upload'] == "none") OR (empty($_FILES['upload']['name']))){ // ตรวจสอบว่ามีข้อมูลถูกส่งมาหรือป่าว
		    $error = "No file uploaded.";
		}else{
		    if(!move_uploaded_file($_FILES['upload']['tmp_name'], $image)){
			   $error = "Granted Read/Write/Modify permissions.";  // ตรวจสอบว่าโฟลเด้อที่จะบันทึกรูปสามารถเขียนได้หรือป่าว
		    }
		}
		$callBack = $_GET['CKEditorFuncNum'] ; // ใช้งาน javascript callback function
		echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($callBack, '$url_img$image', '$error');</script>";
	}




	public function bookList(){
		$bookList = $this->Bookmodel->bookList('');
		$value = array(
			'Result' => array(
				'bookList' => $bookList
			),
			'View' => 'back/book_list'
		);
		$this->LoadPage($value);
	}
	public function bookAddForm(){
		$memberList = $this->Membermodel->memberList();
		// $authorList = $this->Bookmodel->authorList();
		$categoryList = $this->Bookmodel->categoryList();
		$shelfList = $this->Bookmodel->shelfList();
		// $publisherList = $this->Bookmodel->publisherList();

		$value = array(
			'Result' => array(
				'memberList' => $memberList,
				// 'authorList' => $authorList,
				'categoryList' => $categoryList,
				'shelfList' => $shelfList,
				// 'publisherList' => $publisherList,
			),
			'View' => 'back/book_insert'
		);
		$this->LoadPage($value);
	}
	public function bookEditForm(){
		$id = $this->uri->segment(3);
		$bookOne = $this->Bookmodel->bookOne($id);
		$memberList = $this->Membermodel->memberList();
		// $authorList = $this->Bookmodel->authorList();
		$categoryList = $this->Bookmodel->categoryList();
		$shelfList = $this->Bookmodel->shelfList();
		// $publisherList = $this->Bookmodel->publisherList();
		$value = array(
			'Result' => array(
				'memberList' => $memberList,
				// 'authorList' => $authorList,
				'categoryList' => $categoryList,
				'shelfList' => $shelfList,
				// 'publisherList' => $publisherList,
				'bookOne' => $bookOne,
			),
			'View' => 'back/book_edit'
		);
		$this->LoadPage($value);
	}
	public function bookView(){
		$id = $this->uri->segment(3);
		$bookOne = $this->Bookmodel->bookOne($id);

		$memberList = $this->Membermodel->memberList();
		// $authorList = $this->Bookmodel->authorList();
		$categoryList = $this->Bookmodel->categoryList();
		$shelfList = $this->Bookmodel->shelfList();
		// $publisherList = $this->Bookmodel->publisherList();

		$value = array(
			'Result' => array(
				'memberList' => $memberList,
				// 'authorList' => $authorList,
				'categoryList' => $categoryList,
				'shelfList' => $shelfList,
				// 'publisherList' => $publisherList,
				'bookOne' => $bookOne,
			),
			'View' => 'back/book_view'
		);
		$this->LoadPage($value);
	}





	public function categoryList(){
		$categoryList = $this->Bookmodel->categoryList();
		$value = array(
			'Result' => array(
				'categoryList' => $categoryList
			),
			'View' => 'back/category_list'
		);
		$this->LoadPage($value);
	}
	public function categoryAddForm(){
		$value = array(
			'Result' => array(
			),
			'View' => 'back/category_insert'
		);
		$this->LoadPage($value);
	}
	public function categoryEditForm(){
		$id = $this->uri->segment(3);
		$categoryOne = $this->Bookmodel->categoryOne($id);
		$value = array(
			'Result' => array(
				'categoryOne' => $categoryOne
			),
			'View' => 'back/category_edit'
		);
		$this->LoadPage($value);
	}




	public function shelfList(){
		$shelfList = $this->Bookmodel->shelfList();
		$value = array(
			'Result' => array(
				'shelfList' => $shelfList
			),
			'View' => 'back/shelf_list'
		);
		$this->LoadPage($value);
	}
	public function shelfAddForm(){
		$value = array(
			'Result' => array(
			),
			'View' => 'back/shelf_insert'
		);
		$this->LoadPage($value);
	}
	public function shelfEditForm(){
		$id = $this->uri->segment(3);
		$shelfOne = $this->Bookmodel->shelfOne($id);
		$value = array(
			'Result' => array(
				'shelfOne' => $shelfOne
			),
			'View' => 'back/shelf_edit'
		);
		$this->LoadPage($value);
	}



	public function publisherList(){
		$publisherList = $this->Bookmodel->publisherList();
		$value = array(
			'Result' => array(
				'publisherList' => $publisherList
			),
			'View' => 'back/publisher_list'
		);
		$this->LoadPage($value);
	}
	public function publisherAddForm(){
		$value = array(
			'Result' => array(
			),
			'View' => 'back/publisher_insert'
		);
		$this->LoadPage($value);
	}
	public function publisherEditForm(){
		$id = $this->uri->segment(3);
		$publisherOne = $this->Bookmodel->publisherOne($id);
		$value = array(
			'Result' => array(
				'publisherOne' => $publisherOne
			),
			'View' => 'back/publisher_edit'
		);
		$this->LoadPage($value);
	}





	public function authorList(){
		$authorList = $this->Bookmodel->authorList();
		$value = array(
			'Result' => array(
				'authorList' => $authorList
			),
			'View' => 'back/author_list'
		);
		$this->LoadPage($value);
	}
	public function authorAddForm(){
		$value = array(
			'Result' => array(
			),
			'View' => 'back/author_insert'
		);
		$this->LoadPage($value);
	}
	public function authorEditForm(){
		$id = $this->uri->segment(3);
		$authorOne = $this->Bookmodel->authorOne($id);
		$value = array(
			'Result' => array(
				'authorOne' => $authorOne
			),
			'View' => 'back/author_edit'
		);
		$this->LoadPage($value);
	}





	public function memberList(){
		$memberList = $this->Membermodel->memberList();
		$value = array(
			'Result' => array(
				'memberList' => $memberList
			),
			'View' => 'back/member_list'
		);
		$this->LoadPage($value);
	}
	public function memberAddForm(){
		$value = array(
			'Result' => array(
			),
			'View' => 'back/member_insert'
		);
		$this->LoadPage($value);
	}
	public function memberEditForm(){
		$id = $this->uri->segment(3);
		$memberOne = $this->Membermodel->memberOne($id);
		$value = array(
			'Result' => array(
				'memberOne' => $memberOne
			),
			'View' => 'back/member_edit'
		);
		$this->LoadPage($value);
	}
	public function memberPassEditForm(){
		$id = $this->uri->segment(3);
		$memberOne = $this->Membermodel->memberOne($id);
		$value = array(
			'Result' => array(
				'memberOne' => $memberOne
			),
			'View' => 'back/member_edit_pass'
		);
		$this->LoadPage($value);
	}


	public function settingForm(){
		$setting = $this->Adminmodel->setting();
		$value = array(
			'Result' => array(
				'setting' => $setting
			),
			'View' => 'back/setting'
		);
		$this->LoadPage($value);
	}
	public function updateSetting(){
		$input = $this->input->post();
		$this->Adminmodel->updateSetting($input);
		redirect('Admin/settingForm/success');
	}




	public function pageList(){
		$id = $this->uri->segment(3);
		$pageList = $this->Bookmodel->pageList($id);
		$value = array(
			'Result' => array(
				'pageList' => $pageList
			),
			'View' => 'back/page_list'
		);
		$this->LoadPage($value);
	}
	public function pageAddForm(){
		$id = $this->uri->segment(3);
		$pageList = $this->Bookmodel->pageList($id);
		$value = array(
			'Result' => array(
				'pageList' => $pageList
			),
			'View' => 'back/page_insert'
		);
		$this->LoadPage($value);
	}
	public function pageEditForm(){
		$id = $this->uri->segment(3);
		$pageOne = $this->Bookmodel->pageOne($id);
		$value = array(
			'Result' => array(
				'pageOne' => $pageOne
			),
			'View' => 'back/page_edit'
		);
		$this->LoadPage($value);
	}
	public function pageView(){
		$id = $this->uri->segment(3);
		$pageOne = $this->Bookmodel->pageOne($id);
		$value = array(
			'Result' => array(
				'pageOne' => $pageOne
			),
			'View' => 'back/page_view'
		);
		$this->LoadPage($value);
	}






	public function reportNewBook(){
		$input['date_start'] = "";
		$input['date_end'] = "";

		$input = $this->input->post();
		$bookList = $this->Bookmodel->reportNewBook($input);
		$value = array(
			'Result' => array(
				'input' => $input,
				'bookList' => $bookList
			),
			'View' => 'back/report_new_book'
		);
		$this->LoadPage($value);
	}
	public function reportSumRead(){
		$value = array(
			'Result' => array(
				// 'pageOne' => $pageOne
			),
			'View' => 'back/report_sum_read'
		);
		$this->LoadPage($value);
	}
	public function reportMemberBook(){
		$value = array(
			'Result' => array(
				// 'pageOne' => $pageOne
			),
			'View' => 'back/report_member_book'
		);
		$this->LoadPage($value);
	}


}
