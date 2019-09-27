<html lang="en">
    <?php
   
 
    $this->load->view('layout/head');
?>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.bundle.css">
 <div class="page-content">
            <!-- User Information -->
            <div class="section-full content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                        <aside class="user-profile-sidebar">
                        <div class="user-profile-avatar text-center">
                            <img class="img-circle" src="<?php echo !empty($user_deatil->user_image)?USER_IMAGE_PATH."/".$user_deatil->user_image:USER_IMAGE_PATH."/team-placeholder.jpg";?>" alt="Image Alternative text" title="AMaze">
                            <h4><?php echo !empty($user_deatil)? $user_deatil->first_name." ".$user_deatil->last_name:'';?></h4>
                        </div>
                        <ul class="list user-profile-nav list-unstyled list-group">                            
                            <li class="list-group-item"><a href="<?php echo base_url('user-profile');?>"><i class="fa fa-cog"></i>&nbsp;&nbsp;Settings</a>
                            </li>                           
                            <li class="list-group-item"><a href="<?php echo base_url('user-booking');?>"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;Booking History</a>
                            </li> 
                            <li class="list-group-item"><a href="<?php echo base_url();?>home/logout"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;Logout</a>
                            </li> 
                        </ul>
                    </aside>                     
               </div>
                <div id="main" class="col-md-9">
               
                   
                     <div class="row m-t30" id="booking-history">
                         <div class="col-md-12">
                         <div class="table-responsive">
                             <table class="table-bordered">
                                 <thead>
                                    <tr>
<!--                                        <td>
                                      Appointment No
                                        </td>-->
                                        <td>
                                      Department Name
                                        </td>
                                        <td>
                                   Doctor Name
                                        </td>
                                        <td>
                                      Appointment Date
                                        </td>
                                        <td>
                                     Appointment Time
                                        </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                     if(!empty($bookdata))
                                     {
                                         foreach($bookdata as $bookdataobj)
                                         {
                                    ?>
                                 <tr>
<!--                                     <td>
                                   <?php echo $bookdataobj->Appnmt_no;?>
                                     </td>-->
                                     <td>
                                   <?php echo $bookdataobj->doctor_specialty;?>
                                     </td>
                                     <td>
                                   <?php echo $bookdataobj->doctor_name;?>
                                     </td>
                                     <td>
                                    <?php echo date("d M Y",strtotime($bookdataobj->appointment_date));?> 
                                     </td>
                                     <td>
                                      <?php echo $bookdataobj->appointment_time;?>
                                     </td>
                                 </tr>
                                     <?php } } else{?>
                                 <tr>
                                    <td colspan="9"><h4 style="text-align: center;color: red;">No Records Found</h4></td>
                                </tr>
                                     
                                  
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                         </div>
                     </div>
                     </div>
                </div>
                <div class="row">

                </div>

            </div>           
        </div>
         <!-- User Information -->

            <!-- Content END-->
      <?php
  $this->load->view('layout/footer');
  ?>
<script type="text/javascript">
    $('body').on('change','.speclity',function(){
     var id=$(this).val();
     $.ajax({
         url:"<?php echo base_url('filter_doctor');?>",
         type:"POST",
         data:{id:id},
         success:function(html)
 { $('#Doctor').removeClass('bs-select-hidden');
   $('#Doctor').html(html);
 }
     })
    })
    </script>

