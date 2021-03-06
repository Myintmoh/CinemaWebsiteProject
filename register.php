<?php 
    include('header.php');
    include('admin/connectionmysqli.php');
?>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
  <!-- =============================================== -->
<?php
    include('form.php');
    $frm=new formBuilder;      
?> 
<title>Register Account</title>
<div class="content" style="margin-top: 50px;">>
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				    <div class="panel-heading">Register</div>
				    <div class="panel-body">
				        <form action="registerprocess.php" method="post" id="form1">
				            <div class="form-group has-feedback">
                                <input name="name" type="text" size="25" placeholder="Name" class="form-control"/>
                                <?php $frm->validate("name",array("required","label"=>"Name","regexp"=>"name")); // Validating form using form builder written in form.php ?>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="age" type="text" size="25" placeholder="Age" class="form-control"/>
                                <?php $frm->validate("age",array("required","label"=>"Age","regexp"=>"age")); // Validating form using form builder written in form.php ?>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <select name="gender" class="form-control">
                                    <option value>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                <?php $frm->validate("gender",array("required","label"=>"Gender")); // Validating form using form builder written in form.php ?>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="phone" type="text" size="25" placeholder="Mobile Number" class="form-control"/>
                                <?php $frm->validate("phone",array("required","label"=>"Mobile Number","regexp"=>"mobile")); // Validating form using form builder written in form.php ?>
                                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="email" type="text" size="25" placeholder="Email" class="form-control"/>
                                <?php $frm->validate("email",array("required","label"=>"Email","email")); // Validating form using form builder written in form.php ?>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
                                <?php $frm->validate("password",array("required","label"=>"Password","min"=>"7")); // Validating form using form builder written in form.php ?>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="cpassword" type="password" size="25" placeholder="Confirm Password" class="form-control" placeholder="Password" />
                                <?php $frm->validate("cpassword",array("required","label"=>"Confirm Password","min"=>"7","identical"=>"password Password")); // Validating form using form builder written in form.php ?>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Register</button>
                                <p class="login-box-msg" style="padding-top:20px">Already Have An Account? <a href="login.php">Login</a></p>
                            </div>
                    </div>
                </div>
                        </form>
			</div>
		</div>
		<div class="clear"></div>	
	</div>
</div>
<?php include('footer.php');?>
<script>
    <?php $frm->applyvalidations("form1");?>
</script>