<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
    
</head>
<body class="cor">

<header class="cabeca">
        <a href="landingpage.html"><img class="cabeca-img" src="logofina1.png" alt="Logo do Wego"></a>
        <nav class="cabeca-menu">
            <a class="cabeca-it-menu" href="">Sobre o Site</a>
            <a class="cabeca-it-menu" href="">Quem Somos?</a>
            <a class="cabeca-it-menu" href="">Suporte</a>
            <a class="cabeca-it-menu" href="">Cadastro-TI</a>
        </nav>
</header>
<main class="cont">

 <div class="cont-prin">
        

         <div class="boladiv">
         <h1 class="lgname">Login</h1>
             <form action="testlogin.php" method="post">
                 <input class="l1" type="email" name="email" placeholder="E-mail">
                      <br><br>
                 <input class="l1" type="password" name="senha" placeholder="Senha">
                        <br><br>
                        <input class="b1" type="submit" name="submit" value="Entrar">
            </form>
            </div>
    <img src="WEGO.png" class="img-prin" alt="">
</div>
    </main>
    <footer class="rodape">
        <img class="rodape-img" src="logofina1.png" alt="Logo Fina do WEGO">
    </footer>
</html>