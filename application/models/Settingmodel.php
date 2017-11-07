<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settingmodel extends CI_Model
{
  public function getSetting(){
    return $this->db
    ->where('setting_id',1)
    ->get('setting')
    ->result_array();
	}
  public function setSetting($input){
    $this->db->where('setting_id',1)->update('setting',$input);
  }
}
