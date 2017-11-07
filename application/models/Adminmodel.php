<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model
{


  public function login($data)
  {
    $query = $this->db
    ->where('admin_username', $data['admin_username'])
    ->where('admin_password', $data['admin_password'])
    ->get('admin')
    ->result_array();
    return $query;
  }

  public function addAdmin($input){
    $this->db->insert('admin',$input);
	}

	public function editAdmin($input){
    $this->db->where('admin_id',$input['admin_id'])->update('admin',$input);
	}

	public function delAdmin($id){
    $this->db->where('admin_id',$id)->delete('admin');
	}

	public function listAdmin(){
    return $this->db
    ->join('admin_type','admin.admin_type_id = admin_type.admin_type_id')
    ->get('admin')
    ->result_array();
	}

  public function listAdminOne($id){
    return $this->db->where('admin_id',$id)->get('admin')->result_array();
	}

  public function adminType(){
    return $this->db->get('admin_type')->result_array();
  }

  public function setting(){
    return $this->db->where('setting_id',1)->get('setting')->result_array();
  }
  public function updateSetting($input){
    $this->db
    ->where('setting_id',1)
    ->update('setting',$input);
  }
}
