
<?php 
$title = "sign in";
require("../../inc/header.php");
session_start();
?>



<div class="user_from_sign_up">
<p class="text-center"><?php if(isset( $_SESSION['user_name'])){echo "Welcom " .  $_SESSION['user_name'];} ?></p>
</div>






<?php require("../../inc/footer.php")?>
