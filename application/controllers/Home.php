<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function LoadPage($value){
		if(isset($value['Result'])){
			$data = $value['Result'];
			$this->load->view('front/template/header', $data);
		}else{
			$this->load->view('front/template/header');
		}
		$this->load->view('front/template/sidebar');
    $this->load->view($value['View']);
    $this->load->view('front/template/footer');
  }

	public function index(){
		$setting = $this->Settingmodel->getSetting();
		$value = array(
			'Result' => array(
				'setting' => $setting
			),
			'View' => 'front/home'
		);
		$this->LoadPage($value);
	}

	public function contact(){
		$setting = $this->Settingmodel->getSetting();
		$value = array(
			'Result' => array(
				'setting' => $setting
			),
			'View' => 'front/contact'
		);
		$this->LoadPage($value);
	}

	public function booksList(){
		$searchword = $this->input->post('search');

		if(empty($searchword)){
			$searchword = '';
		}
		$bookList = $this->Bookmodel->bookList($searchword);
		$value = array(
			'Result' => array(
				'bookList' => $bookList
			),
			'View' => 'front/book_list'
		);
		$this->LoadPage($value);
	}

	public function bookMember(){
		$id = $this->uri->segment(3);
		$bookMember = $this->Bookmodel->bookMember($id);
		$value = array(
			'Result' => array(
				'bookMember' => $bookMember
			),
			'View' => 'front/book_member'
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
			'View' => 'front/book_insert'
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
			'View' => 'front/book_edit'
		);
		$this->LoadPage($value);
	}



	public function bookDetail(){
		$id = $this->uri->segment(3);
		$bookOne = $this->Bookmodel->bookOne($id);

		$input['book_id'] = $id;
		$input['member_id'] = 0;
		if(isset($_SESSION['MEMBER_ID'])){
			$input['member_id'] = $_SESSION['MEMBER_ID'];
		}else{
			$input['member_id'] = 0;
		}
		$this->Bookmodel->bookRead($input);

		$value = array(
			'Result' => array(
				'bookOne' => $bookOne
			),
			'View' => 'front/book_detail'
		);
		$this->LoadPage($value);
	}

	public function pageList(){
		$id = $this->uri->segment(3);
		$pageList = $this->Bookmodel->pageList($id);
		$value = array(
			'Result' => array(
				'pageList' => $pageList
			),
			'View' => 'front/page_list'
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
			'View' => 'front/page_view'
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
			'View' => 'front/page_edit'
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
			'View' => 'front/page_insert'
		);
		$this->LoadPage($value);
	}

	public function pageDetail(){
		$id = $this->uri->segment(3);
		if (isset($_SESSION['MEMBER_ID'])) {
			$member_id = $_SESSION['MEMBER_ID'];
		} else {
			$member_id = 0;
		}


		$checkReadBook = $this->Bookmodel->readLaterCheck($member_id,$id);
		if (count($checkReadBook)<1) {
			$input['book_id'] = $id;
			$input['member_id'] = $member_id;
			$input['book_read_later_status'] = 0;
			$this->Bookmodel->readLaterInsert($input);
		}
		$config = array();
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$config['num_links'] = 5;
		$config["base_url"] = site_url() . "/Home/pageDetail/".$id;
		$config["total_rows"] = $this->Bookmodel->record_count($id);
		$config["per_page"] = 1;
		$config["uri_segment"] = 4;

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$pageList = $this->Bookmodel->fetch_page($config["per_page"], $page,$id);

		$member_id = 0;
		if (isset($_SESSION['MEMBER_ID'])) {
			$member_id = $_SESSION['MEMBER_ID'];
		}

		$fav = $this->Bookmodel->readLaterCheck($member_id,$id);

		$links = $this->pagination->create_links();

    $value = array(
      'Result' => array(
				'fav' => $fav,
        'pageList' => $pageList,
				'links' => $links
      ),
      'View' => 'front/page_detail'
    );
    $this->LoadPage($value);
	}

	public function profile(){
		$profile = $this->Membermodel->profile();
		$value = array(
			'Result' => array(
				'profile' => $profile
			),
			'View' => 'front/profile'
		);
		$this->LoadPage($value);
	}

	public function myBook(){
		$searchword = $this->input->post('search');

		if(empty($searchword)){
			$searchword = '';
		}
		$bookList = $this->Bookmodel->bookMy($_SESSION['MEMBER_ID'],$searchword);
		$value = array(
			'Result' => array(
				'bookList' => $bookList
			),
			'View' => 'front/my_book'
		);
		$this->LoadPage($value);
	}

	public function bookComment(){
		$id = $this->uri->segment(3);
		$comment = $this->Bookmodel->bookComment($id);
		$value = array(
			'Result' => array(
				'comment' => $comment
			),
			'View' => 'front/book_comment'
		);
		$this->LoadPage($value);
	}

	public function register(){
		$value = array(
			'Result' => array(
			),
			'View' => 'front/member_insert'
		);
		$this->LoadPage($value);
	}
	public function memberList(){
		$memberList = $this->Membermodel->memberList();
		$value = array(
			'Result' => array(
				'memberList' => $memberList
			),
			'View' => 'front/member_list'
		);
		$this->LoadPage($value);
	}


public function myBookComingRead(){
	$bookList = $this->Bookmodel->myBookComingRead($_SESSION['MEMBER_ID']);
	// print_r($bookList);
	$value = array(
		'Result' => array(
			'bookList' => $bookList
		),
		'View' => 'front/my_book_coming_read'
	);
	$this->LoadPage($value);
}
}
