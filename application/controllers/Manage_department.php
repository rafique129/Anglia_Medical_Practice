<?php

/*
 * 
 * This is Admin Home Controller Class
 */
defined('BASEPATH') OR exit('No direct script access allowed');

Class Manage_department extends CI_Controller {

    public $status;

    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->model('Department_model');
        $this->load->library('sendmail');
        $this->load->library('layout');
    }

    public function viewdepartment() {
        $data = array();
        //var_dump($data);exit;
        $data['arrview'] = $this->Department_model->viewspecialtydata();
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/doctor-specialty-view', $data, $arrExtraContent);
    }

    public function insertdepartmentdata($editid = '') {
        $post = $this->input->post();
        if (!empty($post)) {
            $insertdata = array('doctor_specialty' => $post['doctor_specialty'],
                'title' => $post['title'], 'description' => $post['description']);
        }
        if (!empty($_FILES['image']['name']) && !empty($post)) {
            $image_data = array();
            $image_data = array('pic_400' => array('width' => '500', 'height' => '306'));
            $image = $this->custom_upload->uploadImage(CENTER_IMAGE_PATH, "image", $image_data);
            $insertdata['image'] = !empty($image['file_name']) ? $image['file_name'] : $post['old_image'];
        }
        if (!empty($insertdata) && empty($post['updateid'])) {
            // var_dump($insertdata);exit;
            $this->Department_model->insertdepartmentdata($insertdata);
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Added successfully");
            redirect(base_url('admin/viewdepartment'));
        } elseif (!empty($insertdata) && !empty($post['updateid'])) {
            //var_dump($insertdata);exit;
            $insertdata['status'] = $post['Status'];
            $update_data = $this->Department_model->updatedepartment($post['updateid'], $insertdata);
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Updated successfully");
            redirect(base_url('admin/viewdepartment'));
        }
        $updatedata = $this->Department_model->getdepartmentupdatedata($editid);
        // var_dump($updatedata);exit;
        $arrExtraContent = array();
        $doctor_speclity = $this->Department_model->getdepartmentspecility();
        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        $this->layout->view('admin/department-add', array('doctor_speclity' => $doctor_speclity, 'updatedata' => $updatedata), $arrExtraContent);
    }

    public function availity_edit($editid = '') {
        $post = $this->input->post();
        //echo $editid;
        $updatedata = $this->Department_model->getavalitydata($editid);
        //echo $updatedata['day'];exit;
        //echo '<pre>';
        // var_dump($data);exit;
        // $arrExtraContent = array();
        // $availity = $this->Department_model->get_avality_updatedata();

        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        //var_dump($arrExtraContent);exit;
        $this->layout->view('admin/doctor-availity-edit', array('updatedata' => $updatedata));
    }
public function insertbanner($editid='') {
 
        $post = $this->input->post();
  //var_dump($post);
         if (!empty($post)) {
            $insertdata = array(
                'title' => $post['title'], 
                'description' => $post['description'],
                    );
            //var_dump($post);
             
        }
        if (!empty($_FILES['image']['name']) && !empty($post)) {
                $image_data = array();
                $image_data = array('pic_400' => array('width' => '1920', 'height' => '766'));

                $image = $this->custom_upload->uploadImage(BANNER_IMAGE_PATH, "image", $image_data);
               // var_dump($image);exit;
                $insertdata['image'] = !empty($image['file_name']) ? $image['file_name'] : $post['old_image'];
            }
            if(!empty($insertdata) && empty($post['updateid']))
        {
               // echo"<pre>";
            //var_dump($insertdata);exit;
         $this->Department_model->insert_banner($insertdata);
          $this->custom_session->custom_set_flashdata("success", "Well done! Record Add successfully");
                redirect(base_url('admin/banner'));
        }
         elseif (!empty($insertdata) && !empty($post['updateid'])) {
            
             $insertdata['status'] = $post['Status'];
             //var_dump($insertdata);exit;
            $update_data = $this->Department_model->updatebanner($post['updateid'], $insertdata);
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Updated successfully");
            redirect(base_url('admin/banner'));
         }
         
           $updatedata=$this->Department_model->getbannerupdatedata($editid);
          $arrExtraContent = array();
       
        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        $this->layout->view('admin/banner',array('updatedata'=>$updatedata), $arrExtraContent);
    }
    

    public function insertdoctorprofiledata($editid = '') {

        $post = $this->input->post();
        if (!empty($post)) {
            $insertdata = array('speciality_id' => $post['speciality_id'],
                'doctor_name' => $post['doctor_name'], 'doctor_email' => $post['doctor_email'], 'doctor_phone' => $post['doctor_phone'],
                'doctor_degree' => $post['doctor_degree'], 'address' => $post['address'], 'description' => $post['description'],'is_home'=>!empty($post['is_home'])?$post['is_home']:'0');
        }
        if (!empty($_FILES['doctor_image']['name']) && !empty($post)) {
            $image_data = array();
            $image_data = array('pic_400' => array('width' => '500', 'height' => '600'));
            $image = $this->custom_upload->uploadImage(DOCTOR_IMAGE_PATH, "doctor_image", $image_data);
            $insertdata['doctor_image'] = !empty($image['file_name']) ? $image['file_name'] : $post['old_image'];
        }
        if (!empty($insertdata) && empty($post['updateid'])) {
            //var_dump($insertdata);exit;
            $this->Department_model->insertdoctorprofiledata($insertdata);
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Add successfully");
            redirect(base_url('admin/viewdoctor'));
        } elseif (!empty($insertdata) && !empty($post['updateid'])) {
            //var_dump($insertdata);exit;
            $insertdata['status'] = $post['Status'];
            $update_data = $this->Department_model->updatedoctorprofile($post['updateid'], $insertdata);
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Update successfully");
            redirect(base_url('admin/viewdoctor'));
        }

        $updatedata = $this->Department_model->getdoctorupdatedata($editid);
        $arrExtraContent = array();
        $doctor_speclity = $this->Department_model->getdepartmentspecility();
        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        $this->layout->view('admin/doctor-add', array('doctor_speclity' => $doctor_speclity, 'updatedata' => $updatedata), $arrExtraContent);
    }

    public function viewalldoctorlist() {
        $data = array();
        $data['arrview'] = $this->Department_model->getdoctorlist();
        //var_dump($data);exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/doctor-list-view', $data, $arrExtraContent);
    }
 public function doctor_delete_banner($deleteid = '') {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $deletestyles = $this->Department_model->deletedoctorbanner($deleteid);
        if ($deleteid) {
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Deleted successfully");
            redirect(base_url('admin/banner'));
//        } else {
//            $post = $this->input->post();
//            $count = count($post['deleteid']);
//            $countdelete = $post['deleteid'];
//            $deletearr = $this->Department_model->deletemultipledoctorprofile($countdelete);
//            if ($deletearr) {
//                $this->custom_session->custom_set_flashdata("success", "Well done! $count Record delete successfully. ");
//                $redir_url = base_url('admin/viewdoctor');
//                echo json_encode(array('status' => true, 'redir_url' => $redir_url));
//            }
        }
    }
    public function delete_availity($deleteid = '') {
        //var_dump($deleteid);EXIT;
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $deletestyles = $this->Department_model->deleteavailitydata($deleteid);
        if ($deleteid) {
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Deleted successfully");
            redirect(base_url('admin/viewdoctor'));
        } 
    }
    public function doctor_delete_profile($deleteid = '') {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $deletestyles = $this->Department_model->deletedoctorprofile($deleteid);
        $this->Department_model->deleteavailitydata($deleteid);
        if ($deleteid) {
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Delete successfully");
            redirect(base_url('admin/viewdoctor'));
        } else {
            $post = $this->input->post();
            $count = count($post['deleteid']);
            $countdelete = $post['deleteid'];
            $deletearr = $this->Department_model->deletemultipledoctorprofile($countdelete);
            $this->Department_model->deleteavailitymultipel($countdelete);
            if ($deletearr) {
                $this->custom_session->custom_set_flashdata("success", "Well done! $count Record delete successfully. ");
                $redir_url = base_url('admin/viewdoctor');
                echo json_encode(array('status' => true, 'redir_url' => $redir_url));
            }
        }
    }

    public function department_delete($deleteid = '') {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $deletestyles = $this->Department_model->deletedepartment($deleteid);
        if ($deleteid) {
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Delete successfully");
            redirect(base_url('admin/viewdepartment'));
        } else {
            $post = $this->input->post();
            $count = count($post['deleteid']);
            $countdelete = $post['deleteid'];
            $deletearr = $this->Department_model->deletemultipledepartment($countdelete);
            if ($deletearr) {
                $this->custom_session->custom_set_flashdata("success", "Well done! $count Record delete successfully. ");
                $redir_url = base_url('admin/viewdepartment');
                echo json_encode(array('status' => true, 'redir_url' => $redir_url));
            }
        }
    }

    public function doctor_availity() {
        $data = array();
        $data['arrview'] = $this->Department_model->getdoctor_availitydata();
        //  echo"<pre>";
        //var_dump($data);exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/doctor-availity-list', $data, $arrExtraContent);
    }

     public function department_details($id = '') {
        $data = array();
        $data['arrview'] = $this->Department_model->get_departmentdetails($id);
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/speciality_view',array('data'=>$data) , $arrExtraContent);
    }
        public function banner_details($id = '') {
        $data = array();
        $data['arrview'] = $this->Department_model->get_bannerdetails($id);
        //var_dump($data);
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/banner_details',array('data'=>$data) , $arrExtraContent);
    }  
    
    public function booking_details($id = '') {
        $data = array();
        $data['arrview'] = $this->Department_model->get_bookingdetails($id);
       // var_dump($data);
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/booking_details',array('data'=>$data) , $arrExtraContent);
    }
    
    public function viewdoctordetail($id = '') {

        $data = array();
        $data['arrview'] = $this->Department_model->get_docdetails($id);
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/doctor-view',array('data'=>$data) , $arrExtraContent);
    }

    //view specialist 
    public function viewspclist($id = '') {
        // echo $id."gdfgfdg"; exit;
        $data = array();

        $data['arrview'] = $this->Department_model->get_viewspclist($id);
        echo "<pre>";
        var_dump($data);
        exit;
        $arrExtraContent = array();

        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        //var_dump($arrExtraContent);exit;
        $this->layout->view('admin/doctor-availity-list', $data, $arrExtraContent);
    }
 public function insertdoctoravaility($editid = '') {
      $post = $this->input->post();
      if (!empty($post)) {
         // var_dump($post);exit;
          $this->Department_model->deleteavailitydata($post['doctor_id']);
            foreach ($post['avail_day'] as $key => $val) {
                $insertdata['doctor_id']=$post['doctor_id'];
                $insertdata['day']=$val;
                 $insertdata['avail_time']=$post['avail_time'][$key];
                 $insertdata['end_time']=$post['end_time'][$key];
                 $this->Department_model->insertdoctoravailitydata($insertdata);
            }
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Add successfully");
            redirect(base_url('admin/viewdoctor'));
        }
         $CheckAvalityexits=$this->Department_model->getDoctorAvalityUpdata($editid);
        $updatedata='';
        $arrExtraContent = array();
        $doctor_list = $this->Department_model->getdoctorlistavaility($editid);
       // var_dump($CheckAvalityexits);exit;
        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        $this->layout->view('admin/doctor-availity-add', array('doctor_list' => $doctor_list, 'updatedata' => $updatedata,'CheckAvalityexits'=>$CheckAvalityexits), $arrExtraContent);
    }

    public function viewappointmentdetail() {
        $data = array();
        //var_dump($data);exit;
        $data['arrview'] = $this->Department_model->viewappointmentdetail();
        //var_dump($data);exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/patient-booking-view', $data, $arrExtraContent);
    }

    public function editpatientappointment($editid = '') {
       $post = $this->input->post();
        if (!empty($post)) {
            $insertdata = array(
                'department_id' => $post['department_id'],
                'doctor_id' => $post['doctor_id'],
                'user_id' => $post['user_id'],
                'appointment_date' => date('Y-m-d',strtotime($post['appointment_date'])),
                'appointment_time' => $post['appointment_time'],
               
            );
            $usewrdetail=array('first_name' => $post['patient_name'],
                'last_name' => $post['last_name'],
                'contact_number' => $post['patient_phone'],
                'email' => $post['patient_email'],
                'address'=>$post['address'],
                'city'=>$post['city'],
                'address'=>$post['address']);
           // var_dump($insertdata);exit;
            $update_data = $this->Department_model->updatePatientApp($post['updateid'], $insertdata);
            if($update_data)
            {
              $this->Department_model->updateuserdetail($post['user_id'], $usewrdetail);  
            }
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Update successfully");
            redirect(base_url('admin/view-appointment'));
        }
        $updatedata = $this->Department_model->getPatiEnteditAppdetail($editid);
        //var_dump($updatedata);exit;
        $arrExtraContent = array();
        $doctor_speclity = $this->Department_model->getdepartmentspecility();
        $doctor_list = $this->Department_model->getalldoctorlist();
        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        $this->layout->view('admin/patinet-edit-detail', array('doctor_speclity' => $doctor_speclity, 'doctor_list' => $doctor_list, 'updatedata' => $updatedata), $arrExtraContent);
    }
     public function patientApp_delete($deleteid = '') {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $deletestyles = $this->Department_model->deletePatientApp($deleteid);
        if ($deleteid) {
            //$this->Department_model->deleteuserApp($deleteid);
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Deleted successfully");
            redirect(base_url('admin/view-appointment'));
        } else {
            $post = $this->input->post();
            $count = count($post['deleteid']);
            $countdelete = $post['deleteid'];
            $deletearr = $this->Department_model->deletePatientAppmultile($countdelete);
           // $this->Department_model->deleteuserAppmultile($countdelete);
            if ($deletearr) {
                $this->custom_session->custom_set_flashdata("success", "Well done! $count Record delete successfully. ");
                $redir_url = base_url('admin/view-appointment');
                echo json_encode(array('status' => true, 'redir_url' => $redir_url));
            }
        }
    }
    public function doctor_avality_detail($id='')
    {
       $data = array();
       if(!empty($id))
       {
        $data['arrview'] = $this->Department_model->getdoctor_availitydata();
        $data['DoctorAvalityDetail'] = $this->Department_model->getDoctorAvalityDetail($id); 
       //var_dump($data);exit;
       }
        $this->layout->view('admin/doctor-availity-detail', $data); 
    }
    public function editDoctoravaility($id='')
    {
    $post = $this->input->post();
       // $insertdata=array('day'=>'','avail_time'=>'','end_time'=>'');
        if (!empty($post)) {
          // var_dump($post['doctor_id']);exit;
            $deleterecord=$this->Department_model->deleteavailitydata($post['doctor_id']);
            if($deleterecord)
            {
                 
             foreach ($post['avail_day'] as $key => $val) {
                $insertdata['doctor_id']=$post['doctor_id'];
                $insertdata['day']=$val;
                 $insertdata['avail_time']=$post['avail_time'][$key];
                 $insertdata['end_time']=$post['end_time'][$key];
               $this->Department_model->insertdoctoravailitydata($insertdata);
            }
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Add successfully");
            redirect(base_url('admin/viewdoctor'));
        }
        }
        $updatedata=$this->Department_model->getDoctorAvalityUpdata($id);
       // var_dump($updatedata);
        $arrExtraContent = array();
        $doctor_list = $this->Department_model->getdoctorlistavaility();
        // var_dump($doctor_list);exit;
        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        $this->layout->view('admin/doctor-availity-edit', array('doctor_list' => $doctor_list,'CheckAvalityexits'=>$updatedata), $arrExtraContent);

    }
    public function patient_prescription($preid='')
    {
      
   $post = $this->input->post();
        if (!empty($post)) {
            $insertdata = array(
                'patient_id'=>$post['patient_id'],
                'department_id' => $post['department_id'],
                'doctor_id' => $post['doctor_id'],
                'patient_name' => $post['patient_name'],
                'patient_phone' => $post['patient_phone'],
                'patient_email' => $post['patient_email'],
                'end_date' => date('Y-m-d',strtotime($post['end_date'])),
                'Extend_Date' => date('Y-m-d',strtotime($post['Extend_Date'])),
                'Issue_Date' => date('Y-m-d',strtotime($post['Issue_Date'])),
                'appointment_time' => $post['appointment_time'],
                 'patient_note'=>$post['patient_note']
            );
             if (!empty($_FILES['prescription']['name']) && !empty($post)) {
            $insertdata['prescription'] = !empty($_FILES['prescription']['name']) ? $_FILES['prescription']['name'] : $post['old_image'];
        $data=$this->do_upload();
             }
            
            //MAIL SEND 
            $this->load->library('emails');
            $this->emails->patient_perceptionemail($insertdata);
              $chexkexits=$this->Department_model->Getprecription($post['patient_id']); 
            //END MAIL FUNCTION
            if(!empty($chexkexits))
            {
              $this->Department_model->updateprecription($insertdata,$post['patient_id']);   
           $this->custom_session->custom_set_flashdata("success", "Well done! Record Update successfully");
            redirect(base_url('admin/view-appointment'));
              }
            else{
           $update_data = $this->Department_model->insertpatientpreparation($insertdata);
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Insert successfully");
            redirect(base_url('admin/view-appointment'));
        }
        }
          $chexkexitsdata=$this->Department_model->Getprecription($preid); 
        if(!empty($chexkexitsdata))
        {
         $updatedata = $this->Department_model->CheckPatiEnteditAppdetail($preid);   
        }
        else{
        $updatedata = $this->Department_model->getPatiEnteditAppdetail($preid);
        }
        //var_dump($updatedata);exit;
        $arrExtraContent = array();
        $doctor_speclity = $this->Department_model->getdepartmentspecility();
        $doctor_list = $this->Department_model->getalldoctorlist();
        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        $this->layout->view('admin/patient-perception', array('doctor_speclity' => $doctor_speclity, 'doctor_list' => $doctor_list, 'updatedata' => $updatedata), $arrExtraContent);
    }
         public function do_upload(){
              $config = array(
            'upload_path' => "./uploads/prescription/",
           'allowed_types' => "gif|jpg|png|jpeg|pdf",
               'overwrite' => TRUE,
               'max_size' => "204800056789", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "7681234",
                 'max_width' => "102456789"
               );
              //var_dump($insertdata);exit;
            $this->load->library('upload', $config);
                if(! $this->upload->do_upload('prescription'))
               {
             $data = array('upload_data' => $this->upload->data());
               return $data;
                }
              else
               {
               $error = array('error' => $this->upload->display_errors());
            return $error;
             }
               }
    public function view_prescription()
    {
           $data = array();
        //var_dump($data);exit;
        $data['arrview'] = $this->Department_model->view_prescription();
       // var_dump($data);exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/view-prescription', $data, $arrExtraContent);
     
    }
     public function prescription_details($id = '') {
        $data = array();
        $data['arrview'] = $this->Department_model->prescription_detail($id);
        //var_dump($data);exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/prescription-details',$data, $arrExtraContent);
    }
    public function new_patientview()
    {
           $data = array();
        //var_dump($data);exit;
        $data['arrview'] = $this->Department_model->GetnewPatientView();
       // var_dump($data);exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/new-patientview', $data, $arrExtraContent);
     
    }
    public function patient_detail($id='')
    {
         $data = array();
        $data['arrview'] = $this->Department_model->GetnewPatientView($id);
       // var_dump($data);exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/new-patient-detail',$data, $arrExtraContent);
   
    }
    public function viewregisteruser()
    {
           $data = array();
        //var_dump($data);exit;
        $data['arrview'] = $this->Department_model->view_registeruser();
       // var_dump($data);exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/view-registeruser', $data, $arrExtraContent);
    }
     public function viewregisteruser_detail($id='')
    {
         $data = array();
        $data['arrview'] = $this->Department_model->view_registeruser($id);
       // var_dump($data);exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/registeruser-detail',$data, $arrExtraContent);
   }
   public function viewusermanagement()
    {
           $data = array();
        //var_dump($data);exit;
        $data['arrview'] = $this->Department_model->getuser_management();
       // var_dump($data);exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/user-management', $data, $arrExtraContent);
    }
    public function usermanagement_add($editid='')
    {
      $post = $this->input->post();
        if (!empty($post)) {
            $insertdata = array('admin_type' => $post['admin_type'],
                'user_name' => $post['user_name'], 'first_name' => $post['first_name'], 'last_name' => $post['last_name'],
                'password' => md5($post['password']), 'email' => $post['email'], 'Conatct_number' => $post['Conatct_number'],'Address' => $post['Address']);
        }
       if (!empty($insertdata) && empty($post['updateid'])) {
            //var_dump($insertdata);exit;
            $this->Department_model->usermanagement_add($insertdata);
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Added successfully");
            redirect(base_url('admin/view-users'));
        } elseif (!empty($insertdata) && !empty($post['updateid'])) {
            //var_dump($insertdata);exit;
            $insertdata['status'] = $post['Status'];
            $update_data = $this->Department_model->updateUserMangement($post['updateid'], $insertdata);
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Update successfully");
            redirect(base_url('admin/view-users'));
        }

        $updatedata = $this->Department_model->getUpUserMangement($editid);
        $arrExtraContent = array();
        $role = $this->Department_model->getrole();
        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        $this->layout->view('admin/usermanagement-add', array('role' => $role, 'updatedata' => $updatedata), $arrExtraContent);
      
    }
      public function usermanagement_delete($deleteid = '') {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $deletestyles = $this->Department_model->deleteUserMangement($deleteid);
        if ($deleteid) {
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Delete successfully");
        redirect(base_url('admin/view-users'));
        } else {
            $post = $this->input->post();
            $count = count($post['deleteid']);
            $countdelete = $post['deleteid'];
            $deletearr = $this->Department_model->deleteUserMangementMultiple($countdelete);
            if ($deletearr) {
                $this->custom_session->custom_set_flashdata("success", "Well done! $count Record delete successfully. ");
                $redir_url = base_url('admin/view-users');
                echo json_encode(array('status' => true, 'redir_url' => $redir_url));
            }
        }
    }
   

}
