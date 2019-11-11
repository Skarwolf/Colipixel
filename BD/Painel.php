<?php
session_start();
include('Verifica_Login.php');
include('Conexao.php');
include('Ranking.php')

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Perfil</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script href="../bower_components/fontawesome/js/all.js"></script>
    <link rel="icon" href="../Assets/Icon/Ico.png">
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href="../bower_components/fontawesome/css/all.css">
    <link rel="stylesheet" href="../Css/Interface.css">
    <link rel="stylesheet" href="../Css/Footer.css">
    <link rel="stylesheet" href="../Css/Painel/Painel.css">
    <link rel="stylesheet" href="../Css/Menu.css">

</head>
<body>

        <header>

                <nav class="navbar navbar-expand-lg navbar-dark "style="background-color:#000;">
        
                    <a class="navbar-brand mb-0 h1 title" href="#"><i class="fas fa-vihara"></i> CP</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Suporte" aria-controls="Suporte" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                    <div class="collapse navbar-collapse" id="Suporte">
                      
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                            <li class="nav-item">

                                <a class="nav-link" href="#">Bem Vindo <?php echo $_SESSION['usuario'];?> esse é o seu status atual.</a>

                            </li>


                        </ul>

                        
                        <button class="btn btn-outline-success my-2 my-sm-0" id="Registrar" type="submit"><a href="logout.php"> Sair </a> <i class="fas fa-door-open"></i></button>

                    </div>
        
                </nav>
        
        </header>

        <div class="Interface">
            <h1><?php echo $_SESSION['usuario'];?></h1>
            <div class="container Ranking">
                <div>
                    
                    <div> 
                    <table class="table">
                 <thead>
                 <tr>
                      <th scope="col">♦</th>
                      <th scope="col">Posição</th>
                      <th scope="col">Pontos</th>
                      <th scope="col">Personagem</th>
                     
                 </tr>
                </thead>
                 <tbody>
                  <tr>
                       <th scope="row">♦</th>
                       <td>1</td>
                       <td>0</td>
                       <td>Indefinido></td>
     
                 </tr>

                </tbody>
                </table>      
                    </div>
                </div>

            </div>
</div>


    
</body>

</html>

<style>
    h1{
    text-align:center;
    color: white;
    font-family:'VT323-Regular';
    font-size:50px;
}
    .table{
    color:white;        
    border: 2px solid white;
    border-radius:24px;
    }
    </style>