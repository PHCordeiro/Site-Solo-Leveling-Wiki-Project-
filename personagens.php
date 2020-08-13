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
                    <h3>Nome: Adam White</h3>
                    <img class="people" src="imagens/Adam White.png">
                    <p><strong>Estréia:</strong> Cap 108</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Estados Unidos</p>
                    <p><strong>Rank: </strong> Nenhum</p>
                    <p><strong>Afiliação:</strong> Federal Bureau of Hunters</p>
                    <p><strong>Class:</strong> Nenhuma</p>
                    <p><strong>Ocupação:</strong> Funcionários</p>
                    <p><strong>Skills:</strong> Nenhuma</p>
                </div>

                <div  class="stats cara0">
                    <h3>Nome: Akari Shimizu</h3>
                    <img class="people" src="imagens/Akari Shimizu.png">
                    <p><strong>Estréia:</strong> Cap 90</p>
                    <p><strong>Status:</strong> Falecido</p>
                    <p><strong>Gênero:</strong> Feminino</p>
                    <p><strong>País: </strong> Japão</p>
                    <p><strong>Rank: </strong> S-Rank</p>
                    <p><strong>Afiliação:</strong> Draw Sword Guild</p>
                    <p><strong>Class:</strong> Curandeira</p>
                    <p><strong>Ocupação:</strong> Caçadora</p>
                    <p><strong>Skills:</strong> Curar</p>
                </div>
                
                <div class="stats">
                    <h3>Nome: An Sang Min</h3>
                    <img class="people" src="imagens/An Sang Min.png">
                    <p><strong>Estréia:</strong> Cap 38</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do sul</p>
                    <p><strong>Rank: </strong> Nenhum</p>
                    <p><strong>Afiliação:</strong> White Tiger Guild</p>
                    <p><strong>Class:</strong> Nenhuma</p>
                    <p><strong>Ocupação:</strong> Chefe do 2 departamento</p>
                    <p><strong>Skills:</strong> Nenhuma</p>
                </div>
                
                <div class="stats">
                    <h3>Nome: Atsushi Kumamoto</h3>
                    <img class="people" src="imagens/Atsushi Kumamoto.png">
                    <p><strong>Estréia:</strong> Cap 90</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Japão</p>
                    <p><strong>Rank: </strong> S-Rank</p>
                    <p><strong>Afiliação:</strong> Draw Sword Guild</p>
                    <p><strong>Class:</strong> Lutador</p>
                    <p><strong>Ocupação:</strong> Caçador</p>
                    <p><strong>Skills:</strong> Dupla personalidade</p>
                </div>

                <div class="stats">
                    <h3>Nome: Bae Yoon-Suk</h3>
                    <img class="people" src="imagens/Bae Yoon-Suk.png">
                    <p><strong>Estréia:</strong> Cap 66</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> Desconhecido</p>
                    <p><strong>Afiliação:</strong> Hunters</p>
                    <p><strong>Class:</strong> Desconhecido</p>
                    <p><strong>Ocupação:</strong> Caçador/Minerador</p>
                    <p><strong>Skills:</strong> Desconhecido</p>
                </div>

                <div class="stats">
                    <h3>Nome: Baek Yoon-Ho</h3>
                    <img class="people" src="imagens/Baek Yoon-Ho.png">
                    <p><strong>Estréia:</strong> Cap 47</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> S-Rank</p>
                    <p><strong>Afiliação:</strong> White Tiger</p>
                    <p><strong>Class:</strong> Lutador</p>
                    <p><strong>Ocupação:</strong> Caçador/Guild Master</p>
                    <p><strong>Skills:</strong> -Olhos de besta -Transformação total -Transformação de cabeça parcial</p>
                </div>

                <div class="stats">
                    <h3>Nome: Cha Hae In </h3>
                    <img class="people" src="imagens/Cha Hae In.png">
                    <p><strong>Estréia:</strong> Cap 65</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Feminino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> S-rank</p>
                    <p><strong>Afiliação:</strong> Hunters Guild</p>
                    <p><strong>Class:</strong> Lutador de espada</p>
                    <p><strong>Ocupação:</strong> Caçador</p>
                    <p><strong>Skills:</strong> -Sword Dance -Blade of Light -Tremor of Provocation</p>
                </div>

                <div class="stats">
                    <h3>Nome: Cho Gyu-Hwan</h3>
                    <img class="people" src="imagens/Cho Gyu-Hwan.png">
                    <p><strong>Estréia:</strong> Cap 18</p>
                    <p><strong>Status:</strong> Falecido</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> C-Rank</p>
                    <p><strong>Afiliação:</strong> Lizards</p>
                    <p><strong>Class:</strong> Mago</p>
                    <p><strong>Ocupação:</strong> Caçador</p>
                    <p><strong>Skills:</strong> -Fire Ball -Light</p>
                </div>

                <div class="stats">
                    <h3>Nome: Choi Jong In</h3>
                    <img class="people" src="imagens/Choi Jong In.png">
                    <p><strong>Estréia:</strong> Cap 62</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> S-Rank</p>
                    <p><strong>Afiliação:</strong> Hunters Guild</p>
                    <p><strong>Class:</strong> Mago</p>
                    <p><strong>Ocupação:</strong> Caçador/Guild Master</p>
                    <p><strong>Skills:</strong> -Flame Spear -Flame Barrier -Flame Dragon</p>
                </div>

                <div class="stats">
                    <h3>Nome: Choi Yoo-Ra</h3>
                    <img class="people" src="imagens/Choi Yoo-Ra.png">
                    <p><strong>Estréia:</strong> Cap 10</p>
                    <p><strong>Status:</strong> Viva</p>
                    <p><strong>Gênero:</strong> Feminino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> Nenhum</p>
                    <p><strong>Afiliação:</strong> Hospital</p>
                    <p><strong>Class:</strong> Nenhuma</p>
                    <p><strong>Ocupação:</strong> Enfermeira</p>
                    <p><strong>Skills:</strong> Nenhuma</p>
                </div>

                <div class="stats">
                    <h3>Nome: David Brennon</h3>
                    <img class="people" src="imagens/David Brennon.png">
                    <p><strong>Estréia:</strong> Cap 105</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Homem</p>
                    <p><strong>País: </strong> USA</p>
                    <p><strong>Rank: </strong> Nenhum</p>
                    <p><strong>Afiliação:</strong> Federal Bureau of Hunters</p>
                    <p><strong>Class:</strong> Nenhuma</p>
                    <p><strong>Ocupação:</strong> Diretor</p>
                    <p><strong>Skills:</strong> Nenhuma</p>
                </div>

                <div class="stats">
                    <h3>Nome: Esil Radiru</h3>
                    <img class="people" src="imagens/Esil Radiru.png">
                    <p><strong>Estréia:</strong> Cap 81</p>
                    <p><strong>Status:</strong> Viva</p>
                    <p><strong>Gênero:</strong> Mulher(a melhor garota)</p>
                    <p><strong>País: </strong> Castelo demoníaco</p>
                    <p><strong>Rank: </strong> S-Rank</p>
                    <p><strong>Afiliação:</strong> Radiru Clan</p>
                    <p><strong>Class:</strong> Nenhum</p>
                    <p><strong>Ocupação:</strong> Mostro</p>
                    <p><strong>Skills:</strong> -Lança</p>
                </div>

                <div class="stats">
                    <h3>Nome: Go Gun-Hee</h3>
                    <img class="people" src="imagens/Go Gun-Hee.png">
                    <p><strong>Estréia:</strong> Cap 63</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> S-Rank</p>
                    <p><strong>Afiliação:</strong> Korean Hunters Association</p>
                    <p><strong>Class:</strong> Não identificado</p>
                    <p><strong>Ocupação:</strong> Diretor da associação de caçadores</p>
                    <p><strong>Skills:</strong> Não identificado</p>
                </div>

                <div class="stats">
                    <h3>Nome: Go Myung-Hwan</h3>
                    <img class="people" src="imagens/Go Myung-Hwan.png">
                    <p><strong>Estréia:</strong> Cap 46</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> C-Rank</p>
                    <p><strong>Afiliação:</strong> White Tiger Guild</p>
                    <p><strong>Class:</strong> Martial Artist</p>
                    <p><strong>Ocupação:</strong> Caçador</p>
                    <p><strong>Skills:</strong> Não identificado</p>
                </div>

                <div class="stats">
                    <h3>Nome: Goto Ryuji</h3>
                    <img class="people" src="imagens/Goto Ryuji.png">
                    <p><strong>Estréia:</strong> Cap 86</p>
                    <p><strong>Status:</strong> Morto</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Japão(o melhor de seu país)</p>
                    <p><strong>Rank: </strong> S-Rank</p>
                    <p><strong>Afiliação:</strong> Draw Sword Guild</p>
                    <p><strong>Class:</strong> Fighter</p>
                    <p><strong>Ocupação:</strong> Caçador</p>
                    <p><strong>Skills:</strong> -Keen Sense</p>
                </div>

                <div class="stats">
                    <h3>Nome: Han_Song-I</h3>
                    <img class="people" src="imagens/Han_Song-I.png">
                    <p><strong>Estréia:</strong> Cap 11</p>
                    <p><strong>Status:</strong> Viva</p>
                    <p><strong>Gênero:</strong> Feminino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> E-Rank</p>
                    <p><strong>Afiliação:</strong> Nenhuma</p>
                    <p><strong>Class:</strong> Não identificado</p>
                    <p><strong>Ocupação:</strong> Caçador</p>
                    <p><strong>Skills:</strong> Não identificado</p>
                </div>

                <div class="stats">
                    <h3>Nome: Hwang Dong-Su</h3>
                    <img class="people" src="imagens/Hwang Dong-Su.jpg">
                    <p><strong>Estréia:</strong> Cap 24</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul(antiga),EUA(atual)</p>
                    <p><strong>Rank: </strong> S-Rank</p>
                    <p><strong>Afiliação:</strong> Scavenger Guild</p>
                    <p><strong>Class:</strong> Fighter</p>
                    <p><strong>Ocupação:</strong> Caçador</p>
                    <p><strong>Skills:</strong> Desconhecido</p>
                </div>

                <div class="stats">
                    <h3>Nome: Hwang Dong-Suk</h3>
                    <img class="people" src="imagens/Hwang Dong-Suk.png">
                    <p><strong>Estréia:</strong> Cap 18</p>
                    <p><strong>Status:</strong> Morto</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> C-Rank</p>
                    <p><strong>Afiliação:</strong> Lizards</p>
                    <p><strong>Class:</strong> Swordsman</p>
                    <p><strong>Ocupação:</strong> Caçador</p>
                    <p><strong>Skills:</strong> Não identificado</p>
                </div>

                <div class="stats">
                    <h3>Nome: Hyun-Gee-Chul</h3>
                    <img class="people" src="imagens/Hyun-Gee-Chul.png">
                    <p><strong>Estréia:</strong> Cap 10</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> Nenhum</p>
                    <p><strong>Afiliação:</strong> Associação de caçadores</p>
                    <p><strong>Class:</strong> Nenhuma</p>
                    <p><strong>Ocupação:</strong> Assistant Manager</p>
                    <p><strong>Skills:</strong> Nenhuma</p>
                </div>

                <div class="stats">
                    <h3>Nome: Joo-Sung-Chan</h3>
                    <img class="people" src="imagens/Joo-Sung-Chan.png">
                    <p><strong>Estréia:</strong> Cap 49</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> Nenhum</p>
                    <p><strong>Afiliação:</strong> White Tiger Guild</p>
                    <p><strong>Class:</strong> Nenhum</p>
                    <p><strong>Ocupação:</strong> Chefe do primeiro departamento</p>
                    <p><strong>Skills:</strong> Nenhum</p>
                </div>

                <div class="stats">
                    <h3>Nome: Jung Gi-Soo</h3>
                    <img class="people" src="imagens/Jung Gi-Soo.png">
                    <p><strong>Estréia:</strong> Cap 62</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> Nenhum</p>
                    <p><strong>Afiliação:</strong> Associação de caçadores</p>
                    <p><strong>Class:</strong> Nenhuma</p>
                    <p><strong>Ocupação:</strong> Gerente Adjunto</p>
                    <p><strong>Skills:</strong> Nenhuma</p>
                </div>

                <div class="stats">
                    <h3>Nome: Jung-Yoon-Tae</h3>
                    <img class="people" src="imagens/Jung-Yoon-Tae.png">
                    <p><strong>Estréia:</strong> Cap 91</p>
                    <p><strong>Status:</strong> Vivo</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> A-Rank</p>
                    <p><strong>Afiliação:</strong> Knights Guild</p>
                    <p><strong>Class:</strong> Desconhecido</p>
                    <p><strong>Ocupação:</strong> Caçador</p>
                    <p><strong>Skills:</strong> Desconhecidas</p>
                </div>

                <div class="stats">
                    <h3>Nome: Kang Tae-Shik</h3>
                    <img class="people" src="imagens/Kang Tae-Shik.png">
                    <p><strong>Estréia:</strong> Cap 27</p>
                    <p><strong>Status:</strong> Morto</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> B-Rank</p>
                    <p><strong>Afiliação:</strong> Associação de caçadores coreanos</p>
                    <p><strong>Class:</strong> Assassin</p>
                    <p><strong>Ocupação:</strong> Inspetor</p>
                    <p><strong>Skills:</strong> -Stealth</p>
                </div>

                <div class="stats">
                    <h3>Nome: Kim Chul</h3>
                    <img class="people" src="imagens/Kim Chul.webp">
                    <p><strong>Estréia:</strong> Cap 43</p>
                    <p><strong>Status:</strong> Morto(Atualmente é o Iron, melhor personagem)</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> A-Rank</p>
                    <p><strong>Afiliação:</strong> White Tiger Guild</p>
                    <p><strong>Class:</strong> Tank</p>
                    <p><strong>Ocupação:</strong> Caçador</p>
                    <p><strong>Skills:</strong>  -Taunt</p>
                </div>

                <div class="stats">
                    <h3>Nome: Kim Sang-Shik</h3>
                    <img class="people" src="imagens/Kim Sang-Shik.jpg">
                    <p><strong>Estréia:</strong> Cap 1</p>
                    <p><strong>Status:</strong> Morto</p>
                    <p><strong>Gênero:</strong> Masculino</p>
                    <p><strong>País: </strong> Coreia do Sul</p>
                    <p><strong>Rank: </strong> D-Rank</p>
                    <p><strong>Afiliação:</strong> Associação de caçadores</p>
                    <p><strong>Class:</strong> Swordsman</p>
                    <p><strong>Ocupação:</strong> Caçador</p>
                    <p><strong>Skills:</strong> Não identificada</p>
                </div>

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