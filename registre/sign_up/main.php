<?php
$title = "sign up";
require("../../inc/header.php")
?>
<style>
.success_message{
background-color: rgb(0, 220, 0);
border: 1px solid #e6e6e6;
padding: 5px;
text-align: center;
color: white;
}

.error_message{
background-color: #FF0000;
border: 1px solid #e6e6e6;
padding: 5px;
text-align: center;
color: white;
}
</style>


<div class="container success_message col-6 mt-5 d-none">
	
</div>

<div class="container error_message col-6 mt-5 d-none">
	
</div>


<div class="container main_div d-flex justify-content-center">
<!-- main form div start -->
<div class="main_form col-6 mt-5">
<form id="registraion_form" class="form-horizontal">
					
	<div class="form-group">
	<label class="col-sm-3 control-label">Username</label>
	<div class="col-sm-8">
	<input type="text" id="txt_username" class="form-control" placeholder="enter username" />
	</div>
	</div>
				
	<div class="form-group mt-2">
	<label class="col-sm-3 control-label">Email</label>
	<div class="col-sm-8">
	<input type="text" id="txt_email" class="form-control" placeholder="enter email" />
	</div>
	</div>
				
	<div class="form-group mt-2">
	<label class="col-sm-3 control-label">Password</label>
	<div class="col-sm-8">
	<input type="password" id="txt_password" class="form-control" placeholder="enter password" />
	</div>
	</div>

    <div class="form-group mt-2">
	<label class="col-sm-3 control-label">Confirm Password</label>
	<div class="col-sm-8">
	<input type="password" id="txt_password_confirm" class="form-control" placeholder="confirm password" />
	</div>
	</div>
				
	<div class="form-group mt-2">
	<div class="col-sm-offset-3 mt-3">
	<button type="submit" id="btn_register" class="btn btn-success">Register</button>
	</div>
	</div>

</form>
</div>
<!-- main form div end -->

<!-- image display start -->
<div class="image_desc">
<img src="../../images/sign_up.png" class="img-fluid" width="500" alt="">
</div>
<!-- image display end -->

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script>
$("#btn_register").click(function (e) {
    e.preventDefault();

    // get the data
    var txt_username = $("#txt_username").val();
    var txt_email = $("#txt_email").val();
    var txt_password = $("#txt_password").val();
    var txt_password_confirm = $("#txt_password_confirm").val();

	



})
</script>
<?php
require("../../inc/footer.php")
?>