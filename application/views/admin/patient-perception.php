<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
  <script src="<?php echo base_url();?>assets/js/jquery-1.12.4.js"></script>
  <!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
   <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
   $( function() {
    $( "#datepicker1" ).datepicker();
  } );
   $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  
  </script>
 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
            Prescription
            <?php // echo!empty($updatedata->id) ? "Update Instructors" : "Add  Instructors"; ?>
        </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/view-appointment'); ?>">View-Appointment</a></li>   
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Validation Forms -->
        <div class="box box-default padding-0">
            <div class="box-header with-border">
<!--                <h3 class="card-title"> <?php echo!empty($updatedata->id) ? "Update Yoga Instructors" : "Add New Yoga Instructors"; ?> </h3>-->
                <h3 class="card-title mt-10"> <?php
                    if (!empty($updatedata)) {
                        echo!empty($updatedata->first_name) ? "Edit " . $updatedata->first_name." ".$updatedata->last_name. " Profile" : $updatedata->patient_name;
                    } 
                    ?> </h3>
                <!--<h6 class="card-subtitle">Bootstrap Form Validation check the <a href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>-->

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form novalidate action="<?php echo base_url('admin/patient-prescription'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="patient_id" value="<?php if (!empty($updatedata)) {
                        echo!empty($updatedata->patient_id) ? $updatedata->patient_id:$updatedata->id;
                    } ?>">
                          <input type="hidden" name="department_id" value="<?php if (!empty($updatedata)) {
                        echo!empty($updatedata->department_id) ? $updatedata->department_id : '';
                    } ?>">
                                <input type="hidden" name="doctor_id" value="<?php if (!empty($updatedata)) {
                        echo!empty($updatedata->doctor_id) ? $updatedata->doctor_id : '';
                    } ?>">

                            <div class="row">
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <h5>  Select Speciality   <span class="text-danger">*</span></h5>
                                        <select class="form-control select2" style="width: 100%;"  disabled="true">
                                          <?php
                                             foreach ($doctor_speclity as $doctor_speclityobj) {
                                                    ?>
                                                    <option value="<?php echo $doctor_speclityobj->id; ?>" <?php if ($doctor_speclityobj->id == $updatedata->department_id ) {
            echo "selected";
        } ?>><?php echo $doctor_speclityobj->doctor_specialty; ?></option>
                                            <?php } 
                                            ?>
                                           
                                        </select>
                                    </div>
                         
                                </div>
                                  <div class="col-sm-4">
                                    <div class="form-group">
                                        <h5>  Doctor List   <span class="text-danger">*</span></h5>
                                        <select class="form-control select2" style="width: 100%;"  disabled="true">
                                          <?php
                                             foreach ($doctor_list as $doctor_listobj) {
                                                    ?>
                                                    <option value="<?php echo $doctor_listobj->id; ?>" <?php if ($doctor_listobj->id == $updatedata->doctor_id ) {
            echo "selected";
        } ?>><?php echo $doctor_listobj->doctor_name; ?></option>
                                            <?php } 
                                            ?>
                                           
                                        </select>
                                    </div>
                         
                                </div>
                                <div class="col-sm-4">
                                    <h5>Name   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="patient_name" class="form-control" required data-validation-required-message="This field is required" value="<?php
if (!empty($updatedata)) {
    echo!empty($updatedata->first_name) ? $updatedata->first_name." ".$updatedata->last_name : $updatedata->patient_name;
}
?>"> <div class="help-block"></div></div>
                                <!--<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>-->
                                </div>
                               <div class="col-sm-4">
                                    <h5> Email <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="email" name="patient_email" class="form-control" required data-validation-required-message="This field is required" value="<?php
if (!empty($updatedata)) {
    echo!empty($updatedata->email) ? $updatedata->email : $updatedata->patient_email;
}
?>"> <div class="help-block"></div></div>
                                </div>
                                <div class="col-sm-4">
                                    <h5>Phone   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="patient_phone" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                if (!empty($updatedata)) {
                                    echo!empty($updatedata->contact_number) ? $updatedata->contact_number : $updatedata->patient_phone;
                                }
                                ?>"><div class="help-block"></div> </div>
                                </div>
                                 <div class="col-sm-4">
                                    <h5>Extend Date   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="Extend_Date" id="datepicker" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                if (!empty($updatedata)) {
                                    echo!empty($updatedata->Extend_Date) ? date('d/m/Y',strtotime($updatedata->Extend_Date)) : '';
                                }
                                ?>"><div class="help-block"></div> </div>
                                </div>
                                <div class="col-sm-4">
                                    <h5>Issue Date   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="Issue_Date" id="datepicker1" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                if (!empty($updatedata)) {
                                    echo!empty($updatedata->Issue_Date) ? date('d/m/Y',strtotime($updatedata->Issue_Date)) : '';
                                }
                                ?>"><div class="help-block"></div> </div>
                                </div>
                                <div class="col-sm-4">
                                    <h5> End Date   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="end_date" id="datepicker2" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                if (!empty($updatedata)) {
                                    echo!empty($updatedata->end_date) ? date('d/m/Y',strtotime($updatedata->end_date)) : '';
                                }
                                ?>"><div class="help-block"></div> </div>
                                </div>
                                 <div class="col-sm-4">
                                    <h5>Time   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="appointment_time" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                if (!empty($updatedata)) {
                                    echo!empty($updatedata->appointment_time) ? $updatedata->appointment_time : '';
                                }
                                ?>"><div class="help-block"></div> </div>
                                </div>
                              <div class="col-sm-4">
                                    <h5> Patient Note <span class="text-danger"></span></h5>
                                    <div class="form-group">
                                        <input type="text" name="patient_note" value="<?php echo !empty($updatedata-> 	patient_note ) ? $updatedata-> 	patient_note  : '';?>" class="form-control"> <div class="help-block"></div></div>
                                </div>
                                      <div class="col-sm-4">
						<h5>Upload Prescription     <span class="text-danger">*</span></h5>
						<div class="form-group">
							<input type="file"  name="prescription" <?php echo empty($updatedata->id)? "required data-validation-required-message='This field is required'":'';?> class="form-control"> <div class="help-block"></div></div>
                                                        <input type="hidden"  id="old"  name="old_image"  value="<?php echo !empty($updatedata->prescription)?$updatedata->prescription:'';?>">
                                               <?php 
                                               if(!empty($updatedata->prescription))
                                               {
                                                   ?>
                                               
                                                <div>
                                                    <embed  src="<?php if(!empty($updatedata)){echo !empty($updatedata->prescription)?base_url().'uploads/prescription/'. $updatedata->prescription:'';}?>" height="150" width="150">
                                                </div>
                                               <?php } ?>
     </div>

                            </div>
   <div class="text-xs-right">
                                   <button type="submit" class="btn btn-info">Submit</button>

                            </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



