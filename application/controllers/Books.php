<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if(!isset($_SESSION)) {
			session_start();
		}
	}


	public function bookAddFront(){
		$input = $this->input->post();
		$input['book_date'] = date("Y-m-d H:i:s");
		$this->Bookmodel->bookAdd($input);
		redirect('Home/myBook');
	}
	public function bookDelFront(){
		$id = $this->uri->segment(3);
		$this->Bookmodel->bookDel($id);
		redirect('Home/myBook');
	}
	public function bookEditFront(){
		$input = $this->input->post();
		$this->Bookmodel->bookEdit($input);
		redirect('Home/myBook');
	}

	public function bookAdd(){
		$input = $this->input->post();
		$input['book_date'] = date("Y-m-d H:i:s");
		$this->Bookmodel->bookAdd($input);
		redirect('Admin/bookList');
	}
	public function bookDel(){
		$id = $this->uri->segment(3);
		$this->Bookmodel->bookDel($id);
		redirect('Admin/bookList');
	}
	public function bookEdit(){
		$input = $this->input->post();
		$this->Bookmodel->bookEdit($input);
		redirect('Admin/bookList');
	}
	public function bookLike(){
		$input = $this->input->post();
		$this->Bookmodel->bookLike($input);
		redirect('Home/bookDetail/'.$input['book_id']);
	}
	public function readLater(){
		$input = $this->input->post();
		$this->Bookmodel->readLater($input);
		redirect('Home/bookDetail/'.$input['book_id']);
	}


	// public function authorAdd(){
	// 	$input = $this->input->post();
	// 	$this->Bookmodel->authorAdd($input);
	// 	redirect('Admin/authorList');
	// }
	// public function authorDel(){
	// 	$id = $this->uri->segment(3);
	// 	$this->Bookmodel->authorDel($id);
	// 	redirect('Admin/authorList');
	// }
	// public function authorEdit(){
	// 	$input = $this->input->post();
	// 	$this->Bookmodel->authorEdit($input);
	// 	redirect('Admin/authorList');
	// }

	public function categoryAdd(){
		$input = $this->input->post();
		$this->Bookmodel->categoryAdd($input);
		redirect('Admin/categoryList');
	}
	public function categoryDel(){
		$id = $this->uri->segment(3);
		$this->Bookmodel->categoryDel($id);
		redirect('Admin/categoryList');
	}
	public function categoryEdit(){
		$input = $this->input->post();
		$this->Bookmodel->categoryEdit($input);
		redirect('Admin/categoryList');
	}



	public function shelfAdd(){
		$input = $this->input->post();
		$this->Bookmodel->shelfAdd($input);
		redirect('Admin/shelfList');
	}
	public function shelfDel(){
		$id = $this->uri->segment(3);
		$this->Bookmodel->shelfDel($id);
		redirect('Admin/shelfList');
	}
	public function shelfEdit(){
		$input = $this->input->post();
		$this->Bookmodel->shelfEdit($input);
		redirect('Admin/shelfList');
	}


	// public function publisherAdd(){
	// 	$input = $this->input->post();
	// 	$this->Bookmodel->publisherAdd($input);
	// 	redirect('Admin/publisherList');
	// }
	// public function publisherDel(){
	// 	$id = $this->uri->segment(3);
	// 	$this->Bookmodel->publisherDel($id);
	// 	redirect('Admin/publisherList');
	// }
	// public function publisherEdit(){
	// 	$input = $this->input->post();
	// 	$this->Bookmodel->publisherEdit($input);
	// 	redirect('Admin/publisherList');
	// }




	public function pageAdd(){
		$input = $this->input->post();
		$this->Bookmodel->pageAdd($input);
		redirect('Admin/pageList/'.$input['book_id']);
	}
	public function pageDel(){
		$idpage = $this->uri->segment(4);
		$idbook = $this->uri->segment(3);
		$this->Bookmodel->pageDel($idpage);
		redirect('Admin/pageList/'.$idbook);
	}
	public function pageEdit(){
		$input = $this->input->post();
		$this->Bookmodel->pageEdit($input);
		redirect('Admin/pageList/'.$input['book_id']);
	}


	public function pageAddFront(){
		$input = $this->input->post();
		$this->Bookmodel->pageAdd($input);
		redirect('Home/pageList/'.$input['book_id']);
	}
	public function pageDelFront(){
		$idpage = $this->uri->segment(4);
		$idbook = $this->uri->segment(3);
		$this->Bookmodel->pageDel($idpage);
		redirect('Home/pageList/'.$idbook);
	}
	public function pageEditFront(){
		$input = $this->input->post();
		$this->Bookmodel->pageEdit($input);
		redirect('Home/pageList/'.$input['book_id']);
	}




}
