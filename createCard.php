<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        header("Location: ../error.php"); exit;
    }
    
    if(!empty($_POST) AND (empty($_POST['nome']) OR empty($_POST['estreia']) OR empty($_POST['status']) OR empty($_POST['genero']) OR empty($_POST['pais']) OR empty($_POST['rank']) OR empty($_POST['afiliacao']) OR empty($_POST['class']) OR empty($_POST['ocupacao']) OR empty($_POST['skills']) )){
        header("Location: ../error.php"); exit;
    } 

    include 'conection.php'; //conecta com o banco de dados

    $nome = ($_POST['nome']);
    $estreia = ($_POST['estreia']);
    $status = ($_POST['status']);
    $genero = ($_POST['genero']);
    $pais = ($_POST['pais']);
    $rank = ($_POST['rank']);
    $afiliacao = ($_POST['afiliacao']);
    $class = ($_POST['class']);
    $ocupacao = ($_POST['ocupacao']);
    $skills = ($_POST['skills']);
    
    
    $insertQuery = "INSERT INTO `cards`(`nome`, `estreia`, `status`, `genero`, `pais`, `rank`, `afiliacao`, `class`, `ocupacao`, `skills`) VALUES ('$nome','$estreia','$status','$genero','$pais','$rank','$afiliacao','$class','$ocupacao','$skills');";
    $insert = mysqli_query($con, $insertQuery) or die("2: falha insert");

    if($insert){
        echo "usuario cadastrado com sucesso";
    }
    else{
        echo "falha";
    }



    ?>