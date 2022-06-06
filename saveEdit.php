<?php  
include_once('config.php');

if(isset($_POST['update'])){
   
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
   
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $data_nasc = $_POST['data_nasc'];

    $sqlUpdate = "UPDATE clientes SET nome='$nome',senha='$senha',telefone='$telefone',endereco='$endereco',cidade='$cidade',data_nasc=
    '$data_nasc' 
    WHERE id='$id'";
    
    $result = $conexao->query($sqlUpdate);
}
header('Location: sistema.php');

?>