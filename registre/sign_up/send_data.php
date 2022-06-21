<?php
require("../../config/config.php");
	
if(isset($_POST['txt_password'])){
	$name =htmlspecialchars($_POST['txt_username']);
	$email =htmlspecialchars($_POST['txt_email']);
	$password =htmlspecialchars($_POST['txt_password']);

	$sql = "SELECT name FROM sign_up where name = ?";
	$statement = $pdo->prepare($sql);
	$statement->execute([$name]);
	$statement_fetch = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	if(count($statement_fetch)>=1){
		echo '
		<div id="error_message" class="container error_message col-6 mt-5 ">
			The account already exists just login
		</div>';
	}
	else{
		$sql_add = "INSERT INTO sign_up(name, email, password) 
		VALUES(:name,:email,:password)";
		$statement_add = $pdo->prepare($sql_add);
		$statement_add->execute([':name'=>$name,':email'=>$email,':password'=>$password]);
		
		echo '
		<div id="success_message" class="container success_message col-6 mt-5">
			The account created succefully
			you will be redirected to login page in 5 sec
		</div>
		<script>
		setTimeout(function(){
			window.location.href = "../sign_in/main.html"; 
	   	}, 5000);
		</script>
		';

	}

}
?>