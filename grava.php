<?php
    //aqui é só um exemplo para não rodar o script abaixo sem necessidade
if ((isset($_POST['email']))&&(!empty($_POST['email']))){

    //porta, usuário, senha, nome data base
    //caso não consiga conectar mostra a mensagem de erro mostrada na conexão
    $conexao = mysqli_connect("localhost", "id6734583_ericrochaeric", "poi098zxc123", "id6734583_contato") or die("Erro na conexão com banco de dados " . mysqli_error($conexao));
 
   //Abaixo atribuímos os valores provenientes do formulário pelo método POST
   $nome = $_POST['nome']; 
   $email = $_POST['email'];
   $testemunho = $_POST['testemunho'];
 
    $string_sql = "INSERT INTO contato (nome,email,msg) VALUES ('$nome','$email','$testemunho')";
    $insert_member_res = mysqli_query($conexao, $string_sql);
    if(mysqli_affected_rows($conexao)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo '<!DOCTYPE html>
        <html lang="pt-br">
          <head>
            <!-- Meta tags Obrigatórias -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
            <title>Home - Eric Rocha</title>
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
            <meta name="theme-color" content="#ffffff">
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
                                        Mensagem enviada
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
                              <p>Desenvolvidor por Eric Rocha © 2018 </p>
                            </div>
                      </footer>
        
            <!-- JavaScript (Opcional) -->
            <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
          </body>
        </html>';
    } else {
        echo '<!DOCTYPE html>
        <html lang="pt-br">
          <head>
            <!-- Meta tags Obrigatórias -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
            <title>Home - Eric Rocha</title>
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
            <meta name="theme-color" content="#ffffff">
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
                                        Erro, não foi possível inserir no banco de dados
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
                              <p>Desenvolvidor por Eric Rocha © 2018 </p>
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
    mysqli_close($conexao); //fecha conexão com banco de dados
 }else{
    echo '<!DOCTYPE html>
    <html lang="pt-br">
      <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <title>Home - Eric Rocha</title>
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
        <meta name="theme-color" content="#ffffff">
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
                                <div class="alert alert-warning">
                                    Por favor, preencha os dados
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
                          <p>Desenvolvidor por Eric Rocha © 2018 </p>
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