
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>


    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script href="bower_components/fontawesome/js/all.js"></script>
    <link rel="icon" href="Assets/Icon/Ico.png">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href="bower_components/fontawesome/css/all.css">
    <link rel="stylesheet" href="Css/Interface.css">
    <link rel="stylesheet" href="Css/Footer.css">
    <link rel="stylesheet" href="Css/Cadastro/Cadastro.css">
    <link rel="stylesheet" href="Css/Menu.css">

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

                                <a class="nav-link" href="Index.php"><i class="fab fa-fort-awesome"></i> Pagina Inicial</a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-comments"></i> Fórum</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"> <i class="fas fa-globe-europe"></i> Universo</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Download.php"><i class="fas fa-download"></i> Donwload</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Suporte.php"><i class="fas fa-envelope"></i> Suporte</a>
                            </li>

                        </ul>

                        <button class="btn btn-outline-success my-2 my-sm-0" id="Entrar" type="submit"> <a href="Login.php"> Entrar </a><i class="fas fa-user-astronaut"></i> </button>
                        <button class="btn btn-outline-success my-2 my-sm-0" id="Registrar" type="submit"><a href="Cadastro.php"> Registrar </a> <i class="fas fa-user-plus"></i></button>

                    </div>
        
                </nav>

                <script>
                        function validar() {
                            var senha = formuser.senha.value;
                            var rep_senha = formuser.rep_senha.value;



                            if(senha == "" || senha.length <= 5 ){
                                alert('Preencha o campo senha com minimo 6 caracteres')
                                formuser.sensha.focus();
                                return false;
                                
                                
                            }
                            else if(senha != rep_senha) {
                                alert('Senhas Diferentes animal');
                                form1.rep_senha.focus();
                                return false;
                            }
                            else{
                                alert('Conta Criada com Sucesso');
                                header('Location:Login.php');
                                return false;
                            }
                        }
                    
                    
                </script>

        
        </header>
<div class="Interface">
    <div class="Regis-form">
        <form name="formuser" method="POST" action="BD/Cadastrar.php">
        <img src="Assets/Icon/Ico.png" class="IcoL">
            <h1>Cadastrar</h1>
            <input type="text" name="usuario" placeholder="Nick" class="For"> 
            <input type="text" name="nome" placeholder="Nome Completo" class="For"> 
            <input type="email" name="email" placeholder="Email" class="For"> 
            <input type="password" name="senha" placeholder="Senha" class="For"> 
            <input type="password" name="rep_senha" placeholder="Repita a Senha" class="For"> 
            <input type="submit" name="" value="Criar Conta" class="Regis-btn" onclick="return validar()"> 
            <a href="Login.html">Já possuo uma Conta.</a>
         </form>
    </div>
</div>

<footer>
    
        <div class="footer-main-div">
                <div class="footer-social">
    
                   <a>
                        <p>Redes Socias</p>
                   </a>
                
                    <a href="#" class="btn-s">
                            <i class="fab fa-facebook-f"></i>
                    </a>
    
                    <a href="#" class="btn-s">
                            <i class="fab fa-google"></i>
                    </a>
    
                    <a href="#" class="btn-s">
                            <i class="fab fa-twitter"></i>
                    </a>
    
                    <a href="#" class="btn-s">
                            <i class="fab fa-whatsapp"></i>
                    </a>
    
                    <a href="#" class="btn-s">                    
                             <i class="fab fa-discord"></i></i>
                    </a>
                    
                    
                 </div>
            
            </div>
       
    </footer>
</body>
</html>