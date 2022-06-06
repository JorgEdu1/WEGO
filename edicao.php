<?php
if(!empty($_GET['id']))
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

    $id= $_GET['id'];

    $sqlSelect = "SELECT * FROM clientes WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){

        while($user_data = mysqli_fetch_assoc($result)){
        $nome = $user_data['nome'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
        $telefone = $user_data['telefone'];
        $endereco = $user_data['endereco'];
        $cidade = $user_data['cidade'];
        $data_nasc = $user_data['data_nasc'];
        }
      
    }else{
        header("Location: sistema.php");
    };

   

   
} 



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro para Clientes</title>
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
    <div  class="cont-prin">
<form action="saveEdit.php" method="POST">
    <br>
    <legend class="lgname"><b>Cadastro de Clientes</b></legend>

    <div class="cont-prin-bloco">
        <input type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $nome ?>" class="l1" required>
        <input type="password" name="senha" id="senha" placeholder="Senha" value="<?php echo $senha ?>" class="l1" required>

    
    
   
        <input type="tel" name="telefone" id="telefone" placeholder="Telefone" value="<?php echo $telefone ?>" class="l1" required> 
      
    
    
        <input type="text" name="endereco" placeholder="Endereço" id="endereco" value="<?php echo $endereco ?>" class="l1" required> 
       
   
    <div style="text-align:center;" class="t2">
    <p>Em que cidade mora?</p>
    <input type="radio" id="cidade1" name="cidade" value="Terra Nova-PE" <?php echo$cidade == 'Terra Nova-PE' ? 'checked' : '' ?> required>
    <label for="cidade1">Terra Nova-PE</label>
    <br>
    <input type="radio" id="cidade2" name="cidade" value="Salgueiro-PE" <?php echo$cidade == 'Salgueiro-PE' ? 'checked' : '' ?> required>
    <label for="cidade2">Salgueiro-PE</label><br>
    <input type="radio" id="cidade3" name="cidade" value="Parnamirim-PE" <?php echo$cidade == 'Parnamirim-PE' ? 'checked' : '' ?> required>
    <label for="cidade3">Parnamirim-PE</label><br>
    <input type="radio" id="cidade4" name="cidade" value="Cabrobo-PE" <?php echo$cidade == 'Cabrobo-PE' ? 'checked' : '' ?> required>
    <label for="cidade4">Cabrobo-PE</label>
    </div>
        
        <label for="data_nasc"><b class="t2">Data de Nascimento:</b></label>
        <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $data_nasc ?>" class="l1" required> 
       
        <input type="hidden" name="id" value="<?php echo$id ?>">
        <input class="b1" type="submit" name="update" id="update">
</div>
</form>
    </div>

    

  

    </main>
    
    <footer class="rodape">
        <img class="rodape-img" src="logofina1.png" alt="Logo Fina do WEGO">
    </footer>
  
</body>
</html>