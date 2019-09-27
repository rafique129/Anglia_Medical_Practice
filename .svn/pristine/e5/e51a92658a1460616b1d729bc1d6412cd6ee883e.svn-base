<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
         User Management 
            <?php // echo!empty($updatedata->id) ? "Update Instructors" : "Add  Instructors"; ?>
        </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
             <li class="breadcrumb-item"><a href="<?php echo base_url('admin/view-users'); ?>">User Management</a></li>
            <!--<li class="breadcrumb-item"><a href="<?php echo base_url('admin/yoga-instructors-view'); ?>">Instructors</a></li>-->
            <li class="breadcrumb-item active"><?php echo!empty($updatedata) ? "Edit" : "Add"; ?></li>
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
                        echo!empty($updatedata) ? "Update " . $updatedata->user_name . " Profile" : "Add New  Profile";
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
                        <form novalidate action="<?php echo base_url('admin/usermanagement-add'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="updateid" value="<?php
                            if (!empty($updatedata)) {
                                echo!empty($updatedata->id) ? $updatedata->id : '';
                            }
                            ?>">
                            <input type="hidden" name="updatecenterid" value="<?php
                            if (!empty($updatedata)) {
                                echo!empty($updatedata->retreat_centre_id) ? $updatedata->retreat_centre_id : '';
                            }
                            ?>">

                            <div class="row">
<?php
$urlsegment = $this->uri->segment(3);
if (!empty($updatedata->id) && !empty($urlsegment)) {
    ?>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h5>  Select Speciality   <span class="text-danger">*</span></h5>
                                            <select class="form-control select2" style="width: 100%;" name="admin_type">
                                                        <?php
                                                        foreach ($role as $roleobj) {
                                                            ?>
                                                    <option value="<?php echo $roleobj->id; ?>" <?php
                                                    if ($roleobj->id == $updatedata->id) {
                                                        echo "selected";
                                                    }
                                                    ?>><?php echo $roleobj->role_name; ?></option>
                                    <?php }
                                    ?>

                                            </select>
                                        </div>

                                    </div>
                                            <?php } elseif (empty($updatedata->id)) { ?>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h5>  Select Speciality
                                                <span class="text-danger">*</span></h5>
                                            <select class="form-control select2" style="width: 100%;" name="admin_type">
    <?php
    foreach ($role as $roleobj) {
        ?>
                                                    <option value="<?php echo $roleobj->id; ?>"><?php echo $roleobj->role_name; ?></option>
                                    <?php }
                                    ?>

                                            </select>
                                        </div>

                                    </div>

                                        <?php } ?>
                                 <div class="col-sm-4">
                                    <h5>User Name   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="user_name" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                        if (!empty($updatedata)) {
                                            echo!empty($updatedata->user_name) ? $updatedata->user_name : '';
                                        }
                                        ?>"> <div class="help-block"></div></div>
                                <!--<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>-->
                                </div>
                                <div class="col-sm-4">
                                    <h5>First Name   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                        if (!empty($updatedata)) {
                                            echo!empty($updatedata->first_name) ? $updatedata->first_name : '';
                                        }
                                        ?>"> <div class="help-block"></div></div>
                                <!--<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>-->
                                </div>
                                 <div class="col-sm-4">
                                    <h5>Last Name   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="last_name" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                        if (!empty($updatedata)) {
                                            echo!empty($updatedata->last_name) ? $updatedata->last_name : '';
                                        }
                                        ?>"> <div class="help-block"></div></div>
                                <!--<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>-->
                                </div>
                                <div class="col-sm-4">
                                    <h5> Password <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="password" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                        if (!empty($updatedata)) {
                                            echo!empty($updatedata->password) ? $updatedata->password : '';
                                        }
                                        ?>"> <div class="help-block"></div></div>
                                </div>
                                <div class="col-sm-4">
                                    <h5> Email <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                        if (!empty($updatedata)) {
                                            echo!empty($updatedata->email) ? $updatedata->email : '';
                                        }
                                        ?>"> <div class="help-block"></div></div>
                                </div>
                                <div class="col-sm-4">
                                    <h5>Phone   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input type="text" name="Conatct_number" class="form-control" required data-validation-required-message="This field is required" value="<?php
                                        if (!empty($updatedata)) {
                                            echo!empty($updatedata->Conatct_number) ? $updatedata->Conatct_number : '';
                                        }
                                        ?>"><div class="help-block"></div> </div>
                                </div>
                                <div class="col-sm-4">
                                    <h5> Address   <span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <textarea name="Address" id="textarea" class="form-control" required placeholder="Textarea text"><?php
                                            if (!empty($updatedata)) {
                                                echo!empty($updatedata->Address) ? $updatedata->Address : '';
                                            }
                                        ?></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                </div>  
                                 <?php
                                            if (!empty($updatedata)) {
                                                $arraystatus = array('0' => "Deactive", '1' => "Active");
                                                ?>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h5> Status   <span class="text-danger">*</span></h5>
                                            <select class="form-control select2" style="width: 100%;" name="Status">
                                    <?php
                                    foreach ($arraystatus as $arraystatuskey => $arraystatusval) {
                                        ?>
                                                    <option value="<?php echo $arraystatuskey; ?>" <?php echo ($arraystatuskey == $updatedata->status) ? "selected" : ''; ?>><?php echo $arraystatusval; ?></option>
    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>





                            <div class="text-xs-right">
<?php if (empty($updatedata)) {
    ?>
                                    <button type="submit" class="btn btn-info">Submit</button>
<?php } else { ?>
                                    <button type="submit" class="btn btn-info">Update</button>
<?php } ?>
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
<script type="text/javascript">
    $('body').on('click','.ishome',function(){
     var is_home1=$('.ishome').is(":checked")?1:0;
   $("input[name='is_home']").val(is_home1);
    })
    </script>


