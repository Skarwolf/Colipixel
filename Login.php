<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script href="bower_components/fontawesome/js/all.js"></script>
    <link rel="icon" href="Assets/Icon/Ico.png">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href="bower_components/fontawesome/css/all.css">
    <link rel="stylesheet" href="Css/Interface.css">
    <link rel="stylesheet" href="Css/Footer.css">
    <link rel="stylesheet" href="Css/Login/Login.css">
</head>
<body background="Fundo.png">
        <header>

                <nav class="navbar navbar-expand-lg navbar-dark "style="background-color:#000;">
        
                    <a class="navbar-brand mb-0 h1 title" href="#"><i class="fas fa-vihara"></i> CP</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Suporte" aria-controls="Suporte" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                    <div class="collapse navbar-collapse" id="Suporte">
                      
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                            <li class="nav-item">

                                <a class="nav-link" href="#"><i class="fab fa-fort-awesome"></i> Pagina Inicial</a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-comments"></i> Fórum</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"> <i class="fas fa-globe-europe"></i> Universo</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-download"></i> Donwload</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Suporte.html"><i class="fas fa-envelope"></i> Suporte</a>
                            </li>

                        </ul>

                        <button class="btn btn-outline-success my-2 my-sm-0" id="Entrar" type="submit"> <a href="Login.php"> Entrar </a><i class="fas fa-user-astronaut"></i> </button>
                        <button class="btn btn-outline-success my-2 my-sm-0" id="Registrar" type="submit"><a href="Cadastro.php"> Registrar </a> <i class="fas fa-user-plus"></i></button>

                    </div>
        
                </nav>
        
        </header>
<div class="Interface">
   

    <form class="box" action="BD/LoginC.php" method="POST">
        <img src="Assets/Icon/Ico.png" class="IcoL">
        <h1> Login </h1>
        <input type="text" name="usuario" placeholder="Nome:"> 
        <input type="password" name="senha" placeholder="Senha:"> 
        <input type="submit" value="Login">
    </form>


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
        <div class="Marca">
        <a><b>&copy;</b> Site Desenvolvido por <b>ColiPixel</b> (2019)</a>
        </div>
</footer>

</body>
</html>