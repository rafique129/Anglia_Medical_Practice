<html lang="en">
    <?php
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
    $selectday = array('0' => 'Mon', '1' => 'Tue', '2' => 'Wed', '3' => 'Thu', '4' => 'Fri', '5' => 'Sat', '6' => 'Sun');
 $this->load->view('layout/head');
   
?>
          <div class="page-content">
            <!-- About Company -->
            <div class="section-full content-inner bg-white appointment">
                <div class="container">
                     
                    <div class="row">
                    
                        <div class="col-sm-8 col-sm-offset-2">
                            <h5 class="text-uppercase text-center no-margin h5">APPOINTMENT BOOKING SYSTEM</h5>   
                         

<div class="col-sm-10 col-md-8 col-xs-12 col-md-offset-2 col-md-offset-2 site-brand npt">

    <div class="col-lg-12" style="min-height: 50px">
        <div class="row table-responsive doctors_bookings">
            <table class="table table-stripped table-condensed">
                <caption style="color: #0C728E; font-size: 20px; font-weight: bold; text-align: center; text-shadow: 1px 1px 1px #ffffff; margin-top: 16px;">Available  Time  Schedule</caption>
                <thead>
                    <tr>
                        <th valign="middle">Doctor Name</th>
                        <?php
                        if(!empty($search_date))
                        {
                             $date=$search_date['date'];
                        for($i=0;$i<=2;$i++)
                        {
                           
                            $day=strtotime($date);
                            ?>
                        <th valign="middle"><?php echo date("l",$day)."  ".$date++;?></th>
                        <?php }} ?>
<!--                        <th valign="middle">Thursday 05-04-2018</th>
                        <th valign="middle">Friday 06-04-2018</th>-->
                    </tr>
                </thead>
<!--             </table>
        </div>        
    </div> -->
            <!-- <div class="col-lg-12" style="height: 80px;">
            <table class=" col-lg-12"> -->
                <!-- <tbody> -->
                    <tr>
                        
                        <td class="doc_name"><strong><?php echo !empty($doctor_data[0]->doctor_name)?$doctor_data[0]->doctor_name:'';?></strong></td>
                         <?php
                        // var_dump($doctor_data);
                        if(!empty($search_date))
                        {
                        $viewslotsdate=$search_date['date'];
                       $doctor_id=!empty($doctor_data[0]->doctor_id)?$doctor_data[0]->doctor_id:'';
                      // var_dump($doctor_id);
                       for($i=0;$i<=2;$i++)
                        {
                            $daychange=strtotime($viewslotsdate);
                            $getday=date('D',$daychange);
                           $daykey= array_search($getday,$selectday);
                           
                          $max_day=$this->Home_model->getMaxAvalityDate($daykey,$_GET['doctor_id']);
                         //var_dump($max_day);
                          ?>
                       <td class="text-center time_slots">
                           <p><?php echo !empty($max_day->min_time)?$selecttime[$max_day->min_time]."-".$selecttime[$max_day->max_time]:'No slots available';?></p>
<!--                                    <p>09:00 AM-05:00 PM</p>-->
                                    <?php
                                    $base_url=base_url('step3')."?date=$viewslotsdate"."&doctorCode=$doctor_id";
                                    ?>
                            <p><a class="btn btn-small btn-success" href="<?php echo $base_url;?>">View slots</a></p>
                            </td>
                        <?php  $viewslotsdate++;}}else {?>
                        <td class="text-center time_slots">
                                    <p><?php echo "No record Found";?></p>
                            <!--<p><a class="btn btn-small btn-success" href="step3.php?date=05/04/2018&doctorCode=5509"/>View slots</a></p>-->
                            </td>
                        <?php } ?>
<!--                        <td class="text-center time_slots">
                                    <p>06:00 AM-06:00 AM</p>
                            <p><a class="btn btn-small btn-success" href="step3.php?date=06/04/2018&doctorCode=5509"/>View slots</a></p>
                            </td>-->
                    </tr>
                <!-- </tbody> -->
            <!-- </table>
        </div> -->
                </table>
        </div>        
    </div>
                            <header>
                                <ul>
                                    <li class="active">
                                        <span><i class="fa fa-user-md"></i></span>
                                         Find Doctors
                                    </li>                                   
                                    <li>
                                        <span><i class="fa fa-pencil-square-o"></i></span>
                                        Appoint. Schedules</li>
                                    <li>
                                     <span><i class="fa fa-calendar-o"></i></span>
                                        Select Time Slot</li>
                                    <li>
                                            <span><i class="fa fa-table"></i></span>
                                        Patient details</li>
                                </ul>
                            </header>                         
                            <form action="<?php echo base_url('step2');?>" class="form clearfix" method="post">
                                <p>Find the Doctor's Availability to book the Appointment</p>
                                <a href="#" class="btn btn-primary">For new patient please click here</a>
                                <div class="form-group">
                                        <label for="Specialty">Specialty</label>
                                        <select id="Specialty" class="form-control speclity" name="Specialty">
                                            <?php
                                            if(!empty($doctor_speclity))
                                            {
                                             foreach($doctor_speclity as $doctor_speclityobj)
                                             {
                                            ?>
                                          <option value="<?php echo $doctor_speclityobj->id ;?>"><?php echo $doctor_speclityobj->doctor_specialty ;?></option>
                                            <?php }}?>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="Doctor">Name of the Doctor:</label>
                                        <select id="Doctor" class="form-control" name="doctor_id">
                                           
                                      
                                        </select>
                                </div>
                               <?php
                                $today = date("Y-m-d");
                                $date = strtotime("+5 day");
                                $maxdate= date('Y-m-d', $date);
                                //var_dump($date);exit;
                                ?>
                                <div class="form-group">
                                        <label for="exampleInputDate">Date</label>
                                        <input type="date" class="form-control" id="exampleInputDate" min="<?php echo $today;?>" max="<?php echo $maxdate;?>" placeholder="Date" name="avail_date">
                                      </div>
                                    
                                        <h4>Location</h4>                                       
                                      <div class="checkbox">
                                        <label><input type="radio"> Remember me</label>
                                      </div>
                            
                                          <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Company -->

            <!-- Content END-->
        </div>
 <!-- Footer -->
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
     <script>
		function goBack() {
		    window.history.back();
		}
		</script>
    