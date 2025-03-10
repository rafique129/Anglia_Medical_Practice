<html lang="en">
    <?php
     $date = strtotime("+5 day");
    $after5day=date('Y-m-d',$date);
    if(!empty($_GET['date']) && ($_GET['date']>$after5day))
    {
       echo "Date available only 5 days before";
    }
 $this->load->view('layout/head');
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
 <!-- Content -->
        <div class="page-content">
            <!-- About Company -->
            <div class="section-full content-inner bg-10 appointment">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h5 class="text-uppercase text-center no-margin h5">SELECT TIME SLOT</h5>
                            <div class="form-outer">
                                    <ul class="steps">
                                            <li class="success">
                                                <span>
                                                    <i class="fa fa-user-md"></i>
                                                </span>
                                                Find Doctors
                                            </li>
                                            <li class="success">
                                                <span>
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </span>
                                                Appoint. Schedules</li>
                                                <li class="active">
                                                <span>
                                                    <i class="fa fa-calendar-o"></i>
                                                </span>
                                                Select Time Slot</li>
                                            <li>
                                                <span>
                                                    <i class="fa fa-table"></i>
                                                </span>
                                                Patient details</li>
                                        </ul>
                                  <div class="schedule table-responsive p-lr20">
                                    <table class="table table-striped">
                                       <h4 class="text-center"><strong>Available Time Schedule</strong></h4>
                                       <h5 class="m-a0">Time Slots</h5>
                                        <tbody>
                                            <tr>
                                                <?php
            if(!empty($doctor_data))
            {
                $dep_id=$doctor_data[0]->speciality_id;
                foreach($doctor_data as $doctor_dataobj)
                {  
                    $time=$selecttime[$doctor_dataobj->avail_time];
                    $to_time=$selecttime[$doctor_dataobj->end_time];
                    $url=base_url('step4')."?date=$_GET[date]"."&doctorCode=$_GET[doctorCode]"."&depcode=$dep_id"."&time=$time"."&to_time=$to_time";
                    //VAR_DUMP($url);
         ?>
                                                <td>
                                                    <span><?php echo $selecttime[$doctor_dataobj->avail_time]." ".$selecttime[$doctor_dataobj->end_time] ?></span>
                                                        <a href="<?php echo $url;?>" class="btn btn-primary">Book Now</a>
                                                </td>
                                                <?php }}else{?>
                                                <tr><td><b>No time slot available. You may try by choosing some other day</b></td></tr><?php } ?><!--
                                                <td>
                                                    <span>12:30PM -12:44 PM</span>
                                                    <a href="#" class="btn btn-primary">Book Now</a>
                                                </td>
                                                <td>
                                                    <span>3:00PM -03:14 PM</span>
                                                    <a href="#" class="btn btn-primary">Book Now</a>
                                                </td>
                                            </tr>  
                                            <tr>
                                                <td>
                                                        <span>3:30PM -03:44 PM</span>
                                                        <a href="#" class="btn btn-primary">Book Now</a>
                                                </td>-->
                                            </tr>                                         
                                        </tbody>
                                    </table>
                                    </div>                            

                                <hr />
                                <form action="<?php echo base_url('step3');?>" class="form" method="get"> 
                                     <input type="hidden" value="<?php echo $_GET['doctorCode'];?>" name="doctorCode">
                                    <div class="p-a15 bg-grey clearfix">                                 
                                    <div class="row m-b15">
<!--                                            <div class="form-group col-sm-6">
                                                <h4 class="m-a0">Dr. ABC</h4>
                                                <p class="m-a0">Department</p>
                                               </div>-->
                                            <div class="form-group col-sm-6">
                                                             <?php
                                $today = date("Y-m-d");
                                $date = strtotime("+5 day");
                                $maxdate= date('Y-m-d', $date);
                                //var_dump($date);exit;
                                ?>
                                                <label for="exampleInputDate">Appointment Date</label>
                                                <input type="date" value="<?php echo !empty($_GET['date'])?$_GET['date']:'';?>" name="date" class="form-control" min="<?php echo $today;?>" max="<?php echo $maxdate;?>" id="exampleInputDate" placeholder="Date">
                                            </div>        
                                    </div>                                 
                                <button type="submit" class="btn btn-primary right">Submit</button>
                            </div>
                                </form>
                                <button type="submit" class="btn btn-primary m-l20" onclick="return goBack()">Back</button>
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
 <script type="text/javascript">
    $('body').on('change','.speclityselect',function(){
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
<script>
		function goBack() {
		    window.history.back();
		}
		</script>