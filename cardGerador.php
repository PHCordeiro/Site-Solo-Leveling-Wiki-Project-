<?php 
    require "../conection.php";


    $query = "SELECT * FROM `cards` WHERE 1";
    $exec = mysqli_query($con, $query);
    while($row = mysqli_fetch_assoc($exec)){
        echo "
            <div class='stats grid-item'>
                <h3>Nome: ".$row['nome']."</h3>
                <img class='people' src='imagens/".$row['nome'].".".$row['img_formato']."'>
                <p><strong>Estréia: </strong>".$row['estreia']."</p>
                <p><strong>Status:</strong> ".$row['status']."</p>
                <p><strong>Gênero:</strong> ".$row['genero']."</p>
                <p><strong>País: </strong>".$row['pais']."</p>
                <p><strong>Rank: </strong>".$row['rank']."</p>
                <p><strong>Afiliação:</strong> ".$row['afiliacao']."</p>
                <p><strong>Class:</strong> ".$row['class']."</p>
                <p><strong>Ocupação:</strong> ".$row['ocupacao']."</p>
                <p><strong>Skills:</strong> ".$row['skills']."</p>
            </div>
        ";
    }
