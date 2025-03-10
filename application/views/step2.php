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
            <div class="section-full content-inner bg-10 appointment">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h5 class="text-uppercase text-center no-margin h5">DOCTORS' APPOINTMENT SCHEDULE</h5>
                            <div class="form-outer">
                                    <ul class="steps">
                                            <li class="success">
                                                <span>
                                                    <i class="fa fa-user-md"></i>
                                                </span>
                                                Find Doctors
                                            </li>
                                            <li class="active">
                                                <span>
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </span>
                                                Appoint. Schedules</li>
                                            <li>
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
                                    <table class="table">
                                       <h4 class="text-center"><strong>Available Time Schedule</strong></h4>
                                        <thead>
                                            <tr>
                                                <th>Doctor Name</th>
                                                 <?php
                        if(!empty($search_date))
                        {
                             $date=$search_date['date'];
                        for($i=0;$i<=2;$i++)
                        {
                           
                            $day=strtotime($date);
                            ?>
                                                <th><?php echo date("l",$day)."  ".$date++;?></th>
                                              <?php }} ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?php echo !empty($doctor_data[0]->doctor_name)?$doctor_data[0]->doctor_name:'';?></th>
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
                                                <td>
                                                    <span><?php echo !empty($max_day->min_time)?$selecttime[$max_day->min_time]."-".$selecttime[$max_day->max_time]:'No slots available';?></span>
                                                    <?php
                                    $base_url=base_url('step3')."?date=$viewslotsdate"."&doctorCode=$_GET[doctor_id]";
                                    ?>
                                                    <a href="<?php echo $base_url;?>" class="btn btn-primary">View Slots</a>
                                                </td>
                                                <?php  $viewslotsdate++;}}else {?>
                                                <td>
                                                    <span><?php echo "No record Found";?></span>
                                                    <!--<a href="#" class="btn btn-primary">View Slots</a>-->
                                                </td>
                                                   <?php } ?>
                                                <!--
                                                <td>
                                                    <span>07:30 AM-02:00 PM</span>
                                                    <a href="#" class="btn btn-primary">View Slots</a>
                                                </td>-->
                                            </tr>                                           
                                        </tbody>
                                    </table>
                                    </div>                            

                                <hr />
                                <form action="<?php echo base_url('step2');?>" class="form" method="get"> 
                                    <div class="p-a15 bg-grey clearfix">                                  
                                   <div class="row">
                                        <div class="form-group col-sm-6">
                                        <label for="department">Name of the Department</label>
                                        <select id="Specialty" class="form-control speclityselect" name="Specialty">
                                                                         
                                            <?php
                                            if(!empty($doctor_speclity))
                                            {
                                             foreach($doctor_speclity as $doctor_speclityobj)
                                             {
                                            ?>
                                          <option value="<?php echo $doctor_speclityobj->id ;?>" <?php if($_GET['Specialty']==$doctor_speclityobj->id){echo "selected";}?>><?php echo $doctor_speclityobj->doctor_specialty ;?></option>
                                            <?php }}?>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="doctor">Name of the Doctor</label>
                                        <select id="Doctor" class="form-control" name="doctor_id" required>
                                           <option>Select Doctor Name</option>
                                           <?php
                                           if(!empty($doctor_speclity_list))
                                           {
                                               foreach($doctor_speclity_list as $doctor_speclity_listobj)
                                               {?>
                                            <option value="<?php echo $doctor_speclity_listobj->id;?>" <?php if($doctor_speclity_listobj->id==$_GET['doctor_id']){echo "selected";}?>><?php echo $doctor_speclity_listobj->doctor_name;?></option>
                                               <?php } }
                                           ?>
                                        </select>
                                    </div>
                                   
                                </div>
                                    <div class="row m-b15">
                                            <div class="form-group col-sm-6">
                                                <h4 class="m-a0">Location</h4>
                                                <p class="m-a0">Anglia Medical Practice</p>
                                               </div>
                                            <div class="form-group col-sm-6">
                                                 <?php
                                $today = date("Y-m-d");
                                $date = strtotime("+5 day");
                                $maxdate= date('Y-m-d', $date);
                                //var_dump($date);exit;
                                ?>
                                                <label for="exampleInputDate">Date</label>
                                                <input type="date" class="form-control" name="avail_date" value="<?php echo !empty($_GET['avail_date'])?$_GET['avail_date']:'';?>" id="exampleInputDate" min="<?php echo $today;?>" max="<?php echo $maxdate;?>" placeholder="Date">
                                            </div>        
                                    </div>                                 
                                <button type="submit" class="btn btn-primary right">Go</button>
                            </div>
                                </form>
                                <button type="submit" class="btn btn-primary m-l20" onclick="return goBack();">Back</button>
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

