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

.form-horizontal textarea:focus, 
textarea.form-control:focus, 
input.form-control:focus, 
input[type=text]:focus, 
input[type=password]:focus, 
input[type=email]:focus, 
input[type=number]:focus, 
[type=text].form-control:focus, 
[type=password].form-control:focus, 
[type=email].form-control:focus, 
[type=tel].form-control:focus, 
[contenteditable].form-control:focus {
  box-shadow: inset 0 -1px 0 #ddd;
}
.form-horizontal input{
	border-radius: 0px;
}

</style>


<div id="success_message" class="container success_message col-6 mt-5 d-none">
	
</div>

<div id="error_message" class="container error_message col-6 mt-5 d-none">
	
</div>


<div class="last_display">
	
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
	<button type="submit" id="btn_register" class="btn btn-success">sign up</button>
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

	var atpos  = txt_email.indexOf('@');
	var dotpos = txt_email.lastIndexOf('.com');

	if(txt_username == ''){ // check username not empty
		$("#error_message").removeClass("d-none").html("please enter username !!")
	}
	else if(!/^[a-z A-Z]+$/.test(txt_username)){ // check username allowed capital and small letters 
		$(".error_message").html("username only capital and small letters are allowed !!")

	}
	else if(txt_email == ''){ //check email not empty
		$(".error_message").removeClass("d-none").html("please enter email address !!")

	}
	else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= txt_email.length){ //check valid email format
		$(".error_message").removeClass("d-none").html("please enter valid email address !!")

	}
	else if(txt_password == ''){ //check password not empty
		$(".error_message").removeClass("d-none").html("please enter password !!")

	}
	else if(txt_password.length <= 6){ //check password value length six 
		$(".error_message").removeClass("d-none").html("password must contain at least 6 caracters !!")

	} 
	else if(txt_password_confirm !== txt_password){

		$(".error_message").removeClass("d-none").html("The password must be identical")
	}
	else{
		$(".error_message").addClass("d-none");

		$.post("send_data.php" ,{txt_username:txt_username , txt_password:txt_password , txt_email:txt_email} , function (data) {
			$(".last_display").html(data)
		})
		// $("#registraion_form").trigger("reset");
	}





})
</script>
<?php
require("../../inc/footer.php")
?>