<?php
//Variáveis
session_start();
 
require 'init.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['testemunho'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


// Compo E-mail
$arquivo = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:14px;
color: #666666;
}
a{
color: #666666;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
</style>
<html>
<html>
      <table width='510' style='color: #fff; background-color: #212529; width: 100%; margin-bottom: 1rem; border-collapse: collapse; border: 1px solid #dee2e6;'>
                <tr>
                    <td>
                        <tr>
                        <td width='500'>Nome: $nome</td>
                        </tr>

                        <tr>
                            <td width='320'>E-mail: <b>$email</b></td>
                        </tr>

                        <tr>
                            <td width='320'>Mensagem: $mensagem</td>
                        </tr>
                    </td>
                </tr>  
                        <tr>
                            <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
                        </tr>
      </table>
  </html>
";

//enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "ericrochaeric@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= "From: $nome <$email>";
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo ' 
  <!DOCTYPE html>
        <html lang="pt-br">
          <head>
            <!-- Meta tags Obrigatórias -->
            <meta http-equiv="refresh" content="2;URL=contato.php">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="theme-color" content="#212529">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
            <title>Contato - Eric Rocha</title>
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
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="fav\ms-icon-144x144.png">
          </head>
          <body>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Alterna navegação">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarToggler">
                          <a class="navbar-brand" href="index.html">Eric Rocha</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                              <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre.html">Sobre</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contato.html">Contato <span class="sr-only">(Página atual)</span></a>
                            </li>
                          </ul>
                          <form class="form-inline my-2 my-lg-0">        
                      <a class="btn btn-success my-2 my-sm-0" href="form-login.php">Login</a>
                    </form>                     
                        </div>
                </nav>
        
                <div class="container">
                        <!--Titulo-->
                        <div class="row">
                          <div class="col-sm-12 mt-5">
                            <h1 class="text-center text-uppercase">Entre em contato</h1>
                          </div>
                        </div>
                        <!--Titulo-->
                        <!--Cartao-->
                        <div class="row">
                          <div class="col-sm-12">
                            <div>
                              <div class="shadow p-3 mb-5 mt-5 bg-dark rounded row h-100">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 w-100 text-light">
                                    <div class="contato">
                                    <div class="alert alert-success">
                                        E-mail enviado com sucesso
                                    </div>
                                    <a href="index.html" class="btn btn-primary" style="float: right;">Voltar</a>
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
  ';
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo '<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <!-- Meta tags Obrigatórias -->
      <meta charset="utf-8">
      <meta http-equiv="refresh" content="2;URL=contato.php">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="theme-color" content="#212529">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <title>Contato - Eric Rocha</title>
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
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="fav\ms-icon-144x144.png">
    </head>
    <body>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarToggler">
                    <a class="navbar-brand" href="index.html">Eric Rocha</a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="sobre.html">Sobre</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="contato.html">Contato <span class="sr-only">(Página atual)</span></a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">        
                      <a class="btn btn-success my-2 my-sm-0" href="form-login.php">Login</a>
                    </form>                
                  </div>
          </nav>
  
          <div class="container">
                  <!--Titulo-->
                  <div class="row">
                    <div class="col-sm-12 mt-5">
                      <h1 class="text-center text-uppercase">Entre em contato</h1>
                    </div>
                  </div>
                  <!--Titulo-->
                  <!--Cartao-->
                  <div class="row">
                    <div class="col-sm-12">
                      <div>
                        <div class="shadow p-3 mb-5 mt-5 bg-dark rounded row h-100">
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 w-100 text-light">
                              <div class="contato">
                              <div class="alert alert-danger">
                                  Erro ao enviar o e-mail tente novamente mais tarde.
                              </div>
                              <a href="index.html" class="btn btn-primary" style="float: right;">Voltar</a>
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
  </html>';
  }
?>