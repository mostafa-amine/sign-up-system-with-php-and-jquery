<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
	
<script>
	
	$(document).on('click','#btn_register',function(e){
		
		e.preventDefault();
			
		var username = $('#txt_username').val();
		var email 	 = $('#txt_email').val();
		var password = $('#txt_password').val();
			
		var atpos  = email.indexOf('@');
		var dotpos = email.lastIndexOf('.com');
			
		if(username == ''){ // check username not empty
			alert('please enter username !!'); 
		}
		else if(!/^[a-z A-Z]+$/.test(username)){ // check username allowed capital and small letters 
			alert('username only capital and small letters are allowed !!'); 
		}
		else if(email == ''){ //check email not empty
			alert('please enter email address !!'); 
		}
		else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){ //check valid email format
			alert('please enter valid email address !!'); 
		}
		else if(password == ''){ //check password not empty
			alert('please enter password !!'); 
		}
		else if(password.length < 6){ //check password value length six 
			alert('password must be 6 !!');
		} 
		else{			
			$.ajax({
				url: 'process.php',
				type: 'post',
				data: 
					{newusername:username, 
					 newemail:email, 
					 newpassword:password
					},
				success: function(response){
					$('#message').html(response);
				}
			});
				
			$('#registraion_form')[0].reset();
		}
	});

</script>