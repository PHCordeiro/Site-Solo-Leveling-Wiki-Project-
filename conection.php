<?php
    $con = mysqli_connect("localhost","root","","SoloLeveling");
    if(mysqli_connect_errno()){
        header("Location: ../error.php");
        exit;
    }

    ?>