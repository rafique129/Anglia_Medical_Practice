<?php
$availablity=array('0' => 'Mon', '1' => 'Tus', '2' => 'Wed', '3' => 'Thu', '4' => 'Fri', '5' => 'Sat', '6' => 'Sun');
//var_dump($availablity);exit;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
            Doctor Profile
        </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/viewdoctor'); ?>">Doctor Profile</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <!-- /.box -->

                <div class="box padding-0">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-10 col-sm-9">
                                <h3 class="box-title mt-10">All Doctor Profile</h3>


                            </div>
                            <div class="col-md-2 col-sm-3 text-right">
                                <button class="btn btn-social-icon btn-circle checkalldelete" data-toggle="modal" data-target="#modal-primary" value="" data-href="<?php echo base_url('admin/delete-profile'); ?>"><i class="glyphicon glyphicon-trash"></i></button>
                                <a href="<?php echo base_url('admin/doctor-add'); ?>"><button class="btn btn-social-icon btn-circle"><i class="fa fa-plus"></i></button></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->

                    <?php
                    $flashdata = $this->session->flashdata('success');
                    if (!empty($flashdata)) {
                        ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <!--                            <h4><i class="icon fa fa-check"></i> Alert!</h4>-->
                            <?php echo $flashdata; ?>
                        </div>
                    <?php } ?>

                    <div class="box-body">
                        <table id="" class="table table-bordered table-hover display nowrap margin-top-10 table-responsive example1" cellspacing="0" width="100%">
                            <thead>
                                <tr> 
                                    <th data-sortable="false">
                            <div class="controls">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" name="styled_single_checkbox" class="custom-control-input checkall"> 
                                    <span class="custom-control-indicator"></span> 
                                </label>
                            </div> 
                            </th>
                            <th>Name</th>
                             <th>Doctor Specialty</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th data-sortable="false">Availability</th>
                              <th data-sortable="false">Created Date</th>
                            <th data-sortable="false">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($arrview)) {
                                    foreach ($arrview as $arrviewobj) {
                                       $day= explode(',',$arrviewobj->day);
                                      // var_dump(count($day));
                                        ?>
                                        <tr>
                                            <th>
                                    <div class="controls">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" required value="<?php echo $arrviewobj->id; ?> " name="single_checkbox" class="custom-control-input checkItemdelete"> <span class="custom-control-indicator"></span> </label>
                                    </div> 
                                    </th>
                                      <td><?= $arrviewobj->doctor_name; ?></td>
                                    <td><a href="<?php echo base_url('admin/doctor-detail' . '/' . $arrviewobj->id); ?>"><?= $arrviewobj->doctor_specialty; ?></a></td>
                                    <td><?= $arrviewobj->doctor_email; ?></td>
                                    <td><?= $arrviewobj->doctor_phone; ?></td>
                                    <td><a href="<?php echo base_url('admin/doctor-availity-detail' . '/' . $arrviewobj->id); ?>"><?php
                                    $count=count($day);
                                    foreach($day as $dayobj){  $count--;  if(($count>=1)) {echo $availablity[$dayobj].",";}elseif($count==0 && ($dayobj!='')){echo $availablity[$dayobj];}};?></a></td>
                      <td><?= date('d M Y',strtotime($arrviewobj->created_date)); ?></td>
                                    <td>
                                         <a href="<?php echo base_url('admin/doctor-availity-add' . '/' . $arrviewobj->id); ?>" data-toggle="tooltip" title="Add Availability"><button class="btn btn-social-icon btn-circle"><i class="fa fa-plus"></i></button></a>
                                        <button  value="<?= $arrviewobj->id; ?>" data-target="<?php echo base_url('admin/doctor-edit'); ?>" class="btn btn-social-icon btn-circle edityogacenter"><i class="fa fa-edit"></i></button>
                                        <a href="<?php echo base_url('admin/doctor-detail' . '/' . $arrviewobj->id); ?>" > <button class="btn btn-social-icon btn-circle"><i class="fa fa-eye"></i></button></a>
                                        <button class="btn btn-social-icon btn-circle delyogacenter" data-toggle="modal" data-target="#modal-primary" value="<?= $arrviewobj->id; ?>" data-href="<?php echo base_url('admin/delete-profile') . '/' . $arrviewobj->id; ?>"><i class="glyphicon glyphicon-trash"></i></button>

                                    </td>

                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="9"><h4 style="text-align: center;color: red;">No Records Found</h4></td>
                                </tr><?php } ?>

                            </tbody>
                        </table>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->  
            </div>

        </div>
    </section>

    <!-- /.content -->
</div>

<!-- /.content-wrapper -->
