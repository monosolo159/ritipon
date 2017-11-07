<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membermodel extends CI_Model
{
  public function login($data)
  {
    $query = $this->db
    ->where('member_username', $data['member_username'])
    ->where('member_password', $data['member_password'])
    ->get('member')
    ->result_array();
    return $query;
  }

  public function memberList(){
    return $this->db
    ->get('member')
    ->result_array();
	}
  public function memberAdd($input){
      $this->db->insert('member',$input);
  }
  public function memberDel($id){
    $this->db->where('member_id',$id)->delete('member');
  }
  public function memberOne($id){
    return $this->db->where('member_id',$id)->get('member')->result_array();
  }
  public function memberEdit($input){
    $this->db->where('member_id',$input['member_id'])->update('member',$input);
  }
  public function profile(){
    return $this->db
    ->where('member_id',$_SESSION['MEMBER_ID'])
    ->get('member')
    ->result_array();
  }
}
