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
border-radius: 20px;
}

.error_message{
background-color: #FF0000;
border: 1px solid #e6e6e6;
padding: 5px;
text-align: center;
color: white;
border-radius: 20px;
}

body{
background-color: #FBC588;
}

.registration-form{
padding: 50px 0;
}

.registration-form form{
background-color: #fff;
max-width: 600px;
margin: auto;
padding: 50px 70px;
border-radius: 30px;
box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .form-icon{
text-align: center;
background-color: #F99F38;
border-radius: 50%;
font-size: 60px;
color: white;
width: 100px;
height: 100px;
margin: auto;
margin-bottom: 50px;
line-height: 80px;
}

.registration-form .item{
border-radius: 20px;
margin-bottom: 25px;
padding: 10px 20px;
}

.registration-form .create-account{
border-radius: 30px;
padding: 10px 20px;
font-size: 18px;
font-weight: bold;
background-color: #F99F38;
border: none;
color: white;
margin-top: 20px;
}

.registration-form .social-media{
max-width: 600px;
background-color: #F99F38;
margin: auto;
padding: 35px 0;
text-align: center;
border-bottom-left-radius: 30px;
border-bottom-right-radius: 30px;
color: #9fadca;
border-top: 1px solid #dee9ff;
box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .social-icons{
margin-top: 30px;
margin-bottom: 16px;
}

    

@media (max-width: 576px) {
.registration-form form{
padding: 50px 20px;
}

.registration-form .form-icon{
width: 70px;
height: 70px;
font-size: 30px;
line-height: 70px;
}
}

</style>


<div id="success_message" class="container success_message col-4 mt-5 d-none">
	
</div>

<div id="error_message" class="container error_message col-4 mt-5 d-none">
	
</div>


<div class="last_display">
	
</div>


<div class="registration-form">
    <form id="registraion_form" class="form-horizontal">
        <div class="form-icon">
            <span><i class="bi bi-person-plus"></i></span>
        </div>
        <div class="form-group">
            <input type="text" id="txt_username"  class="form-control item" id="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="email" id="txt_email" class="form-control item" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" id="txt_password" class="form-control item" id="email" placeholder="password">
        </div>
        <div class="form-group">
            <input type="password" id="txt_password_confirm" class="form-control item" id="phone-number" placeholder="Confirm password">
        </div>
       
        <div class="form-group">
            <button type="submit" id="btn_register" class="btn btn-block create-account">Create Account</button>
        </div>
    </form>
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