<?php
     if (!isset($_SESSION)) session_start();
      if (!isset($_SESSION['UsuarioID'])) {
          session_destroy();
          header("Location: login.php"); exit;
      }

?>

<html>
	<head>
        <meta charset='utf-8'> 
        <title>Solo Leveling Wiki</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='eu.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="icon" href="imagens/favicon.png"></link>
        <script src='main.js'></script>
        <script src="jquery-3.4.1.min.js"></script>
	</head>
	
	<body>
		<center>
            <h1 class= "bg-secondary">Arigatou pela visita!!!</h1>
			 
			<form action="createCard.php" method="post" class="flex-vertical">
				<input placeholder="Digite o nome" name = 'nome'> 
				<input placeholder="Digite a estreia" name = 'estreia'> 
				<input placeholder="Digite o status"  name ='status'> 
				<input placeholder="Digite o genero" name = 'genero'> 
				<input placeholder="Digite o pais" name = 'pais'> 
				<input placeholder="Digite o rank" name = 'rank'> 
				<input placeholder="Digite o afiliação" name = 'afiliacao'> 
				<input placeholder="Digite a classe" name = 'class'> 
				<input placeholder="Digite a ocupação " name = 'ocupacao'> 
				<input placeholder="Digite as skills " name = 'skills'> 
				<select name="extensao" >
					  <option value="png">.png</option>
					  <option value="jpg">.jpg</option>
					  <option value="jpeg">.jpeg</option>
				</select>

				<input type="submit"> 
				
			</form>

			<nav class="navbar navbar-dark bg-dark">
				<a href="index.html">Página inicial</a>
				<a href="personagens.php">Personagens</a>
				<a href="eu.html">Sobre mim</a>
			</nav>
			
		</center>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>