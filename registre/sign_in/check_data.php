<?php
require("../../config/config.php");

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT email from sign_up where email = ?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$email]);

    $statement_fetch = $statement->fetchAll(PDO::FETCH_ASSOC);

    if(count($statement_fetch) == 0){

        echo '
        <div id="error_message" class="container error_message col-4 mt-5">
            There is no account with this email
        </div>
        ';
    }
    else if(count($statement_fetch) > 0){
        $sql_pass = "SELECT email from sign_up where email = ? and password = ?";
        $statement_pass = $pdo->prepare($sql_pass);
        $statement_pass->execute([$email , $password]);

        $statement_fetch_pass = $statement_pass->fetchAll(PDO::FETCH_ASSOC);

        if(count($statement_fetch_pass) == 0){
            echo '<div id="error_message" class="container error_message col-4 mt-5">
                Password incorect
            </div>';
        }
        else {
            echo "<script>
            window.location.href = '../sign_up/main.php';
            </script>";
        }
    }
}




?>