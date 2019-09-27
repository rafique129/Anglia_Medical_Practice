<?php
$selectday = array('0' => 'Monday', '1' => 'Tuesday', '2' => 'Wednesday', '3' => 'Thursday', '4' => 'Friday', '5' => 'Saturday', '6' => 'Sunday');
$selecttime = array('07:30:00' => '7:30:00 AM', '08:00:00' => '8:00:00 AM',
    '08:30:00' => '8:30:00 AM',
    '09:00:00' => '9:00:00 AM',
    '09:30:00' => '9:30:00 AM',
    '10:00:00' => '10:00:00 AM',
    '10:30:00' => '10:30:00 AM',
    '11:00:00' => '11:00:00 AM',
    '11:30:00' => '11:30:00 AM',
    '12:00:00' => '12:00:00 PM',
    '12:30:00' => '12:30:00 PM',
    '13:00:00' => '1:00:00 PM',
    '13:30:00' => '1:30:00 PM',
    '14:00:00' => '2:00:00 PM',
    '14:30:00' => '2:30:00 PM',
    '15:00:00' => '3:00:00 PM',
    '15:30:00' => '3:30:00 PM',
    '16:00:00' => '4:00:00 PM',
    '16:30:00' => '4:30:00 PM',
    '17:00:00' => '5:00:00 PM',
    '17:30:00' => '5:30:00 PM',
    '18:00:00' => '6:00:00 PM',
    '18:30:00' => '6:30:00 PM'
);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
            Doctor Availity
            <?php // echo!empty($updatedata->id) ? "Update Instructors" : "Add  Instructors"; ?>
        </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/viewdoctor'); ?>">View Doctors</a></li>   
            <li class="breadcrumb-item active">Add Availity</li>
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
                        echo!empty($updatedata) ? "Update " . $updatedata->doctor_name . " Profile" : "Add New  Profile";
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
                        <form novalidate action="<?php echo base_url('admin/doctor-availity-add'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <h5>  Select Doctor   <span class="text-danger">*</span></h5>
                                        <select class="form-control select2" style="width: 100%;" name="doctor_id">
                                            <?php
                                            foreach ($doctor_list as $doctor_speclityobj) {
                                                ?>
                                                <option value="<?php echo $doctor_speclityobj->id; ?>" <?php
                                                ?>><?php echo $doctor_speclityobj->doctor_name; ?></option>
                                                    <?php } ?>    

                                        </select>
                                    </div>

                                </div>

                            </div>
                            <?php
                            if(!empty($CheckAvalityexits))
                            {
                                $i=count($CheckAvalityexits);
                                foreach($CheckAvalityexits as $CheckAvalityexitsobj)
                                {
                                $i--;
                                //var_dump($i);
                            ?>
                            <div class="row">
                              
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h5>  Select Day  </h5>
                                        <select class="form-control select2" style="width: 100%;" name="avail_day[]">
                                            
                                            <option value="" >Select Start Time</option>
                                            <?php
                                            foreach ($selectday as $selecttimekey => $selecttimevalue) {
                                                //  var_dump($selecttime[$updatedataobj->avail_time]);
                                                ?>
                                                <option value="<?php echo $selecttimekey; ?>" 
                                               <?php  if (($selecttimekey == $CheckAvalityexitsobj->day)) {
                                                    echo "selected";
                                                }
                                             ?>><?php echo $selecttimevalue; ?></option>
<?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h5>  Select Start Time  </h5>
                                        <select class="form-control select2" style="width: 100%;" name="avail_time[]">
                                            <option value="" >Select Start Time</option>
                                            <?php
                                            foreach ($selecttime as $selecttimekey => $selecttimevalue) {
                                                //  var_dump($selecttime[$updatedataobj->avail_time]);
                                                ?>
                                                <option value="<?php echo $selecttimekey; ?>" <?php 
                                                    if (($selecttimekey == $CheckAvalityexitsobj->avail_time)) {
                                                        echo "selected";
                                                    }
                                                ?>><?php echo $selecttimevalue; ?></option>
<?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h5>Select End Time   </h5>
                                        <select class="form-control select2" style="width: 100%;" name="end_time[]">
                                            <option value="" >Select End Time</option>
<?php
foreach ($selecttime as $selecttimekey => $selecttimevalue) {
    ?>
                                                <option value="<?php echo $selecttimekey; ?>" <?php 
        if (($selecttimekey == $CheckAvalityexitsobj->end_time)) {
            echo "selected";
        }
     ?>><?php echo $selecttimevalue; ?></option>
                                <?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h5>Select </h5>
                                       <button type="button" class="btn btn-info <?php echo ($i==0)?"addmoreavalitydata":'removeaddmoreavalitydata';?>"><?php echo ($i==0)?"Add More":'x';?></button>
                                    </div>
                                </div>
                            </div><?php }}else {?>
                            <div class="row">
                              
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h5>  Select Day  </h5>
                                        <select class="form-control select2" style="width: 100%;" name="avail_day[]">
                                            
                                            <option value="" >Select Start Time</option>
                                            <?php
                                            foreach ($selectday as $selecttimekey => $selecttimevalue) {
                                                //  var_dump($selecttime[$updatedataobj->avail_time]);
                                                ?>
                                                <option value="<?php echo $selecttimekey; ?>" <?php foreach ($CheckAvalityexits as $CheckAvalityexitsobj) {
                                                if (($selecttimekey == $CheckAvalityexitsobj->avail_time) && ($selectdaykey == $CheckAvalityexitsobj->day)) {
                                                    echo "selected";
                                                }
                                            } ?>><?php echo $selecttimevalue; ?></option>
<?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h5>  Select Start Time  </h5>
                                        <select class="form-control select2" style="width: 100%;" name="avail_time[]">
                                            <option value="" >Select Start Time</option>
                                            <?php
                                            foreach ($selecttime as $selecttimekey => $selecttimevalue) {
                                                //  var_dump($selecttime[$updatedataobj->avail_time]);
                                                ?>
                                                <option value="<?php echo $selecttimekey; ?>" <?php foreach ($CheckAvalityexits as $CheckAvalityexitsobj) {
                                                    if (($selecttimekey == $CheckAvalityexitsobj->avail_time)) {
                                                        echo "selected";
                                                    }
                                                } ?>><?php echo $selecttimevalue; ?></option>
<?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h5>Select End Time   </h5>
                                        <select class="form-control select2" style="width: 100%;" name="end_time[]">
                                            <option value="" >Select End Time</option>
<?php
foreach ($selecttime as $selecttimekey => $selecttimevalue) {
    ?>
                                                <option value="<?php echo $selecttimekey; ?>" <?php foreach ($CheckAvalityexits as $CheckAvalityexitsobj) {
        if (($selecttimekey == $CheckAvalityexitsobj->end_time)) {
            echo "selected";
        }
    } ?>><?php echo $selecttimevalue; ?></option>
                                <?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h5>Select </h5>
                                       <button type="button" class="btn btn-info addmoreavalitydata">Add more</button>
                                    </div>
                                </div>
                            </div><?php }?>
                            
                            <div class="addmore1"></div>
                           
                            <div class="text-xs-right">
<?php if (empty($updatedata)) {
    ?>
                                    <button type="submit" class="btn btn-info">Submit</button>
<?php } else { ?>
                                    <button type="submit" class="btn btn-info">Update</button>
<?php } ?>
                            </div>
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
    $('body').on('click','.addmoreavalitydata',function(){
        var htmldata = "";
var htmldata="<div class='row'><div class='col-sm-3'><div class='form-group'><h5>  Select Day  </h5><select class='form-control select2' style='width: 100%;' name='avail_day[]'><option value='' >Select Start Time</option> <?php foreach ($selectday as $selecttimekey => $selecttimevalue) { ?><option value='<?php echo $selecttimekey; ?>'><?php echo $selecttimevalue; ?></option><?php } ?> </select></div></div><div class='col-sm-3'><div class='form-group'><h5>  Select Start Time  </h5><select class='form-control select2' style='width: 100%;' name='avail_time[]'><option value='' >Select Start Time</option> <?php foreach ($selecttime as $selecttimekey => $selecttimevalue) { ?> <option value='<?php echo $selecttimekey; ?>' ><?php echo $selecttimevalue; ?></option><?php } ?></select></div> </div><div class='col-sm-3'> <div class='form-group'> <h5>Select End Time</h5><select class='form-control select2' style='width: 100%;' name='end_time[]'> <option value='' >Select End Time</option><?php foreach ($selecttime as $selecttimekey => $selecttimevalue) {?> <option value='<?php echo $selecttimekey; ?>' ><?php echo $selecttimevalue; ?></option><?php } ?> </select></div>  </div><div class='col-sm-3'> <div class='form-group'> <h5>Select </h5> <button type='button' class='btn btn-info addmoreavalitydata'>Add More</button> </div> </div></div>";
      $('.addmore1').append(htmldata);
      $(this).removeClass('addmoreavalitydata');
      $(this).addClass('removeaddmoreavalitydata');
      $(this).html('X');
    })
    $('body').on('click','.removeaddmoreavalitydata',function(){
        $(this).parent().parent().parent().remove();
    })
    </script>


