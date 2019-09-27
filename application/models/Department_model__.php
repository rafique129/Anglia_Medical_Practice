<?php

/*
 * This is frontend auth model page
 */

Class Department_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    //banner
    public function getbanner()
    {
     return $this->db->select('*')->from('tbl_banner')->get()->result();   
    }
  //get view speclity data
    public function viewspecialtydata()
    {
     return $this->db->select('*')->from('doctor_specialty_data')->get()->result();   
    }
  //get doctor specility data
    public function getdepartmentspecility()
    {
        return $this->db->select('doctor_specialty_data.doctor_specialty,doctor_specialty_data.id')->from('doctor_specialty_data')->get()->result();
    }
     //insert data banner
    public function insert_banner($data)
    {
        $this->db->insert('tbl_banner',$data);
    }
    //insert data doctor profile
    public function insertdepartmentdata($data)
    {
        $this->db->insert('doctor_specialty_data',$data);
    }
    //get doctor update data 
    public function getdepartmentupdatedata($editid)
    {
      return $this->db->select('*')->from('doctor_specialty_data')->where('id',$editid)->get()->row();
    }
     //update doctor profile data
    public function updatedepartment($editid,$updatedata)
    {
$this->db->where('id', $editid)->update('doctor_specialty_data', $updatedata);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }  
    }
       //delete department single
    public function deletedepartment($id) {
        $this->db->where('id', $id)->delete('doctor_specialty_data');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

     //delete  availty
    public function deleteavaility($id) {
        //var_dump($id);exit;
        $this->db->where_in('id', $id)->delete('doctor_availity_data');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
    //delete  department multiple
    public function deletemultipledepartment($id) {
        //var_dump($id);exit;
        $this->db->where_in('id', $id)->delete('doctor_specialty_data');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
  //insert data doctor profile
    public function insertdoctorprofiledata($data)
    {
        $this->db->insert('doctor_profile_details',$data);
    }
    //get all doctor list
    public function get_doc_name($id)
    {
     return $this->db->select('doctor_name')->from('doctor_profile_details')->where('id',$id)->get()->row();
    }
 //get all doctor list
    public function getdoctorlist()
    {
     return $this->db->select('doctor_profile_details.*,doctor_specialty_data.doctor_specialty')->from('doctor_profile_details')->join('doctor_specialty_data','doctor_specialty_data.id=doctor_profile_details.speciality_id','left')->get()->result();   
    }
    
 //get doctor detail 
     public function get_docdetails($editid)
    {
         //echo $editid;exit;
      return $this->db->select('*')->from('doctor_profile_details')->where('id',$editid)->get()->row();
    }
    // get specialist details
     public function get_viewspclist($editid)
    {
         //echo $editid;exit;
      return $this->db->select('*')->from('doctor_specialty_data')->where('id',$editid)->get()->row();
    }
    
    
      //get availity update data 
    public function getavalitydata($editid)
    {
      return $this->db->select('*')->from('doctor_availity_data')->where('id',$editid)->get()->row();
    }
    public function get_avality_updatedata()
    {
        return $this->db->select('*')->from('doctor_availity_data')->get()->result();
    }
    //get banner update data 
    public function getbannerupdatedata($editid)
    {
      return $this->db->select('*')->from('tbl_banner')->where('id',$editid)->get()->row();
    }
    //get doctor update data 
    public function getdoctorupdatedata($editid)
    {
      return $this->db->select('*')->from('doctor_profile_details')->where('id',$editid)->get()->row();
    }
    //update doctor profile data
    public function updatebanner($editid,$updatedata)
    {
        //echo '<pre>';
     // var_dump($updatedata);
      // var_dump($editid);exit;
$this->db->where('id', $editid)->update('tbl_banner', $updatedata);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }  
    }
 //update doctor profile data
    public function updatedoctorprofile($editid,$updatedata)
    {
$this->db->where('id', $editid)->update('doctor_profile_details', $updatedata);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }  
    }
    //delete banner profile single
    public function deletedoctorbanner($id) {
        $this->db->where('id', $id)->delete('tbl_banner');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
     //delete doctor profile single
    public function deletedoctorprofile($id) {
        $this->db->where('id', $id)->delete('doctor_profile_details');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    //delete  doctor profile multiple
    public function deletemultipledoctorprofile($id) {
        //var_dump($id);exit;
        $this->db->where_in('id', $id)->delete('doctor_profile_details');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
  //get doctor _avality data
    public function getdoctor_availitydata()
    {
     return $this->db->select('doctor_availity_data.*,doctor_profile_details.doctor_name')
             ->from('doctor_availity_data')
             ->join('doctor_profile_details','doctor_profile_details.id=doctor_availity_data.doctor_id','left')
            ->get()->result();
    }
  //get doctor list
    public function getdoctorlistavaility()
    {
      return $this->db->select('doctor_profile_details.id,doctor_profile_details.doctor_name')->from('doctor_profile_details')->get()->result(); 
    }
    //insert doctor avality data
    public function insertdoctoravailitydata($data)
    {
        $this->db->insert('doctor_availity_data',$data);
    }
    public function viewappointmentdetail()
    {
        return $this->db->select('doctor_booking_data.*,doctor_profile_details.doctor_name,doctor_specialty_data.doctor_specialty')
                ->from('doctor_booking_data')
                ->join('doctor_profile_details','doctor_profile_details.id=doctor_booking_data.doctor_id','left')
                ->join('doctor_specialty_data','doctor_specialty_data.id=doctor_booking_data.department_id','left')
                ->get()->result();
    }
    public function getPatiEnteditAppdetail($id)
    {
      return $this->db->select('*')->from('doctor_booking_data')->where('id',$id)->get()->row();  
    }
    public function getalldoctorlist()
    {
        return $this->db->select('*')->from('doctor_profile_details')->get()->result();
    }
    public function updatePatientApp($editid,$data)
    {
      $this->db->where('id',$editid)->update('doctor_booking_data',$data);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        else{
            return false;
        }
    }
        //delete doctor profile single
    public function deletePatientApp($id) {
        $this->db->where('id', $id)->delete('doctor_booking_data');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    //delete  doctor profile multiple
    public function deletePatientAppmultile($id) {
        //var_dump($id);exit;
        $this->db->where_in('id', $id)->delete('doctor_booking_data');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
}

