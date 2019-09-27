<html lang="en">
    <?php
   
 
    $this->load->view('layout/head');
?>
    <div class="page-content">
            <!-- About Company -->
            <div class="section-full content-inner bg-10 appointment">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h5 class="text-uppercase text-center no-margin h5">PLEASE CONFIRM YOUR APPOINTMENT DETAILS</h5>
                            <div class="form-outer">
                                <div class="row">
                                    <div class="col-sm-offset-1 col-sm-10">
                                  
                                <div class="table-responsive p-lr20">
                                    <p>Thank you for booking appointment here are your appointment details:</p>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Appointment Number
                                                </td>
                                                <td>
                                                 <?php echo $userdata['Appnmt_no'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Name
                                                </td>
                                                <td>
                                                <?php echo $userdata['patient_name'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                    <td>
                                                        Mobile Number
                                                    </td>
                                                    <td>
                                                    <?php echo $userdata['patient_phone'];?>
                                                    </td>
                                                </tr>
                                            <tr>
                                                <td>
                                                    Date
                                                </td>
                                                <td>
                                               <?php echo $userdata['appointment_date'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                    <td>
                                                       Time
                                                    </td>
                                                    <td>
                                                            <?php echo $userdata['appointment_time'];?>
                                                    </td>
                                                </tr>
<!--                                                <tr>
                                                        <td>
                                                           Location
                                                        </td>
                                                        <td>
                                                                ABC
                                                        </td>
                                                    </tr>-->
                                                    <tr>
                                                            <td>
                                                               Department
                                                            </td>
                                                            <td>
                                                        <?php echo !empty($userdata['department_id']->doctor_specialty)?$userdata['department_id']->doctor_specialty:'';?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                                <td>
                                                                   Doctor Name
                                                                </td>
                                                                <td>
                                                               <?php echo $userdata['doctor_name'];?>
                                                                </td>
                                                            </tr>
                                                           
                                        </tbody>                                        
                                    </table>
                                      
                                    <button  class="btn btn-primary" onclick="return goBack();">Back</button>
                                   <form method="post" action="<?php echo base_url('appointment-confirm');?>">  
                                    <button type="submit" class="btn btn-primary right">Confirm</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Company -->

            <!-- Content END-->
        </div>
<?php
  $this->load->view('layout/footer');
  ?>
 <script>
		function goBack() {
		    window.history.back();
		}
		</script>
