<html lang="en">
    <?php
    $this->load->view('layout/head');
?>
    <!-- Content -->
    <div class="page-content p-t50">
        <div class="login-form">
            <div class="tab-content">
                <div id="login" class="tab-pane active text-center">
                    <form class="p-a30 dez-form  m-t100" action="<?php echo base_url('login');?>" method="post">
                        <h3 class="form-title m-t0">Sign In</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address and your password. </p>
                        <?php
        $success=$this->session->flashdata("success");
     if(!empty($success))
        {
        ?>
      <div class="alert alert-success fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> Your Email and Password has been sent your Email Successfully.
</div>

        <?php } ?>
                               <?php
        $errorlogin=$this->session->flashdata("errorlogin");
     if(!empty($errorlogin))
        {
        ?>
      <div class="alert alert-warning fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Warning!</strong> Invalid username or password
</div>

        <?php } ?>
                        <div class="form-group">
                            <input name="email" required="" class="form-control" placeholder="User Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="uid" required="" class="form-control " placeholder="Type Password" type="password"/>
                        </div>
                        <div class="form-group text-left">
                            <button class="site-button">login</button></div>
<!--                            <label>
                            <input id="check1" type="checkbox">
							<label for="check1">Remember me</label>
                            </label>
                            <a data-toggle="tab" href="#forgot-password" class="m-l15"><i class="fa fa-unlock-alt"></i> Forgot Password</a> -->
                    </form>
                    <div class="bg-primary p-a15 "> <a data-toggle="tab" href="#developement-1" class="text-white">Create an account</a> </div>
                </div>
                <div id="forgot-password" class="tab-pane fade ">
                    <form class="p-a30 dez-form m-t100 text-center">
                        <h3 class="form-title m-t0">Forget Password ?</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address below to reset your password. </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
                        </div>
                        <div class="form-group text-left"> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button class="site-button pull-right">Submit</button>
                        </div>
                    </form>
                </div>
                <div id="developement-1" class="tab-pane fade">
                    <form class="p-a30 dez-form text-center text-center" method="post" action="<?php echo base_url('new-user');?>">
                        <h3 class="form-title m-t0">Sign Up</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your personal details below: </p>
                        <div class="form-group">
                            <input name="first_name" required="" class="form-control" placeholder="First Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="last_name" required="" class="form-control" placeholder="Last Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="email" required="" class="form-control" placeholder="Email Id" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="contact_number" required="" class="form-control" placeholder="Contact Number" type="text"/>
                        </div>
                        <label class="text-left m-b20">Enter your account details below: </label>
                        <div class="form-group">
                            <input name="address" required="" class="form-control" placeholder="Address" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="city" required="" class="form-control" placeholder="City" type="text"/>
                        </div>
                        <label class="m-b30">
                        <input type="checkbox"/>
                        <label>I agree to the <a href="#">Terms of Service </a>& <a href="#">Privacy Policy </label>
                        </label>
                        <div class="form-group text-left "> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button class="site-button pull-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->

<!-- Footer -->
    <?php
  $this->load->view('layout/footer');
  ?>  

