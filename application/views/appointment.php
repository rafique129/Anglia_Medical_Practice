<html lang="en">
    <?php
   
 
    $this->load->view('layout/head');
?>
          <div class="page-content">
            <!-- About Company -->
            <div class="section-full content-inner bg-white appointment">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h5 class="text-uppercase text-center no-margin h5">APPOINTMENT BOOKING SYSTEM</h5>   
                            <header>
                                <ul>
                                    <li class="active">
                                        <span><i class="fa fa-user-md"></i></span>
                                         Find Doctors
                                    </li>                                   
                                    <li>
                                        <span><i class="fa fa-pencil-square-o"></i></span>
                                        Appointment Schedules</li>
                                    <li>
                                     <span><i class="fa fa-calendar-o"></i></span>
                                        Select Time Slot</li>
                                    <li>
                                            <span><i class="fa fa-table"></i></span>
                                        Patient details</li>
                                </ul>
                            </header>                         
                            <form action="<?php echo base_url('step2');?>" class="form clearfix" method="get">
                                <p>Find the Doctor's Availability to book an Appointment</p>
                                <a href="#" class="btn btn-primary">For new patients please click here</a>
                                <div class="form-group">
                                        <label for="Specialty">Specialty</label>
                                        <select id="Specialty" class="form-control speclity" name="Specialty" required>
                                            <option>Select Department</option>
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
                                        <select id="Doctor" class="form-control" name="doctor_id" required>
                                           
                                      
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
                                        <input type="date" class="form-control" id="exampleInputDate" min="<?php echo $today;?>" max="<?php echo $maxdate;?>" placeholder="Date" name="avail_date" required>
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
    