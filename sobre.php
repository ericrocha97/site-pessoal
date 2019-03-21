<?php
session_start();
 
require 'init.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#212529">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Sobre - Eric Rocha</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="fav\apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="fav\apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="fav\apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="fav\apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="fav\apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="fav\apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="fav\apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="fav\apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="fav\apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="fav\android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="fav\favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav\favicon-16x16.png">
    <link rel="manifest" href="fav\manifest.json">
    <meta name="msapplication-TileColor" content="#212529">
    <meta name="msapplication-TileImage" content="fav\ms-icon-144x144.png">
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                  <a class="navbar-brand" href="index.php">Eric Rocha</a>
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Sobre <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                  </ul>                 
                  <?php if (isLoggedIn()): ?>
                      <form class="form-inline my-2 my-lg-0">  
                      <a href="panel.php" class="btn btn-success my-2 my-sm-0 mr-2">Painel</a>   

                      <a class="btn btn-danger my-2 my-sm-0" href="logout.php">Sair</a>
                    </form>
                  <?php else: ?>
                      <form class="form-inline my-2 my-lg-0">        
                      <a class="btn btn-success my-2 my-sm-0" href="form-login.php">Login</a>
                    </form>
                  <?php endif; ?>
                </div>
        </nav>
        <div class="container">
                <!--Titulo-->
                <div class="row">
                  <div class="col-sm-12 mt-5">
                    <h1 class="text-center text-uppercase">Sobre mim</h1>
                  </div>
                </div>
                <!--Titulo-->
                <!--Cartao-->
                <div class="row">
                  <div class="col-sm-12">
                    <div>
                      <div class="shadow p-3 mb-5 mt-5 bg-dark rounded row h-100">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 w-100 text-light">
                            <div class="sobre">
                                <p>Estudade do Centro Universitário de Cascavel - Univel desde 2017 no curso de graduação em Tecnologia em Análise e Desenvolvimento de Sistemas e atualmente atua como Técnico em ferramentas Cloud na Espyl Sistemas uma revenda autorizada Betha. </p>
                                <p>Apesar de trabalhar na área de atendimento a cliente no suporte a sistemas de gestão, tem um grande interesse em desenvolvimento web, com o conhecimento adquirio por interesse próprio em HTML, CSS, Javascript e C# vem exercitando para poder em um futuro trabalhar somente com isso.</p>
                                <h4>Trabalhos</h4>
                                <p>Trabalhou como Suporte Tecnico e Implatador na RMS sistemas & automação durante 1 ano, adquirindo conhecimento em atendimento ao cliente, treinamento ao cliente, manutenção de banco de dados e integração web via api.</p>
                                <p>Trabalhou também em um curto periodo com Suporte Tecnico na Icondev - Desenvolvimento de Sistemas atuando diretamente em suporte ao cliente atraves de e-mails, chats e telefone.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!--Cartao-->
              </div>
              <footer class="row mw-100">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                      <p>Desenvolvido por Eric Rocha © 2019 </p>
                    </div>
              </footer>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>