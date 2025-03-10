<?php

/*
 * To handle all email after change status
 */

class Emails {

    public function __construct() {
        ;
    }

    

    public function sendMailViaGrid($argArrData) {
        //$to,$toname,$subject,$link
        //var_dump($argArrData);exit;
        $url = 'https://api.sendgrid.com/api/mail.send.json';
        $data = array(
            "api_user" => "1336524",
            "api_key" => "Shiv@francesco123",
            "to" => $argArrData['to'],
            "toname" => $argArrData['name'],
            "subject" => $argArrData['subject'],
            "html" => $argArrData['body'],
            "from" => "sales@praxoldistribution.com"
        );
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json_dec = curl_exec($ch);
        //$json_dec = json_encode($response, true);
        curl_close($ch);
        //return $json_dec;
    }

    /*
     * Handles all status changes select the related email
     * @param $arrData
     * @return void
     */
public function patient_perceptionemail($post){
    //var_dump($post['patient_email']);exit;
        $msg = '';
       $msg .= "<h1>Patient Perception </h1>";
                $msg .= "Name: <strong>{$post['patient_name']}</strong>";
                $msg .= "<h4>Detail</h4>";
                $msg .= "Email: <strong>{$post['patient_email']}</strong><br>";
                $msg .= "Phone: <strong>{$post['patient_phone']}</strong><br>";
                $msg .= "Issue Date: <strong>{$post['Issue_Date']}</strong><br>";
                $msg .= "End Date: <strong>{$post['end_date']}</strong><br>";
                $msg .= "Appointment Time: <strong>{$post['appointment_time']}</strong><br>";
                $msg .= "Date: <strong>" . date('d-m-Y H:i:s') . "</strong><br>";
                $msg .= "<h4>Message</h4>";
                $msg .= "<strong>{$post['patient_note']}</strong>";
                $msg .= "";
                //var_dump($msg);exit;
                if(!empty($msg)) 
                {
                    $subject="Patient Perception";
               $this->sendMailViaGrid(array('to' => $post['patient_email'], 'name' => "Sales Team - Praxoldistribution", 'subject' => $subject,'body' => $msg));
                }
        }
        public function patient_bookingappointment($post){
        $msg = '';
       $msg .= "<h1>Patient Appointment Detail </h1>";
        $msg .= "Department: <strong>{$post['department']}</strong>";
                $msg .= "Doctor Name: <strong>{$post['doctor_name']}</strong>";
                $msg .= "Uhid: <strong>{$post['uhid']}</strong><br>";
                $msg .= "Email: <strong>{$post['patient_email']}</strong><br>";
                $msg .= "Phone: <strong>{$post['patient_phone']}</strong><br>";
                $msg .= "Appointment Date: <strong>{$post['appointment_date']}</strong><br>";
                $msg .= "Appointment Time: <strong>{$post['appointment_time']}</strong><br>";
                $msg .= "Date: <strong>" . date('d-m-Y H:i:s') . "</strong><br>";
                $msg .= "<h4>Message</h4>";
                 $msg .= "";
                //var_dump($msg);exit;
                if(!empty($msg)) 
                {
                    $subject="Patient Appointment Detail";
               $this->sendMailViaGrid(array('to' => $post['patient_email'], 'name' => "Sales Team - Praxoldistribution", 'subject' => $subject,'body' => $msg));
               return true;
               }
        }
        public function request_an_appointmentnewuser($post){
       $name=$post['first_name'].' '.$post['last_name'];
            $msg = '';
       $msg .= "<h1>Your Appointment Detail </h1>";
           $msg .= "Name: <strong>{$name}</strong><br>";
            $msg .= "Appointment No.: <strong>{$post['Appnmt_no']}</strong><br>";
                $msg .= "Uhid: <strong>{$post['uid']}</strong><br>";
                $msg .= "Email: <strong>{$post['email']}</strong><br>";
                $msg .= "Phone: <strong>{$post['contact_number']}</strong><br>";
                $msg .= "Dob: <strong>{$post['dob']}</strong><br>";
                  $msg .= "Appointment Date: <strong>{$post['appointment_date']}</strong><br>";
                $msg .= "Appointment Time: <strong>{$post['appointment_time']}</strong><br>";
                $msg .= "Date: <strong>" . date('d-m-Y H:i:s') . "</strong><br>";
                $msg .= "<h4>Message</h4>";
                 $msg .= "";
                //var_dump($msg);exit;
                if(!empty($msg)) 
                {
                    $subject="Your Appointment Detail";
               $this->sendMailViaGrid(array('to' => $post['email'], 'name' => "Sales Team - Praxoldistribution", 'subject' => $subject,'body' => $msg));
               return true;
               }
        }
         public function sendcradentialnewuser($post){
     
            $msg = '';
       $msg .= "<h1>Your Login Detail </h1>";
       $msg .= "Uid: <strong>{$post['uid']}</strong><br>";
                $msg .= "Email: <strong>{$post['email']}</strong><br>";
                $msg .= "Date: <strong>" . date('d-m-Y H:i:s') . "</strong><br>";
                $msg .= "<h4>Message</h4>";
                 $msg .= "";
                //var_dump($msg);exit;
                if(!empty($msg)) 
                {
                    $subject="Your Login Detail";
               $this->sendMailViaGrid(array('to' => $post['email'], 'name' => " Anglia Medical Practice. ", 'subject' => $subject,'body' => $msg));
               return true;
               }
        }
}
