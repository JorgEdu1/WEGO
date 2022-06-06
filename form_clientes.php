<?php
if(isset($_POST['submit']))
{
   
   /*  print_r($_POST['nome']);
    print_r('<br>');
    print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['telefone']);
    print_r('<br>');
    print_r($_POST['senha']);
    print_r('<br>');
    print_r($_POST['endereco']);
    print_r('<br>');
    print_r($_POST['cidade']);
    print_r('<br>');
    print_r($_POST['data_nasc']);
    */

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $data_nasc = $_POST['data_nasc'];

    $result = mysqli_query($conexao, "INSERT INTO clientes(nome,email,senha,telefone,endereco,cidade,data_nasc) VALUES('$nome','$email','$senha','$telefone','$endereco','$cidade','$data_nasc')");

} 



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="menucentral">  

    <header class="cabeca">
        <a href="landingpage.html"><img class="cabeca-img" src="logofina1.png   " alt="Logo do Wego"></a>
        <nav class="cabeca-menu">
            <a class="cabeca-it-menu" href="">Sobre o Site</a>
            <a class="cabeca-it-menu" href="">Quem Somos?</a>
            <a class="cabeca-it-menu" href="">Suporte</a>
            <a class="cabeca-it-menu" href="">Cadastro-TI</a>
        </nav>

    </header>

    <main class="cont"> 
<br>
      <div class="cont-prin">
<form action="form_clientes.php" method="POST">
    <legend class="lgname"><b>Cadastro de Clientes</b></legend>
    <br><br>
   
    
    
        <div class="cont-prin-bloco">
        <input type="text" name="nome" id="nome" placeholder="Nome" class="l1" required>
        
   
   
    
        <input type="text" name="email" placeholder="Email" id="email" class="l1" required>
        
    
    
  
        <input type="password" placeholder="Senha" name="senha" id="senha" class="l1" required>
       
        <input type="tel" placeholder="Telefone" name="telefone" id="telefone" class="l1" required> 
     
     
    

  
   
        <input type="text" name="endereco" placeholder="Endereço" id="endereco" class="l1" required> 
        
 
   <div class="t2" style="text-align:center;">
    <p>Em que cidade mora?</p>
    <input type="radio" id="cidade1" name="cidade" value="Terra Nova-PE" required>
    <label for="cidade1">Terra Nova-PE</label>
    <br>
    <input type="radio" id="cidade2" name="cidade" value="Salgueiro-PE" required>
    <label for="cidade2">Salgueiro-PE</label><br>
    <input type="radio" id="cidade3" name="cidade" value="Parnamirim-PE" required>
    <label for="cidade3">Parnamirim-PE</label><br>
    <input type="radio" id="cidade4" name="cidade" value="Cabrobo-PE" required>
    <label for="cidade4">Cabrobo-PE</label></div>
    
    
    <label class="t2" for="data_nasc"><b>Data de Nascimento:</b></label>
        <input type="date" placeholder="Data de Nascimento" name="data_nasc" id="data_nasc" class="l1" required> 
       
        <input type="submit" class="b1" name="submit" id="submit">   
        
        
    
        </div>  
</form>
    </div>

    

  

    </main>
    
    <footer class="rodape">
        <img class="rodape-img" src="logofina1.png" alt="Logo Fina do WEGO">
    </footer>
  
</body>
</html>