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
          <div class="page-content">
            <!-- About Company -->
            <div class="section-full content-inner bg-white appointment">
                <div class="container">
                     
             <div class="row">
    <div class="col-sm-12 col-md-12 col-xs-12">

      <div class="table-responsive doctors_bookings">
        <h4>Time Slots</h4>  

        <table class="table table-stripped table-condensed text-center">
          <tbody>
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
         <tr> <td> <?php echo $selecttime[$doctor_dataobj->avail_time]." ".$selecttime[$doctor_dataobj->end_time] ?>
                 <p>
                     <a class="btn btn-small btn-success" href="<?php echo $url;?>" class="btn">Book Now</a>
<!--                     <a class="btn btn-small btn-success" href="step4.php?date=03-04-2018&doctorCode=5622&time= 10:20AM  &toTime=10:39 AM" class="btn">Book Now</a>-->
                 </p>
                  </td>
                   
                 </tr> 
            <?php }}else{ ?>
                 <tr> <td> No time slot available. You may try by choosing some other day
                 <p>
                     <!--<a class="btn btn-small btn-success" href="<?php echo $url;?>" class="btn">Book Now</a>-->
<!--                     <a class="btn btn-small btn-success" href="step4.php?date=03-04-2018&doctorCode=5622&time= 10:20AM  &toTime=10:39 AM" class="btn">Book Now</a>-->
                 </p>
                  </td>
                   
                 </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>

    </div>
  </div>
             


<div class="">
    <div class="col-sm-12 col-md-12 col-xs-12 well app_schedule_well">

      <form id="" method="get" action="<?php echo base_url('step3');?>">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-xs-12">
          
            <div class="col-lg-6">
              <div class="form-group">
                <label control-label="" for="inputEmail1"></label>
                <input type="hidden" value="<?php echo $_GET['doctorCode'];?>" name="doctorCode">
              </div>              
              <div class="form-group">
                <label control-label="" for="inputEmail1">Anglia Medical Practice </label>
              </div>
            </div> 
            <div class="col-lg-6">
                  <?php
                                $today = date("Y-m-d");
                                $date = strtotime("+5 day");
                                $maxdate= date('Y-m-d', $date);
                                //var_dump($date);exit;
                                ?>
              <div class="form-group"> 
                <label>Appointment Date</label>             
                <div class="input-group date" id="date2" >
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="date"  class="form-control" min="<?php echo $today;?>" max="<?php echo $maxdate;?>" id="date" name="date"  value="<?php echo $_GET['date'];?>">
                  <span class="help-block" style="color:red" id="eexpire_date-error"></span>                        
                </div>
              </div>


            </div>


            <div class="col-lg-12">
              <div class="form-group">
                <div class="col-lg-4 pull-right np">
                   <input type="submit" class="go_button btn btn-primary btn-block" id="" value="Go">
                </div>
              </div>    
            </div>

          </div>
        </div>
      </form>


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
    