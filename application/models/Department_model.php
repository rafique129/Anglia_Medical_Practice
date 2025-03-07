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
     return $this->db->select('*')->from('doctor_specialty_data')->order_by('id','desc')->get()->result();   
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
        $this->db->where('id', $id)->delete('doctor_availity_data');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
     //delete  department multiple
    public function deleteavailitymultipel($id) {
        //var_dump($id);exit;
        $this->db->where_in('doctor_id', $id)->delete('doctor_availity_data');
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
     return $this->db->select('doctor_profile_details.*,doctor_specialty_data.doctor_specialty,group_concat(doctor_availity_data.day) as day')
             ->from('doctor_profile_details')
             ->join('doctor_specialty_data','doctor_specialty_data.id=doctor_profile_details.speciality_id','left')
             ->join('doctor_availity_data','doctor_availity_data.doctor_id=doctor_profile_details.id','left')
             ->group_by('doctor_profile_details.id')
             ->get()->result();   
    }
    
     //get spc name
     public function spc_name($editid)
    {
         //echo $editid;exit;
      return $this->db->select('doctor_specialty')->from('doctor_specialty_data')->where('id',$editid)->get()->row();
    }
     //get department detail 
     public function get_bannerdetails($editid)
    {
        
      return $this->db->select('*')->from('tbl_banner')->where('id',$editid)->get()->row();
    }
    //get department detail 
     public function get_departmentdetails($editid)
    {
        
      return $this->db->select('*')->from('doctor_specialty_data')->where('id',$editid)->get()->row();
    }
    //get department detail 
     public function get_bookingdetails($editid)
    {
        
      return $this->db->select('doctor_booking_data.*,doctor_profile_details.doctor_name,doctor_specialty_data.doctor_specialty,doctor_new_user.uid,doctor_new_user.first_name,doctor_new_user.last_name,doctor_new_user.email,doctor_new_user.contact_number,doctor_new_user.address,doctor_new_user.city,doctor_new_user.dob')
              ->from('doctor_booking_data')
              ->join('doctor_profile_details','doctor_profile_details.id=doctor_booking_data.doctor_id','left')
             ->join('doctor_new_user','doctor_new_user.id=doctor_booking_data.user_id','left')
              ->join('doctor_specialty_data','doctor_specialty_data.id=doctor_booking_data.department_id ','left')
              ->where('doctor_booking_data.id',$editid)->get()->row();
    }
 //get doctor detail 
     public function get_docdetails($editid)
    {
         
      return $this->db->select('doctor_profile_details.*,doctor_specialty_data.doctor_specialty')->from('doctor_profile_details')->join('doctor_specialty_data','doctor_specialty_data.id=doctor_profile_details.speciality_id ','left')->where('doctor_profile_details.id',$editid)->get()->row();
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
             ->group_by('doctor_availity_data.doctor_id')
            ->get()->result();
    }
  //get doctor list
    public function getdoctorlistavaility($id='')
    {
        if(!empty($id))
        {
            $this->db->where('doctor_profile_details.id',$id);
        }
      return $this->db->select('doctor_profile_details.id,doctor_profile_details.doctor_name')
              ->from('doctor_profile_details')
              ->get()->result(); 
    }
    //insert doctor avality data
    public function insertdoctoravailitydata($data)
    {
        $this->db->insert('doctor_availity_data',$data);
    }
    public function viewappointmentdetail()
    {
        return $this->db->select('doctor_booking_data.*,doctor_profile_details.doctor_name,doctor_specialty_data.doctor_specialty,doctor_new_user.uid,doctor_new_user.first_name,doctor_new_user.last_name,doctor_new_user.email,doctor_new_user.contact_number,doctor_new_user.address,doctor_new_user.city,doctor_new_user.dob')
                ->from('doctor_booking_data')
                ->join('doctor_profile_details','doctor_profile_details.id=doctor_booking_data.doctor_id','left')
                ->join('doctor_new_user','doctor_new_user.id=doctor_booking_data.user_id','left')
                ->join('doctor_specialty_data','doctor_specialty_data.id=doctor_booking_data.department_id','left')
                ->get()->result();
    }
    public function getPatiEnteditAppdetail($id)
    {
       
      return $this->db->select('doctor_booking_data.*,doctor_new_user.uid,doctor_new_user.first_name,doctor_new_user.last_name,doctor_new_user.email,doctor_new_user.contact_number,doctor_new_user.address,doctor_new_user.city,doctor_new_user.dob')->from('doctor_booking_data')
              ->where('doctor_booking_data.id',$id)
                           ->join('doctor_new_user','doctor_new_user.id=doctor_booking_data.user_id','left')
              ->get()->row();  
    }
    //check patient precription exits or not at update time
    public function CheckPatiEnteditAppdetail($id)
    {
      
      return $this->db->select('*')->from('doctor_patient_perception')->where('patient_id',$id)->get()->row();  
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
        public function updateuserdetail($editid,$data)
    {
      $this->db->where('id',$editid)->update('doctor_new_user',$data);
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
        $this->db->where('user_id', $id)->delete('doctor_booking_data');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
      //delete user profile single
    public function deleteuserApp($id) {
        $this->db->where('id', $id)->delete('doctor_new_user');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    //delete  doctor profile multiple
    public function deletePatientAppmultile($id) {
        //var_dump($id);exit;
        $this->db->where_in('user_id', $id)->delete('doctor_booking_data');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
    //delete  user profile multiple
    public function deleteuserAppmultile($id) {
        //var_dump($id);exit;
        $this->db->where_in('id', $id)->delete('doctor_new_user');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
    //get avality detail
    public function getDoctorAvalityDetail($id)
    {
         return $this->db->select('doctor_availity_data.*,doctor_profile_details.doctor_name')
             ->from('doctor_availity_data')
             ->join('doctor_profile_details','doctor_profile_details.id=doctor_availity_data.doctor_id','left')
             ->where('doctor_availity_data.doctor_id',$id)
            ->get()->result();
    }
   //get doctor avality data for update
    public function getDoctorAvalityUpdata($id)
    {
        return $this->db->select('*')->from('doctor_availity_data')->where('doctor_id',$id)->get()->result();
    }
   //delete doctor avality data 
     public function deleteavailitydata($id) {
       $this->db->where('doctor_id', $id)->delete('doctor_availity_data');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
    public function insertpatientpreparation($data)
    {
        $this->db->insert('doctor_patient_perception',$data);
    }
   //check patient precription exits or not
   public function Getprecription($pid='')
   {
       return $this->db->select('doctor_patient_perception.id,doctor_patient_perception.patient_id')->from('doctor_patient_perception')->where('patient_id',$pid)->get()->row();
   }
    //update patient precription 
   public function updateprecription($data,$pid)
   {
    $this->db->where('patient_id',$pid)->update('doctor_patient_perception',$data);
    if($this->db->affected_rows()>0)
    {
        return true;
    }
 else {
     return false;   
    }
   }
    //get doctor specility data
    public function getdoctoralllist($id)
    {
        return $this->db->select('doctor_profile_details.doctor_name,doctor_profile_details.id')->from('doctor_profile_details')->where('speciality_id',$id)->get()->result();
    }
    //GET PATIENT prescription
    PUBLIC FUNCTION view_prescription()
    {
        return $this->db->select('*')->from('doctor_patient_perception')->order_by('id','desc')->group_by('patient_id ')->get()->result();
    }
   //get  prescription detail
    public function prescription_detail($id)
    {
      return $this->db->select('doctor_patient_perception.patient_note,doctor_patient_perception.Issue_Date,doctor_patient_perception.end_date,doctor_profile_details.doctor_name,doctor_specialty_data.doctor_specialty')
              ->from('doctor_patient_perception')
              ->where('doctor_patient_perception.patient_id',$id)
              ->join('doctor_profile_details','doctor_profile_details.id=doctor_patient_perception.doctor_id','left')
              ->join('doctor_specialty_data','doctor_specialty_data.id=doctor_patient_perception.department_id','left')
              ->get()->result();
    }
   //get new patient request
    public function GetnewPatientView($id='')
    {
        if(!empty($id))
        {
            $this->db->where('doctor_new_user.id',$id);
        }
        return $this->db->select('doctor_request_appointment.*,doctor_new_user.*,doctor_specialty_data.doctor_specialty,doctor_profile_details.doctor_name')
                ->from('doctor_request_appointment')
                ->join('doctor_specialty_data','doctor_specialty_data.id=doctor_request_appointment.specialty_id','left')
                ->join('doctor_profile_details','doctor_profile_details.id=doctor_request_appointment.doctor_id','left')
                ->join('doctor_new_user','doctor_new_user.id=doctor_request_appointment.user_id','left')
                ->get()->result();
    }
    public function view_registeruser($id='')
    {
        if(!empty($id))
        {
             $this->db->where('doctor_new_user.id',$id);
        }
        return $this->db->select('*')->from('doctor_new_user')->get()->result();
    }
    public function getuser_management()
    {
        return $this->db->select('*')->from('doctor_appointment_admin')->get()->result();
    }
    public function getrole()
    {
        return $this->db->select('*')->from('role')->get()->result();
    }
    public function usermanagement_add($data)
    {
        $this->db->insert('doctor_appointment_admin',$data);
    }
    public function getUpUserMangement($id='')
    {
       return $this->db->select('*')->from('doctor_appointment_admin')->where('id',$id)->get()->row(); 
    }
    public function updateUserMangement($id,$data)
    {
      $this->db->where('id',$id)->update('doctor_appointment_admin',$data);  
    }
       //delete doctor profile single
    public function deleteUserMangement($id) {
        $this->db->where('id', $id)->delete('doctor_appointment_admin');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    //delete  doctor profile multiple
    public function deleteUserMangementMultiple($id) {
        //var_dump($id);exit;
        $this->db->where_in('id', $id)->delete('doctor_appointment_admin');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }
   
}

