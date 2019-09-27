<?php
//var_dump($DoctorAvalityDetail);exit;
$segment=$this->uri->segment(3);
//var_dump($segment);exit;
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
//var_dump($selecttime);exit;
?>
<style>
.modal-dialog {width:800px;}
.thumbnail {margin-bottom:6px;}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>
            <?php echo !empty($DoctorAvalityDetail) ? $DoctorAvalityDetail[0]->doctor_name : ''; ?> 's Details
        </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/viewdoctor'); ?>">View Doctors</a></li>
           
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="container-fluid">
            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">

                        <!--<li><a class="<?php echo empty($_GET) ? "active" : '' ?>" href="#timeline" data-toggle="tab">Basic Information</a></li>-->
                        <li><a href="#overview" class="active" data-toggle="tab" id="art">Day</a></li>
                         <!--<li><a href="#Package" class="<?php echo!empty($_GET['search_y']) ? "active" : '' ?>" data-toggle="tab" id="art">Time</a></li>-->
                    </ul>

                    <div class="tab-content">
<!--
                        <div class="<?php echo empty($_GET) ? "active" : '' ?> tab-pane" id="timeline">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="label-control" style="font-weight:bold;"> Doctor Name :</label> <br>
                                            <p> <?php echo !empty($DoctorAvalityDetail) ? $DoctorAvalityDetail[0]->doctor_name : ''; ?></p>
                                        </div>


                                        <div class="col-md-4">
                                            <label class="label-control" style="font-weight:bold;"> Status :</label> <br>
                                            <p>  <?php echo !empty($DoctorAvalityDetail[0]->status==1) ? "Active" : 'Deactive'; ?></p>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="label-control" style="font-weight:bold;">Created Date :</label><br> 
                                            <p><?php echo !empty($DoctorAvalityDetail) ? date('d-m-y',strtotime($DoctorAvalityDetail[0]->created_date)) : ''; ?></p>
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>





                            </div>
                        </div>-->
                        <!-- /.tab-pane -->

                        <div class="active" id="overview">
          
                            <!-- /.box -->
                            <div class="row">
                                <div class="col-md-12" style="margin-left:80%">
                                    <table>
                                     <td>
                                      <td>
                                        <button  value="<?php echo $segment; ?>" data-target="<?php echo base_url('admin/doctor-availity-edit'); ?>" class="btn btn-social-icon btn-circle edityogacenter"><i class="fa fa-edit"></i></button>
                                        <!--<a href="<?php echo base_url('admin/doctor-detail' . '/' . $segment); ?>" > <button class="btn btn-social-icon btn-circle"><i class="fa fa-eye"></i></button></a>-->
                                        <button class="btn btn-social-icon btn-circle delyogacenter" data-toggle="modal" data-target="#modal-primary" value="<?php echo $segment; ?>" data-href="<?php echo base_url('admin/delete-availity') . '/' . $segment; ?>"><i class="glyphicon glyphicon-trash"></i></button>

                                    </td>
                                    </td>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                 <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="label-control" style="font-weight:bold;">Day :</label><br> 
                                        </div>
                                        <div class="col-md-4">
                                            <label class="label-control" style="font-weight:bold;">Start Time :</label><br> 
                                        </div>
                                         <div class="col-md-4">
                                            <label class="label-control" style="font-weight:bold;">End Time :</label><br> 
                                           
                                        </div>


                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <?php
                                    foreach($DoctorAvalityDetail as $DoctorAvalityDetailarr)
                                    {
                                    ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><?php echo!empty($DoctorAvalityDetailarr) ? $selectday[$DoctorAvalityDetailarr->day] : ''; ?><p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><?php echo!empty($DoctorAvalityDetailarr) ? $selecttime[$DoctorAvalityDetailarr->avail_time]:''; ?><p>
                                        </div>
                                         <div class="col-md-4">
                                            <p><?php echo!empty($DoctorAvalityDetailarr) ? $selecttime[$DoctorAvalityDetailarr->end_time]:''; ?><p>
                                        </div>


                                        
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>


                            <!-- /.content -->



                        </div>
                        <!-- /.tab-pane -->
                    

                     
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            
            <!-- /.col -->
        </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title">Heading</h3>
	</div>
	<div class="modal-body">
		
	</div>
	
   </div>
  </div>
</div>
<!-- /.content-wrapper -->

   <script type="text/javascript">
        $(document).ready(function() {
        $('.thumbnail').click(function(){
              $('.modal-body').empty();
                var title = $(this).parent('a').attr("title");
                $('.modal-title').html(title);
                $($(this).parents('div').html()).appendTo('.modal-body');
                $('#myModal').modal({show:true});
        });
        });
</script>



