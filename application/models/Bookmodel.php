<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookmodel extends CI_Model
{
  public function BookList($searchword){
    return $this->db
    ->select('*,(select count(book_page_id) from book_page where book.book_id = book_page.book_id) as book_all_page,(select count(book_read_id) from book_read where book_read.book_id = book.book_id) as book_all_read,(select sum(book_like_score) from book_like where book_like.book_id = book.book_id)/(select count(book_like_id) from book_like where book_like.book_id = book.book_id) as book_score')
    ->like('book_name',$searchword)
    ->or_like('book_code',$searchword)
    ->or_like('book_detail',$searchword)
    ->or_like('book_author',$searchword)
    ->or_like('category_name',$searchword)
    ->or_like('book_publisher',$searchword)
    ->or_like('shelf_name',$searchword)
    ->or_like('member_fname',$searchword)
    ->or_like('member_lname',$searchword)
    ->join('member','member.member_id = book.member_id','left')
    ->join('category','category.category_id = book.category_id','left')
    ->join('shelf','shelf.shelf_id = book.shelf_id','left')
    ->get('book')
    ->result_array();
  }
  public function bookAdd($input){
      $this->db->insert('book',$input);
  }
  public function bookDel($id){
    $this->db->where('book_id',$id)->delete('book');
  }
  public function bookOne($id){
    return $this->db
    ->select('*,(select count(book_page_id) from book_page where book.book_id = book_page.book_id) as book_all_page,(select count(book_read_id) from book_read where book_read.book_id = book.book_id) as book_all_read,(select sum(book_like_score) from book_like where book_like.book_id = book.book_id)/(select count(book_like_id) from book_like where book_like.book_id = book.book_id) as book_score')
    ->where('book_id',$id)
    ->join('member','member.member_id = book.member_id','left')
    // ->join('author','author.author_id = book.author_id','left')
    ->join('category','category.category_id = book.category_id','left')
    // ->join('publisher','publisher.publisher_id = book.publisher_id','left')
    ->join('shelf','shelf.shelf_id = book.shelf_id','left')
    ->get('book')
    ->result_array();
  }



  public function bookMember($id){
    return $this->db
    ->select('*,(select count(book_page_id) from book_page where book.book_id = book_page.book_id) as book_all_page,(select count(book_read_id) from book_read where book_read.book_id = book.book_id) as book_all_read,(select sum(book_like_score) from book_like where book_like.book_id = book.book_id)/(select count(book_like_id) from book_like where book_like.book_id = book.book_id) as book_score')
    ->where('book.member_id',$id)
    ->join('member','member.member_id = book.member_id','left')
    ->join('category','category.category_id = book.category_id','left')
    ->join('shelf','shelf.shelf_id = book.shelf_id','left')
    ->get('book')
    ->result_array();
  }



public function myBookComingRead($id){
  return $this->db
  ->select('*,(select count(book_page_id) from book_page where book.book_id = book_page.book_id) as book_all_page,(select count(book_read_id) from book_read where book_read.book_id = book.book_id) as book_all_read,(select sum(book_like_score) from book_like where book_like.book_id = book.book_id)/(select count(book_like_id) from book_like where book_like.book_id = book.book_id) as book_score')
  ->where('book_read_later.member_id',$id)
  ->where('book_read_later.book_read_later_status',1)
  ->join('member','member.member_id = book.member_id','left')
  ->join('book_read_later','book_read_later.book_id = book.book_id','left')
  ->join('category','category.category_id = book.category_id','left')
  ->join('shelf','shelf.shelf_id = book.shelf_id','left')
  ->get('book')
  ->result_array();
}
  public function bookMy($id,$searchword){
    return $this->db
    ->select('*,(select count(book_page_id) from book_page where book.book_id = book_page.book_id) as book_all_page,(select count(book_read_id) from book_read where book_read.book_id = book.book_id) as book_all_read,(select sum(book_like_score) from book_like where book_like.book_id = book.book_id)/(select count(book_like_id) from book_like where book_like.book_id = book.book_id) as book_score')
    ->where('book.member_id',$id)
    ->group_start()
    ->like('book_name',$searchword)
    ->or_like('book_detail',$searchword)
    ->or_like('book_author',$searchword)
    ->or_like('category_name',$searchword)
    ->or_like('book_publisher',$searchword)
    ->or_like('shelf_name',$searchword)
    ->or_like('member_fname',$searchword)
    ->or_like('member_lname',$searchword)
    ->group_end()
    ->join('member','member.member_id = book.member_id','left')
    // ->join('author','author.author_id = book.author_id','left')
    ->join('category','category.category_id = book.category_id','left')
    // ->join('publisher','publisher.publisher_id = book.publisher_id','left')
    ->join('shelf','shelf.shelf_id = book.shelf_id','left')
    ->get('book')
    ->result_array();
  }
  public function bookEdit($input){
    $this->db->where('book_id',$input['book_id'])->update('book',$input);
  }
  public function bookLike($input){
    $this->db->insert('book_like',$input);
  }
  public function readLater($input){
    // $this->db->insert('book_read_later',$input);
    $this->db->where('book_read_later_id',$input['book_read_later_id'])->update('book_read_later',$input);

  }
  public function bookComment($id){
    return $this->db
    ->where('book_id',$id)
    ->join('member','member.member_id = book_like.member_id')
    ->get('book_like')
    ->result_array();
  }



  public function categoryList(){
    return $this->db
    ->get('category')
    ->result_array();
	}
  public function categoryAdd($input){
      $this->db->insert('category',$input);
  }
  public function categoryDel($id){
    $this->db->where('category_id',$id)->delete('category');
  }
  public function categoryOne($id){
    return $this->db->where('category_id',$id)->get('category')->result_array();
  }
  public function categoryEdit($input){
    $this->db->where('category_id',$input['category_id'])->update('category',$input);
  }



	public function shelfList(){
    return $this->db
    ->get('shelf')
    ->result_array();
	}
  public function shelfAdd($input){
      $this->db->insert('shelf',$input);
  }
  public function shelfDel($id){
    $this->db->where('shelf_id',$id)->delete('shelf');
  }
  public function shelfOne($id){
    return $this->db->where('shelf_id',$id)->get('shelf')->result_array();
  }
  public function shelfEdit($input){
    $this->db->where('shelf_id',$input['shelf_id'])->update('shelf',$input);
  }



	// public function publisherList(){
  //   return $this->db
  //   ->get('publisher')
  //   ->result_array();
	// }
  // public function publisherAdd($input){
  //   $this->db->insert('publisher',$input);
	// }
  // public function publisherDel($id){
  //   $this->db->where('publisher_id',$id)->delete('publisher');
  // }
  // public function publisherOne($id){
  //   return $this->db->where('publisher_id',$id)->get('publisher')->result_array();
  // }
  // public function publisherEdit($input){
  //   $this->db->where('publisher_id',$input['publisher_id'])->update('publisher',$input);
  // }





	// public function authorList(){
  //   return $this->db
  //   ->get('author')
  //   ->result_array();
	// }
  // public function authorAdd($input){
  //   $this->db->insert('author',$input);
	// }
  // public function authorDel($id){
  //   $this->db->where('author_id',$id)->delete('author');
  // }
  // public function authorOne($id){
  //   return $this->db->where('author_id',$id)->get('author')->result_array();
  // }
  // public function authorEdit($input){
  //   $this->db->where('author_id',$input['author_id'])->update('author',$input);
  // }



  public function record_count($id) {
          // return $this->db->where('book_id',$id)->count_all("book_page");
          $query = $this->db->where('book_id', $id)->get('book_page');
          return $query->num_rows();
  }
  public function fetch_page($limit, $start,$id) {
      $this->db->limit($limit, $start);
      $this->db->where('book_id',$id);
      $this->db->order_by('book_page_order','asc');
      $this->db->select('*');
      $this->db->from('book_page');
      $query = $this->db->get();

      if ($query->num_rows() > 0) {
        foreach ($query->result_array() as $row) {
          $data[] = $row;
        }
        return $data;
      }
      return false;
  }

  public function pageList($id){
    return $this->db
    ->where('book_id',$id)
    ->order_by('book_page_order','asc')
    ->get('book_page')
    ->result_array();
  }
  public function pageAdd($input){
    $this->db->insert('book_page',$input);
  }
  public function pageDel($id){
    $this->db->where('book_page_id',$id)->delete('book_page');
  }
  public function pageOne($id){
    return $this->db->where('book_page_id',$id)->get('book_page')->result_array();
  }
  public function pageEdit($input){
    $this->db->where('book_page_id',$input['book_page_id'])->update('book_page',$input);
  }
  public function bookRead($input){
    $this->db->insert('book_read',$input);
  }
  public function readLaterCheck($member_id,$id){
    return $this->db
    ->where('member_id',$member_id)
    ->where('book_id',$id)
    ->get('book_read_later')
    ->result_array();
  }





  public function reportNewBook($input){
    if(count($input)==0){
      $input['date_start'] = null;
      $input['date_end'] = null;
    }
    $this->db->distinct();
    $this->db->select('*,(select count(book_page_id) from book_page where book.book_id = book_page.book_id) as book_all_page,(select count(book_read_id) from book_read where book_read.book_id = book.book_id) as book_all_read,(select sum(book_like_score) from book_like where book_like.book_id = book.book_id)/(select count(book_like_id) from book_like where book_like.book_id = book.book_id) as book_score');
    $this->db->where('book_date  >=', $input['date_start'].' 00:00:00');
    $this->db->where('book_date  <=', $input['date_end'].' 23:59:59');
    $this->db->from('book');
    $this->db->join('member','member.member_id = book.member_id','left');
    $this->db->join('category','category.category_id = book.category_id','left');
    $this->db->join('shelf','shelf.shelf_id = book.shelf_id','left');
    $this->db->order_by('book_date','desc');

    $query = $this->db->get()->result_array();
    return $query;
  }

  public function reportSumRead($input){
    if(count($input)==0){
      $input['date_start'] = null;
      $input['date_end'] = null;
    }
    $this->db->distinct();
    $this->db->select('*,(select count(book_page_id) from book_page where book.book_id = book_page.book_id) as book_all_page,(select count(book_read_id) from book_read where book_read.book_id = book.book_id) as book_all_read,(select sum(book_like_score) from book_like where book_like.book_id = book.book_id)/(select count(book_like_id) from book_like where book_like.book_id = book.book_id) as book_score');
    $this->db->where('book_date  >=', $input['date_start'].' 00:00:00');
    $this->db->where('book_date  <=', $input['date_end'].' 23:59:59');
    $this->db->from('book');
    $this->db->join('member','member.member_id = book.member_id','left');
    $this->db->join('category','category.category_id = book.category_id','left');
    $this->db->join('shelf','shelf.shelf_id = book.shelf_id','left');
    $this->db->order_by('book_all_read','desc');
    $query = $this->db->get()->result_array();
    return $query;
  }
  public function reportMemberBook($input){
    if(count($input)==0){
      $input['date_start'] = null;
      $input['date_end'] = null;
    }
    $this->db->distinct();
    $this->db->select('member.member_id,member_fname,member_lname,member_address,member_regdate,member_tel,member_username,(select count(book_id) from book where book.member_id = member.member_id) as book_all');
    $this->db->where('book_date  >=', $input['date_start'].' 00:00:00');
    $this->db->where('book_date  <=', $input['date_end'].' 23:59:59');
    $this->db->from('member');
    $this->db->join('book','member.member_id = book.member_id','left');
    $this->db->join('category','category.category_id = book.category_id','left');
    $this->db->join('shelf','shelf.shelf_id = book.shelf_id','left');
    $this->db->order_by('book_all','desc');
    $query = $this->db->get()->result_array();
    return $query;
  }

}
