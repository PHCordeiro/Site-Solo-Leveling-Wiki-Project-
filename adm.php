
<?php
    require "conection.php";
    
    $password = "phfd12";
    $username = "RaioHplay";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $insertQuery = "INSERT INTO userlogin(_username, _password) VALUES('$username', '$hash');";
    $insert = mysqli_query($con, $insertQuery) or die("2: falha insert");

    if($insert) {
        echo "usuario cadastrado com sucesso";
    } 
    else {
        echo "falha";
    }
?>