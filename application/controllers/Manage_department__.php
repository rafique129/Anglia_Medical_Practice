<?php

/*
 * 
 * This is Admin Home Controller Class
 * Shiv kumar Tiwari
 * 
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
            $image_data = array('pic_400' => array('width' => '400', 'height' => '225'));
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
                $image_data = array('pic_400' => array('width' => '400', 'height' => '225'));

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
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Update successfully");
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
                'doctor_degree' => $post['doctor_degree'], 'address' => $post['address'], 'description' => $post['description']);
        }
        if (!empty($_FILES['doctor_image']['name']) && !empty($post)) {
            $image_data = array();
            $image_data = array('pic_400' => array('width' => '400', 'height' => '225'));
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
        //echo"<pre>";
        //var_dump($data);exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/doctor-list-view', $data, $arrExtraContent);
    }

    public function delete_availity($deleteid = '') {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $deletestyles = $this->Department_model->deleteavaility($deleteid);
        if ($deleteid) {
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Deleted successfully");
            redirect(base_url('admin/doctor-availity'));
        } else {
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

    public function doctor_delete_profile($deleteid = '') {
        $this->adminauth->isLoginCheck('', SITE_SESSION_NAME);
        $deletestyles = $this->Department_model->deletedoctorprofile($deleteid);
        if ($deleteid) {
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Delete successfully");
            redirect(base_url('admin/viewdoctor'));
        } else {
            $post = $this->input->post();
            $count = count($post['deleteid']);
            $countdelete = $post['deleteid'];
            $deletearr = $this->Department_model->deletemultipledoctorprofile($countdelete);
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

    public function viewdoctordetail($id = '') {

        $data = array();

        $data['arrview'] = $this->Department_model->get_docdetails($id);
        echo"<pre>";
        var_dump($data);
        exit;
        $arrExtraContent = array();
        $arrExtraContent['js'] = array("assets/vendor_components/datatables.net/js/jquery.dataTables.min.js", "assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js", "assets/js/pages/data-table.js", "assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js");
        $this->layout->view('admin/doctor-view', $data, $arrExtraContent);
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

    public function insert_doctor_availity() {
        $post = $this->input->post();
        // var_dump($post['doctor_id']);exit;
        $doc_id = $post['doctor_id'];
        $doc_name = $this->Department_model->get_doc_name($doc_id);
        var_dump($doc_name);
    }

    public function insertdoctoravaility($editid = '') {
        $post = $this->input->post();
        // echo '<pre>';
        //var_dump($post);
        $doc_name;
        if (!empty($post)) {   //echo"<pre>";
            //var_dump($post['day']);exit;
            $doc_id = $post['doctor_id'];

            $doc_name = $this->Department_model->get_doc_name($doc_id);
            // var_dump($doc_name);
        }
        if (!empty($post)) {
            foreach ($post['day'] as $key => $val) {
                //var_dump($key);
                $varAvailTimeStart = $post['avail_time'][$key];
                $varAvailTimeEnd = $post['end_time'][$key];
                var_dump($varAvailTimeStart);
                echo"=start_time";
                echo"end_time=" . var_dump($varAvailTimeEnd);
                $doc_name = $post['doctor_id'];
                $varDay = $post['day'][$key];
                $insertdata = array('doctor_id' => $doc_name, 'day' => $varDay, 'avail_time' => $varAvailTimeStart, 'end_time' => $varAvailTimeEnd);
                //var_dump($post);
                $this->Department_model->insertdoctoravailitydata($insertdata);
            }

//          //  $insertdata=array();
//        $countavail_time=count($post['avail_time']);
//        $countend_time=count($post['end_time']);
//        $countday=count($post['day']);
//        for($i=0;$i<$countday;$i++)
//        {
//        $insertdata['day']=$post['day'];
//        }
//         for($i=0;$i<$countavail_time;$i++)
//        {
//             //var_dump($post['avail_time'][$i]);
//             if($post['avail_time'][$i]!= '')
//                 $insertdata['avail_time'][]=$post['avail_time'][$i];
//            
//      }
//        for($i=0;$i<$countend_time;$i++)
//        {
//             if($post['end_time'][$i]!='')
//                  $insertdata['end_time']=$post['end_time'];
//       
//        }
//        var_dump($insertdata);
//       $this->Department_model->getdoctor_availitydata($insertdata);
        }
        $updatedata = $this->Department_model->getdepartmentupdatedata($editid);
        // var_dump($updatedata);exit;
        $arrExtraContent = array();
        $doctor_list = $this->Department_model->getdoctorlistavaility();
        // var_dump($doctor_list);exit;
        $arrExtraContent['js'] = array("assets/js/pages/validation.js");
        $this->layout->view('admin/doctor-availity-add', array('doctor_list' => $doctor_list, 'updatedata' => $updatedata), $arrExtraContent);
    }

    public function viewappointmentdetail() {
        $data = array();
        //var_dump($data);exit;
        $data['arrview'] = $this->Department_model->viewappointmentdetail();
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
                'patient_name' => $post['patient_name'],
                'patient_phone' => $post['patient_phone'],
                'patient_email' => $post['patient_email'],
                'appointment_date' => date('Y-m-d',strtotime($post['appointment_date'])),
                'appointment_time' => $post['appointment_time'],
                'status' => $post['status']
            );
           // var_dump($insertdata);exit;
            $update_data = $this->Department_model->updatePatientApp($post['updateid'], $insertdata);
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Update successfully");
            redirect(base_url('admin/view-appointment'));
        }
        $updatedata = $this->Department_model->getPatiEnteditAppdetail($editid);
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
            $this->custom_session->custom_set_flashdata("success", "Well done! Record Delete successfully");
            redirect(base_url('admin/view-appointment'));
        } else {
            $post = $this->input->post();
            $count = count($post['deleteid']);
            $countdelete = $post['deleteid'];
            $deletearr = $this->Department_model->deletePatientAppmultile($countdelete);
            if ($deletearr) {
                $this->custom_session->custom_set_flashdata("success", "Well done! $count Record delete successfully. ");
                $redir_url = base_url('admin/view-appointment');
                echo json_encode(array('status' => true, 'redir_url' => $redir_url));
            }
        }
    }

}
