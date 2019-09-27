<?php

/*
 * This is frontend auth model page
 */

Class Auth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function authenticate($data) {

        return $this->db->select('*')->from('doctor_appointment_admin')->where(array('email' => $data['email'], 'password' => $data['password']))->get()->row();
    }

    //
    public function updateadminprofile($id, $updata) {

        $this->db->where('id', $id)->update('doctor_appointment_admin', $updata);
        if ($this->db->affected_rows() > 0) {
            return $this->db->select('*')->from('doctor_appointment_admin')->where('id', $id)->get()->row();
        }
    }



 

 




}
