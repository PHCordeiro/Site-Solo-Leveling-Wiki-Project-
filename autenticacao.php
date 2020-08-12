<?php

    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        header("Location: error.php"); exit;
    }
    if (!empty($_POST) AND (empty($_POST['username']) OR empty($_POST['password']))) {
        header("Location: login.php"); exit;
    }

    require 'conection.php';

    $username =  $_POST['username'];
    $password =  $_POST['password'];

    $idCheckQuery = "SELECT idUser, _username, _password FROM userlogin WHERE _username = '$username';";
    $idCheck = mysqli_query($con, $idCheckQuery) or die("2: Id check query failed"); //error code /2 = id check query failed

    if(mysqli_num_rows($idCheck) != 1){
        //return redirect("error.php"); // Usuário não encontrado
        echo"user ruim";
        exit();
    }else{
        $row = mysqli_fetch_assoc($idCheck);
        $hash = $row['_password'];
        if(!password_verify($password, $hash)){
            //return redirect("error.php"); // Senha incorreta
            echo"senha ruim";
            exit;
        }else{
            if (!isset($_SESSION)) session_start();
            $_SESSION['UsuarioID'] = $row['idUser'];
            $_SESSION['UsuarioNome'] = $row['_username'];
            return redirect("card.php");//Falha na permissão de acesso
        }
    }

    function redirect($url) {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }