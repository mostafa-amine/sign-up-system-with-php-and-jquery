<?php
$title = "sign up";
require("../../inc/header.php")
?>



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
	<input type="password" id="txt_password" class="form-control" placeholder="enter password" />
	</div>
	</div>
				
	<div class="form-group mt-2">
	<div class="col-sm-offset-3 mt-3">
	<button type="submit" id="btn_register" class="btn btn-success">Register</button>
	</div>
	</div>
				
	<div class="form-group mt-2">
		<div id="message" class="col-sm-offset-3 col-sm-6 m-t-15"></div>
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



<?php
require("../../inc/footer.php")
?>