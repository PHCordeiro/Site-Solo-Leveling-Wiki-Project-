<!DOCTYPE html>
<html>
<head>
    <!--/todo id e toda classe pt/br é para eu editar e n faz parte do bootstrap-->
    <meta charset='utf-8'> 
    <title>Solo Leveling Wiki</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='personagens.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="imagens/favicon.png"></link>
    <script src='main.js'></script>
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-inverse navbar-expand-lg navbar-transparent">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <span class="img-logo"></span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra-navegacao"></button>
                </div>
                <div class="collapse navbar-collapse" id="menu-navegacao">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Página Inicial</a>
                        </li>
                        <li class="divisor" role="separator"></li>

                        <li class="nav-item">
                            <a class="nav-link" href="personagens.php">Personagens</a>
                        </li>
                        <li class="divisor" role="separator"></li>

                        <li class="nav-item">
                            <a class="nav-link" href="eu.html">Sobre mim</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="card.php">Card</a>
                        </li>
                        
                        <li class="divisor" role="separator"></li>
                    </ul>
                </div>
            </div><!--/essa div é a container-->
        </nav>
    </header>
        <center>
        <h1 class= "bg-secondary" id="persona">Solo Leveling | Personagens</h1>
        </center>
        <br>
        <div id="descricao" class="container">
            <center><a href="" role="button" class="btn btn-outline-danger">
                <span class="fa fa-bullseye"></span>
                ENTRE
            </a></center>
            <p>Solo Leveling possui muitos personagens simpáticos e muitos personagens otários, porém mesmo com isso cada um deles é um personagem muito incrível e que merece pelo menos o seu nome revelado, espero que essa wiki ajude vocês. Arigatou pela visita!!!</p>
        </div>
        <br> <!-- Pular uma quantidade de pixels --> 
        <br> <!-- Pular uma quantidade de pixels --> 
        <center>
        <div id="grid">
            <?php include "cardGerador.php" ?>

                <div class="stats">
                    <h3>Nome: </h3>
                    <img class="people" src="imagens/.png">
                    <p><strong>Estréia:</strong></p>
                    <p><strong>Status:</strong></p>
                    <p><strong>Gênero:</strong></p>
                    <p><strong>País: </strong></p>
                    <p><strong>Rank: </strong></p>
                    <p><strong>Afiliação:</strong></p>
                    <p><strong>Class:</strong></p>
                    <p><strong>Ocupação:</strong></p>
                    <p><strong>Skills:</strong></p>
                </div>

        </div>
        </center>
        <br> <!-- Pular uma quantidade de pixels --> 

    <script src="bootstrap/js/bootstrap.min.js"></script>
        <section id="explicacao">
            <div class="container"> 
                <div class="row">
                    <!--Explicação-->
                    <div class="col-md-4">
                        <h2 id="frase">Sobre</h2>
                        <h3>Informações</h3>
                        <p>Solo Leveling, conhecido como I Level Up Alone em inglês, é uma novel escrito por Chu-Gong em 14 de fevereiro de 2014. Foi então serializado como uma novel em Papyrus, que terminou com 14 volumes e 270 capítulos. Em 13 de abril de 2018, uma série de webtoon foi lançada no site móvel coreano KAKAO PAGE, desenhada pelos artistas Gi So-Ryeong e Jang Sung-Rak. Em 30 de março de 2019, a novel tem 14 volumes e 270 capítulos enquanto o webtoon ainda está em exibição, indo.</p>
                    </div>
                    <!--img explicação-->
                    <div class="col-md-8">
                        <div class="row rotacionar"> 
                            <div class="col-md-6"> 
                                <br>
                                <br>
                                <img src="imagens/img6.png" width="100%">
                            </div>
                        </div>
                    </div>
                </div><!--row-->
            </div><!--container-->
        </section>
    </main>
    <!--Rodapé-->
    <footer id "rodape">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <span class="img-logo"></span>
                </div>
                <div class="col-md-2">
                    <h4>Animes</h4>
                    <h6>Recomendados pelo ADM</h6>
                    <ul class="nav navbar-nav"> 
                        <li><a href="https://myanimelist.net/anime/17265/Log_Horizon?q=Log%20Hori">Log Horizon</a></li>
                        <li><a href="https://myanimelist.net/anime/10087/Fate_Zero?q=Fate%20zero">Fate Zero</a></li>
                        <li><a href="https://myanimelist.net/anime/21/One_Piece">One Piece</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>Mangás</h4>
                    <h6>Recomendados pelo ADM</h6>
                    <ul class="nav navbar-nav"> 
                        <li><a href="">SURPRESA</a></li>
                        <li><a href="https://myanimelist.net/manga/96792/Kimetsu_no_Yaiba?q=kimetsu%20no%20">Kimetsu no Yaiba</a></li>
                        <li><a href="https://mangalivre.net/manga/second-life-ranker/184715/capitulo-1#/!page0">Second Life Ranker</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>Ler Solo Leveling</h4>
                    <h6>todas as quartas</h6>
                    <ul class="nav navbar-nav"> 
                        <li><a href="https://neoxscan.com/newsite/manga/solo-leveling-brpt/">Solo Leveling mangá</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4></h4>
                    <ul class="nav"> 
                        <li><a href=""><img class= "igris" src="imagens/img8.png" alt=""></a></li>
                    </ul>
                </div>
            </div><!--row-->
        </div><!--container-->
    </footer>
</body>
</html>