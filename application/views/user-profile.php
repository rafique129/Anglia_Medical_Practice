<html lang="en">
    <?php
   
 
    $this->load->view('layout/head');
?>
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
                            <li class="list-group-item"><a href="#profile-settings"><i class="fa fa-cog"></i>&nbsp;&nbsp;Settings</a>
                            </li>                           
                            <li class="list-group-item"><a href="<?php echo base_url('user-booking');?>"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;Booking History</a>
                            </li> 
                             <li class="list-group-item"><a href="<?php echo base_url();?>home/logout"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;Logout</a>
                            </li> 
                        </ul>
                    </aside>                     
               </div>
                <div id="main" class="col-md-9">
                    <?php
                    $success_msg=   $this->session->flashdata('update');
                    if(!empty($success_msg))
                    {
                    ?>
         <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Well Done! </strong>Your Profile Change Successfully.
</div>
                    <?php  }   ?>
                     <div class="row" id="profile-settings">
                         <form action="<?php echo base_url('update-profile');?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" name="updateid"  value="<?php echo !empty($user_deatil)? $user_deatil->id:'';?>">
                             <div class="col-md-6">
                            <h3>Personal Details</h3>
                            <div class="form-group">
                                <label for="formGroupExampleInput1" class="control-label">First Name</label>                               
                                    <input type="text" class="form-control" name="first_name" value="<?php echo !empty($user_deatil)? $user_deatil->first_name:'';?>" id="formGroupExampleInput1" value="" placeholder="First Name" required>
                        </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput1" class="control-label">Last Name</label>                               
                                    <input type="text" class="form-control" name="last_name" id="formGroupExampleInput1" value="<?php echo !empty($user_deatil)? $user_deatil->last_name:'';?>" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                                <label for="formGroupEmailInput1" class="control-label">Email-id</label>                               
                                    <input type="text" class="form-control" name="email" value="<?php echo !empty($user_deatil)? $user_deatil->email:'';?>" id="formGroupEmailInput1" value="" placeholder="Email-id" required>
                        </div> 
                            <div class="form-group">
                                <label for="formGroupEmailInput1" class="control-label">Contact-No</label>                               
                                    <input type="text" class="form-control" name="contact_number" id="formGroupEmailInput1" value="<?php echo !empty($user_deatil)? $user_deatil->contact_number:'';?>" placeholder="Contact-No" required>
                        </div> 
<!--                             <div class="form-group">
                                <label for="formGroupEmailInput1" class="control-label">Contact-No</label>                               
                                    <input type="text" class="form-control" name="contact_number" id="formGroupEmailInput1" value="" placeholder="Email-id" required>
                        </div> -->
                              <div class="form-group">
                                    <label for="exampleInputDate" class="col-sm-4 control-label">DOB</label>
                                   <input type="date" name="dob" class="form-control" id="exampleInputDate" value="<?php echo !empty($user_deatil)? $user_deatil->dob :'';?>" placeholder="Date of Birth" required>
                                </div>
                       <div class="form-group">
                                <label for="formGroupExampleInput2" class="control-label">City</label>                               
                                    <input type="text" class="form-control" name="city" id="formGroupExampleInput2" value="<?php echo !empty($user_deatil)? $user_deatil->city:'';?>" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Address</label>
                            <textarea class="form-control" rows="5" id="Address" name="address"><?php echo !empty($user_deatil)? $user_deatil->address:'';?></textarea>
                       </div>
<div class="form-group">
                            <label for="comment">Profile</label>
                           <input type="file" class="form-control" name="user_image" id="formGroupExampleInput2"  placeholder="City" >
       <input type="hidden" class="form-control" name="old_image" id="formGroupExampleInput2"  value="<?php echo !empty($user_deatil)? $user_deatil->user_image:'';?>">
                                        
</div>
<!--                       <h3>Account Details</h3>-->
<!--                       <div class="form-group">
                                <label for="user-name" class="control-label">User Name</label>                               
                                    <input type="text" class="form-control" name="" id="user-name" value="" placeholder="User Name" required>
                        </div>-->
<!--                        <div class="form-group">
                                <label for="pwd" class="control-label">Password</label>                               
                                    <input type="password" class="form-control" name="" id="pwd" value="" placeholder="Password" required>
                        </div>-->
<!--                        <div class="form-group">
                                <label for="pwd2" class="control-label">Re-type Password</label>                               
                                    <input type="password" class="form-control" name="" id="pwd2" value="" placeholder="Re-type Password" required>
                        </div>-->
                        <button type="submit" class="btn btn-primary right">Save Changes</button>   
                         </form>
                      </div>
   <form action="<?php echo base_url('change-password');?>" method="post">
       <input type="hidden" class="form-control" name="userid"  value="<?php echo !empty($user_deatil)? $user_deatil->id:'';?>">
       
       <div class="col-md-6">   
            <?php
                    $changepassword=   $this->session->flashdata('changepassword');
                    if(!empty($changepassword))
                    {
                    ?>
         <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Well Done! </strong>Your Password Change Successfully.
</div>
                    <?php  }   ?>
        <?php
                    $error=   $this->session->flashdata('error');
                    if(!empty($error))
                    {
                    ?>
         <div class="alert alert-danger fade in alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Oops! </strong>Something Went Wrong.
</div>
                    <?php  }   ?>
                    <h3>Changes Password</h3>
                    <div class="form-group">
                                <label for="pwd3" class="control-label">Current Password</label>                               
                                    <input type="password" class="form-control" name="uid" id="pwd3" value="" placeholder="Current Password" required>
                        </div>                 
                        <div class="form-group">
                                <label for="pwd4" class="control-label">New Password</label>                               
                                    <input type="password" class="form-control" name="newuid" id="pwd4" value="" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                                <label for="pwd5" class="control-label">Re-type Password</label>                               
                                    <input type="password" class="form-control" name="cnfuid" id="pwd5" value="" placeholder="Re-type Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary right">Change Password</button> 
                    </div>     
         </form>
                     </div>
<!--                     <div class="row m-t30" id="booking-history">
                         <div class="col-md-12">
                         <div class="table-responsive">
                             <table class="table-bordered">
                                 <thead>
                                    <tr>
                                        <td>
                                      tittle
                                        </td>
                                        <td>
                                      tittle
                                        </td>
                                        <td>
                                      tittle
                                        </td>
                                        <td>
                                      tittle
                                        </td>
                                        <td>
                                      tittle
                                        </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <tr>
                                     <td>
                                     description
                                     </td>
                                     <td>
                                     description
                                     </td>
                                     <td>
                                     description
                                     </td>
                                     <td>
                                     description
                                     </td>
                                     <td>
                                     description
                                     </td>
                                 </tr>
                                 </tbody>
                             </table>
                         </div>
                         </div>
                     </div>-->
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

