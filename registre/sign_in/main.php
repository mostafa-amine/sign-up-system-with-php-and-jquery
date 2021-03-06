
<?php 
$title = "sign in";
require("../../inc/header.php");
session_start();
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
.registration-form .sign_up_p{
    text-align: center;
}
.registration-form .sign_up_href{
    color: #F99F38;
    text-decoration: none;
}
.registration-form .sign_up_href:hover{
    color: #FBC588;
    text-decoration: dashed;
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

<div class="user_from_sign_up mt-4">
<h1 class="text-center text-white">
<?php
if(isset($_SESSION['user_name']))
{
    echo "Welcom " .  $_SESSION['user_name'];

    echo "
    <script>
    console.log('yes')
        $('.sign_up').addClass('d-none');
    </script>";
} 
else 
{
    echo "
    <script>
    
    </script>";
}



?>
</h1>
</div>


<div id="success_message" class="container success_message col-4 mt-5 d-none">
	
</div>

<div id="error_message" class="container error_message col-4 mt-5 d-none">
	
</div>

<div class="display_div">

</div>


<div class="registration-form">
        <form>
            <div class="form-icon">
                <span><i class="bi bi-person-check"></i></span>
            </div>
            <div class="form-group">
                <input type="email" class="form-control item" id="email" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Password">
            </div>

            <div class="form-group">
                <button id="submit" type="button" class="btn btn-block create-account">Sign in</button>
            </div>

            <div class="sign_up mt-3">
                <p class="sign_up_p"><a class="sign_up_href" href="../sign_up/main.php">Or sign up   <i class="bi bi-arrow-right"></i></a></p>
            </div>
        </form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>

$("#submit").click(function () {
    // get the user values
    var email = $("#email").val();
    var password = $("#password").val();

    var atpos  = email.indexOf('@');
	var dotpos = email.lastIndexOf('.com');

    // check inputs field 
    if(email == ''){ //check email not empty
		$(".error_message").removeClass("d-none").html("please enter email address !!")

	}
	else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){ //check valid email format
		$(".error_message").removeClass("d-none").html("please enter valid email address !!")

	}
    else if(password == ''){ //check password not empty
		$(".error_message").removeClass("d-none").html("please enter password !!")

	}
	else if(password.length <= 6){ //check password value length six 
		$(".error_message").removeClass("d-none").html("password must contain at least 6 caracters !!")

	} 
    else{
        $(".error_message").addClass("d-none")
        // send data
        $.post("check_data.php" , {email:email , password:password} , function(data) {
            $(".display_div").html(data)
        })
}
    

})

</script>


<?php
if(isset($_SESSION['user_name']))
{

    echo "
    <script>
    $(document).ready(function(){
        $('.sign_up').addClass('d-none');
    })
    </script>";
} 
else 
{
    echo "
    <script>
    $(document).ready(function(){
        $('.sign_up').removeClass('d-none');  
    })
    </script>";
}

?>


<?php require("../../inc/footer.php")?>
