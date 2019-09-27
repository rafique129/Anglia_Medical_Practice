<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('Auth_model');
        $this->load->model('Home_model');
        $this->load->model('Department_model');
        $this->load->library('Emails');
        $this->load->library('layout');
       $this->load->library('image_lib');
       $this->load->helper('string');
      //  $this->load->helper("session");
    }

    public function index() {
        $data=array();
        $data['getbanner'] = $this->Home_model->getbanner();
        $data['getdoctorlist']=$this->Home_model->getDoctorDetails();
        $data['getServices']=$this->Home_model->getServices();
       // var_dump($data['getbanner']);exit;
       $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        $this->load->view("home",$data, $arrExtraContent);
    }

    public function banner() {
        $data['arrview'] = $this->Department_model->getbanner();
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view("admin/banner_list_view", $data, $arrExtraContent);
    }
    public function book_appointment()
    {
        $data=array();
        $data['doctor_speclity'] = $this->Department_model->getdepartmentspecility();
          $data['userlogin']=$this->session->userdata("user");
       //var_dump($data['doctor_list']);exit;
        $this->load->view('step1',$data);
    }
    public function getdoctoravalitime()
    {
      $post=$this->input->get();
      $userdata=$this->session->userdata("doctor_name");
     // var_dump($userdata);exit;
      $data=array();
      if(!empty($post))
      {
         $Specialty=$post['Specialty'];
          $doctor_id=$post['doctor_id'];
          $date=$post['avail_date'];
          $day=strtotime($date);
          $getday=date('D',$day);
           $getdayfullname=date('l',$day);
          $selectday = array('0' => 'Mon', '1' => 'Tue', '2' => 'Wed', '3' => 'Thu', '4' => 'Fri', '5' => 'Sat', '6' => 'Sun');
          $getdaykey=array_search($getday,$selectday);
          $dataarray=array('doctor_id'=>$doctor_id,'day'=>$getdaykey);
          $data['doctor_data']=$this->Home_model->getavabileDoctorTimeSec($dataarray);
          $data['search_date']=array('date'=>$date,'day'=>$getdaykey,'getday'=>$getdayfullname);
         $sess_doctor_name= !empty($data['doctor_data'])?$data['doctor_data'][0]->doctor_name:'';
         $this->session->set_userdata("doctor_name",$sess_doctor_name);
         $data['doctor_speclity_list'] = $this->Home_model->GetdoctorList($Specialty);
         }

        $data['doctor_speclity'] = $this->Department_model->getdepartmentspecility();
      $this->load->view('step2',$data);
    }
    public function filter_doctor()
    {
         $post=$this->input->post();
        if(!empty($post))
        {
          $id=$post['id'];
            $data['doctor_list'] = $this->Department_model->getdoctoralllist($id);
            if(!empty($data['doctor_list']))
            {
             foreach($data['doctor_list'] as $doctor_listobj)
            {
                  echo '<option value="'.$doctor_listobj->id.'">'.$doctor_listobj->doctor_name.'</option>';
             }
        }else
            {
            echo '<option value="">Doctor not available</option>';

        }

            }
    }
    public function step3($get='')
    {
        $get=$this->input->get();
        if(!empty($get))
        {
         $doctor_id=$get['doctorCode'];
          $date=$get['date'];
          $day=strtotime($date);
          $getday=date('D',$day);
           $getdayfullname=date('l',$day);
          $selectday = array('0' => 'Mon', '1' => 'Tue', '2' => 'Wed', '3' => 'Thu', '4' => 'Fri', '5' => 'Sat', '6' => 'Sun');
          $getdaykey=array_search($getday,$selectday);
          $dataarray=array('doctor_id'=>$doctor_id,'day'=>$getdaykey);
          $data['doctor_data']=$this->Home_model->getavabileDoctorTimeSec($dataarray);
      // var_dump($data);exit;
          }
          $data['doctor_speclity'] = $this->Department_model->getdepartmentspecility();
        $this->load->view('step3',$data);
    }
    public function step4()
    {
        $data=array();
        $data['userdata']=$this->session->userdata("userbookdata");
         $data['userlogin']=$this->session->userdata("user");
//        var_dump($data['userlogin']);exit;
        $data["sess_name"]=$this->session->userdata("doctor_name");
      $this->load->view('step4',$data);
    }
    public function submit_step4()
    {
        $user_id=$this->session->userdata('user_id');
        $post=$this->input->post();
       $session_doctor=$this->session->userdata("doctor_name");
        if(!empty($post))
        {
            $rand=random_string('alnum', 4);
            $last_id=$this->Home_model->get_last_recent_order_no();
            if(!empty($last_id->id))
            {
            $last_id->id=(int) $last_id->id+1; 
             $last_id->id=$rand.'1000'.$last_id->id; 
            }
               else {
             $last_id->id = $rand.'10001'; 
         }
            $septype=$this->Home_model->getSpeclityDoctor($post['department_id']);
            $insertdata=array('department_id'=>$septype,
                'Appnmt_no'=>$last_id->id,
                'patient_name'=>$post['patient_name'],
                'sep_id'=>$post['department_id'],
                'appointment_date'=>$post['appointment_date'],
                'appointment_time'=>$post['appointment_time'],
                'doctor_name'=>$session_doctor,
                'doctor_id'=>$post['doctor_id'],
                'uhid'=>$post['uhid'],
                'patient_phone'=>$post['patient_phone'],
                'patient_email'=>$post['patient_email'],
                'user_id'=>$user_id
                    );
          $this->session->set_userdata("userbookdata",$insertdata);
          redirect(base_url('step5'));
        }
    }
    public function request_an_ppointment()
    {
        $get=$this->input->get();
       $data=array();
       if(!empty($get))
       {
       $data['doctor_list'] = $this->Department_model->getdoctoralllist($get['depcode']);
       }
       $config = array(
             'word' => '',
              'word_length' => 8,
           'img_path' => './captcha/',
           'img_url' => base_url() .'captcha/',
             'img_width' => '190',
              'img_height' => 60,
             'expiration' => 3600,
             'font_size' => 50
               );
        $data = create_captcha($config);
           $this->session->set_userdata('captchaCode',$data['word']);
         $data['doctor_speclity'] = $this->Department_model->getdepartmentspecility();
         
         $this->load->view('request-an-ppointment',$data);
    }
    public function saveRequstNewuser()
    {
        $jsonstatus=array();
        $post=$this->input->post();
         if(!empty($post))
        {
           $rand=random_string('alnum', 4);
            $last_id=$this->Home_model->get_last_recent_order_no();
            if(!empty($last_id->id))
            {
            $last_id->id=(int) $last_id->id+1; 
             $last_id->id=$rand.'1000'.$last_id->id; 
            }
               else {
             $last_id->id = $rand.'10001'; 
         }
         $appointment_time=$post['hour'].":".$post['minute']." ".$post['am_pm'];
         $captchacode=$this->session->userdata('captchaCode');
           if($captchacode==$post['captcha'])
           {
               	$uid=uniqid($post['contact_email']);
                 $randid=str_replace($post['contact_email'],'',$uid) ;
            $insert_data=array('first_name'=>$post['first_name'],
                'last_name'=>$post['last_name'],
                'contact_number'=>$post['contact_number'],
                'address'=>$post['address'],
                'city'=>$post['city'],
                'email'=>$post['contact_email'],
              'uid'=>$randid,
                'dob'=>$post['dob'],
              'Gender'=>$post['Gender'],
                    );
           $insertid=$this->Home_model->insert_new_user($insert_data);
          // var_dump($insertid);exit;
          if(!empty($insertid))
          {
         $request_appointmentdata=array(
             'Appnmt_no'=>$last_id->id,
             'department_id'=>$post['specialty_id'],
             'doctor_id'=>$post['doctor_id'],
             'appointment_date'=>$post['appointment_date'],
              'appointment_time'=>$appointment_time,
              'user_id'=>$insertid);
         $senmaildata=array_merge($insert_data,$request_appointmentdata);
         //var_dump($senmaildata);exit;
          $insertdata=$this->Home_model->insertRequestAppointment($request_appointmentdata);
         $this->emails->request_an_appointmentnewuser($senmaildata);
           $data['succes']=$this->session->set_flashdata("succ","Successfully");
          $jsonstatus['redir_url']=base_url('request-an-ppointment');
           echo json_encode($jsonstatus);
          }
        }
        else
        {
        $jsonstatus['status']="Please type correct captcha code";
         echo json_encode($jsonstatus);
        }
        
        }
    }
    public function refresh(){
        // Captcha configuration
              $config = array(
    'word' => '',
              'word_length' => 8,
           'img_path' => './captcha/',
           'img_url' => base_url() .'captcha/',
             'img_width' => '190',
              'img_height' => 60,
             'expiration' => 3600,
             'font_size' => 50

);
        $captcha = create_captcha($config);
  // Unset previous captcha and store new captcha word
      $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode',$captcha['word']);

        // Display captcha image
        echo $captcha['image'];
    }
    public function step5()
    {
        $data=array();
        $data['userdata']=$this->session->userdata("userbookdata");
       // var_dump($data);exit;
        $this->load->view("step5",$data);
    }
    public function appointment_confirm()
    {
      $data=$this->session->userdata("userbookdata");
       $user_id=$this->session->userdata('user_id');
      if(!empty($data))
          {
         $insertdata=array('department_id'=>$data['sep_id'],
             'Appnmt_no'=>$data['Appnmt_no'],
             'appointment_date'=>$data['appointment_date'],
                'appointment_time'=>$data['appointment_time'],
                'doctor_id'=>$data['doctor_id'],
             'user_id'=>$user_id
                    );
           $insert_id=$this->Home_model->insertbookingdata($insertdata);
         $session_doctor=$this->session->userdata("doctor_name");
          $sendmail=array(
                'doctor_name'=>$session_doctor,
               'department'=>$data['department_id']->doctor_specialty,
                'uhid'=>$data['uhid'],
              'patient_name'=>$data['patient_name'],
                'patient_phone'=>$data['patient_phone'],
                'patient_email'=>$data['patient_email'],
                'appointment_date'=>$data['appointment_date'],
                'appointment_time'=>$data['appointment_time']
                );
           $sendmessage=$this->emails->patient_bookingappointment($sendmail);
          
           if($sendmessage)
           {
             $this->session->unset_userdata('userbookdata'); 
             $this->session->set_flashdata("success","send message");
             $this->session->unset_userdata("userbookdata");
           }
          }
       $this->load->view("appointment-confirm");  
    }
    public function uhidvalid()
    {
        $post=$this->input->post();
        if(!empty($post))
        {
         $Getdata=$this->Home_model->Getnamebaseonid($post['uhid']);
         if(!empty($Getdata))
         {
             $this->session->set_userdata("user_id",$Getdata->id);
         $full_name=$Getdata->first_name.' '.$Getdata->last_name;
       echo "Your Name Is ".$full_name;
         }
        else
        {
            $datamsg=array();
          $msg="Invalid UHID";
          echo $msg;
          
           
        }
    }
    }
    public function about_us()
    {
      $this->load->view("about-us");    
    }
    public function terms_condition()
    {
      $this->load->view("terms-condition");    
    }
     public function login()
    {
         $post=$this->input->post();
         if(!empty($post))
         {
             $logindata=array('email'=>$post['email'],
                 'uid'=>$post['uid']
                     );
             $Getdata=$this->Home_model->authuser($logindata);
             if(!empty($Getdata))
             {
            $this->session->set_userdata("user",$Getdata);
        redirect(base_url('user-booking'));
             }
             else
             {
                $this->session->set_flashdata("errorlogin","error");    
             }
         }
      $this->load->view("login");    
    }
    public function new_user()
    {
        $post=$this->input->post();
        if(!empty($post))
        {
  $data=uniqid($post['email']);
     $randid=str_replace($post['email'],'',$data) ;
        $insert_data=array('first_name'=>$post['first_name'],
            'last_name'=>$post['last_name'],
            'uid'=>$randid,
            'email'=>$post['email'],
            'contact_number'=>$post['contact_number'],
            'address'=>$post['address'],
            'city'=>$post['city']);
        $insert_id=$this->Home_model->insert_new_user($insert_data);
       if(!empty($insert_id))
       {
      $sendmessage=$this->emails->sendcradentialnewuser($insert_data); 
      $this->session->set_flashdata("success","send message");
      redirect(base_url('login'));
       }
       }
    }
    public function user_profile()
    {
        $this->checklogin();
          $sess_id=$this->session->userdata("user");
          $data=array();
        $data['user_deatil']=$this->Home_model->get_user_Updetail($sess_id->id);
      // var_dump($data);exit;
        $this->load->view("user-profile",$data);     
    }
    public function checklogin()
    {
       $check=$this->session->userdata("user");
       if(!empty($check))
       {
           return true;
       }
       else
       {
           redirect(base_url('login'));
       }
    }
    public function update_profile()
    {
        $post=$this->input->post();
        if(!empty($post))
        {
            $up_data=array('first_name'=>$post['first_name'],
            'last_name'=>$post['last_name'],
           'email'=>$post['email'],
            'dob'=>$post['dob'],
            'contact_number'=>$post['contact_number'],
            'address'=>$post['address'],
            'city'=>$post['city']);
            if (!empty($_FILES['center_image']['name']) || !empty($post)) {
            $image_data = array();
            $image_data = array('pic_600' => array('width' => '600', 'height' => '600'));
            $image = $this->custom_upload->uploadImage(USER_IMAGE_PATH, "user_image", $image_data);
            $up_data['user_image'] = !empty($image['file_name']) ? $image['file_name'] : $post['old_image'];
        }
           $update_data=$this->Home_model->update_data($up_data,$post['updateid']);
           if($update_data)
        {
            $this->session->set_flashdata('update',"successfully");
           redirect(base_url('user-profile'));
        }
 else {
      $this->session->set_flashdata('update',"successfully");
      redirect(base_url('user-profile')); 
 }
           
        }
    }
      public function change_password()
      {
          $post=$this->input->post();
          if(!empty($post))
          {
              $olduid=$post['userid'];
              $update_data=$this->Home_model->getUid_data($olduid);
              if(($update_data->uid==$post['uid']) && $post['newuid']==$post['cnfuid'])
              {
                  $update=array('uid'=>$post['cnfuid']);
               $this->session->set_flashdata('changepassword',"successfully");
               $update_data=$this->Home_model->update_uid($update,$olduid);
      redirect(base_url('user-profile'));    
              }
 else {
      $this->session->set_flashdata('error',"successfully");
      redirect(base_url('user-profile'));  
 }
          }
      }
      public function user_booking()
    {
        $this->checklogin();
          $sess_id=$this->session->userdata("user");
          $data=array();
            $data['bookdata']=$this->Home_model->get_userdashboard_bookAppdata($sess_id->id);
     //var_dump($data);exit;
            $data['user_deatil']=$this->Home_model->get_user_Updetail($sess_id->id);
          $this->load->view("user-booking",$data);     
    }
    public function user_prescription()
    {
     $this->checklogin();
          $sess_id=$this->session->userdata("user");
          $data=array();
          $data['prescription']=$this->Home_model->Get_prescriptionuser($sess_id->id);
          $this->load->view("user-prescription",$data);    
    }
      public function logout()
    {
       $check=$this->session->userdata("user");
       if(!empty($check))
       {
          $this->session->unset_userdata('user');
          redirect(base_url('login'));
       }
      
    }
    
    
}
