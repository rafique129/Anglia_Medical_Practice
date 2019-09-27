<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
     public function getbanner()
    {
    return $this->db->select('*')->from('tbl_banner')->get()->result();
    }
     public function getDoctorDetails()
    {
         
      return $this->db->select('doctor_profile_details.*,doctor_specialty_data.doctor_specialty')->from('doctor_profile_details')->join('doctor_specialty_data','doctor_specialty_data.id=doctor_profile_details.speciality_id ','left')->where('doctor_profile_details.is_home',1)->order_by('doctor_profile_details.id','desc')->get()->result();
    }
    public function getServices()
    {
        return $this->db->select('*')->from('doctor_specialty_data')->get()->result();
    }
    public function getavabileDoctorTimeSec($post)
    {
        return $this->db->select('doctor_availity_data.*,doctor_profile_details.doctor_name,doctor_profile_details.speciality_id')
                ->from('doctor_availity_data')
                ->where('doctor_id',$post['doctor_id'])
                ->where('day',$post['day'])
                ->join('doctor_profile_details','doctor_profile_details.id=doctor_availity_data.doctor_id','left')
                ->get()->result();
    }
    public function insertbookingdata($post)
    {
        $this->db->insert('doctor_booking_data',$post);
        return $this->db->insert_id();
    }
    public function getMaxAvalityDate($day,$doctor_id)
    {
        $query="SELECT max(avail_time) as max_time,min(avail_time) as min_time from `doctor_availity_data` WHERE day='$day' and doctor_id='$doctor_id'";
        return $this->db->query($query)->row();
    }
    public function GetdoctorList($sid)
    {
        return $this->db->select('doctor_profile_details.doctor_name,doctor_profile_details.id')->from('doctor_profile_details')->where('speciality_id',$sid)->get()->result();
    }
    public function insertRequestAppointment($data)
    {
        
        $this->db->insert('doctor_booking_data',$data);
        return $this->db->insert_id();
    }
  public function getSpeclityDoctor($sid)
  {
     return $this->db->select('doctor_specialty_data.doctor_specialty')->from('doctor_specialty_data')->where('id',$sid)->get()->row(); 
  }
   public function get_last_recent_order_no() {
        $this->db->select('id');
        $this->db->from('doctor_booking_data');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $res = $this->db->get()->row();
        return (!empty($res)) ? $res : null;
    }
    public function GetlastIdrequest_newuser()
    {
      $row= $this->db->select('id')
              ->from('doctor_request_appointment')
              ->order_by('id','desc')
              ->limit(1)
              ->get()->row();
      return (!empty($row))?$row:null;
    }
    public function Getnamebaseonid($id_no)
    {
        return $this->db->select('doctor_new_user.first_name,doctor_new_user.last_name,doctor_new_user.id')->from('doctor_new_user')->where('uid',$id_no)->get()->row();
    }
    //insert record new user
    public function insert_new_user($data)
    {
        $this->db->insert('doctor_new_user',$data);
        return $this->db->insert_id();
    }
   //login data 
    public function authuser($data)
    {
     return $this->db->select('doctor_new_user.id,doctor_new_user.uid,doctor_new_user.email,doctor_new_user.contact_number')->from('doctor_new_user')->where($data)->get()->row();  
    }
    public function get_userdashboard_bookAppdata($uid)
    {
     return $this->db->select('doctor_booking_data.*,doctor_specialty_data.doctor_specialty,doctor_profile_details.doctor_name')
             ->from('doctor_booking_data')
             ->where('user_id',$uid)
             ->join('doctor_specialty_data','doctor_specialty_data.id=doctor_booking_data.department_id','left')
               ->join('doctor_profile_details','doctor_profile_details.id=doctor_booking_data.doctor_id','left')
           ->get()->result();   
    }
    public function get_user_Updetail($id)
    {
        return $this->db->select('*')->from('doctor_new_user')->where('id',$id)->get()->row();
    }
    public function update_data($data,$id)
    {
      $this->db->where('id',$id)->update('doctor_new_user',$data); 
      if($this->db->affected_rows()>0)
      {
          return true;
      }
      else{
          return false;
      }
    }
    public function getUid_data($id)
    {
        return $this->db->select('doctor_new_user.uid')->from('doctor_new_user')->where('id',$id)->get()->row();
    }
     public function update_uid($data,$id)
    {
      $this->db->where('id',$id)->update('doctor_new_user',$data); 
      if($this->db->affected_rows()>0)
      {
          return true;
      }
      else{
          return false;
      }
    }
    public function Get_prescriptionuser($id='')
    {
   return $this->db->select('doctor_patient_perception.*,doctor_specialty_data.doctor_specialty,doctor_profile_details.doctor_name')
             ->from('doctor_patient_perception')
             ->where('doctor_patient_perception.patient_id',$id)
             ->join('doctor_specialty_data','doctor_specialty_data.id=doctor_patient_perception.department_id','left')
               ->join('doctor_profile_details','doctor_profile_details.id=doctor_patient_perception.doctor_id','left')
           ->get()->result(); 
   }
   
}