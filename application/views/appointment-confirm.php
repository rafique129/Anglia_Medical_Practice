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
                            <h5 class="text-uppercase text-center no-margin h5">Thank You</h5>
                            <div class="form-outer">
                                <div class="row">
                                    <div class="col-sm-offset-1 col-sm-10">
                                  
                                <div class="table-responsive p-lr20">
                                    <?php
                                    $msg=$this->session->flashdata("success");
                                    if(!empty($msg))
                                    {
                                    ?>
                                    <p>Thank You Your Appointment Has Been Booked.</p>
                                    <?php } ?>
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
