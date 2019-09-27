<?php
$controller = $this->router->fetch_class();
$varAction = $this->router->fetch_method();
$session=$this->session->userdata(SITE_SESSION_NAME);
$admin_type=$session['yoga_reteat_admin']['admin_type'];
?>

<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
     <li class="<?php echo (in_array($varAction, array('dashboard'))) ? 'active' : ''; ?>">
        <a href="<?php echo base_url('admin/dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>

    </li>
        <li class="<?php echo (in_array($varAction, array('viewdepartment','insertdepartmentdata','department_details'))) ? 'active' : ''; ?>">
        <a href="<?php echo base_url('admin/viewdepartment'); ?>">
            <i class="fa fa-dashboard"></i> <span>Department</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>

    </li>
     <li class="<?php echo (in_array($varAction, array('viewalldoctorlist','insertdoctorprofiledata','doctor_availity','insertdoctoravaility','editDoctoravaility','doctor_avality_detail','viewdoctordetail'))) ? 'active' : ''; ?>">
        <a href="<?php echo base_url('admin/viewdoctor');?>">
            <i class="fa fa-user-md"></i> <span>Doctors</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
<!--         <ul class="treeview-menu">
            <li class="<?php echo (in_array($varAction, array('viewalldoctorlist','insertdoctorprofiledata','viewdoctordetail'))) ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/viewdoctor'); ?>">Doctor-list</a></li>
            <li class="<?php echo (in_array($varAction, array('doctor_availity','insertdoctoravaility','editDoctoravaility','doctor_avality_detail'))) ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/doctor-availity'); ?>">Availity-List</a></li>
         </ul>-->

    </li>
    
<!--     <li class="<?php echo (in_array($varAction, array('viewappointmentdetail','editpatientappointment','booking_details'))) ? 'active' : ''; ?>">
        <a href="<?php echo base_url('admin/view-appointment'); ?>">
            <i class="fa fa-medkit"></i> <span>Appointment</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>

    </li>-->
    <li class="treeview <?php echo (in_array($varAction, array('viewappointmentdetail','editpatientappointment','booking_details'))) ? 'active' : ''; ?>">
        <a href="#">
            <i class="fa fa-cog fa-fw"></i>Appointment
        </a>
        <ul class="treeview-menu">
           <li class="<?php echo (in_array($varAction, array('viewappointmentdetail','editpatientappointment','booking_details'))) ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/view-appointment'); ?>">View Appointment</a></li>
           <!--<li class="<?php echo (in_array($varAction, array('new_patientview'))) ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/patient'); ?>">New User</a></li>-->
           <li class="<?php echo (in_array($varAction, array('viewregisteruser'))) ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/view-registeruser'); ?>">Registerd User</a></li>
    
        </ul>
    </li>
     <li class="<?php echo (in_array($varAction, array('view_prescription','prescription_details'))) ? 'active' : ''; ?>">
        <a href="<?php echo base_url('admin/view-prescription'); ?>">
            <i class="fa fa-medkit"></i> <span>Prescription</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>

    </li>
    

    

     <li class="treeview <?php echo (in_array($varAction, array('banner','insertbanner','banner_details'))) ? 'active' : ''; ?>">
        <a href="#">
            <i class="fa fa-cog fa-fw"></i>Admin Settings
        </a>
        <ul class="treeview-menu">
           <li class="<?php echo (in_array($varAction, array('banner','insertbanner','banner_details'))) ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/banner'); ?>">Banner</a></li>
       <?php 
       if($admin_type==1)
       {?>
           <li class="<?php echo (in_array($varAction, array('viewusermanagement'))) ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/view-users'); ?>">User Management</a></li>
       <?php } ?>
                   </ul>
    </li>
    
   
   
   

</ul>