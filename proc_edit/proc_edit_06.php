<?php

    include('conn.php');

    $id             = $_POST['id'];
    $nome           = $_POST['nome'];
    $idade          = $_POST['idade'];
    $email          = $_POST['email'];
    $contato        = $_POST['contato'];
    $contatoSec     = $_POST['contatoSec']; 
    $escolaridade   = $_POST['escolaridade'];
    $endereco       = $_POST['endereco'];
    
    

    $update = "UPDATE cadsgt SET NOME = '$nome', IDADE = '$idade' ,
    EMAIL = '$email',TELEFONE1 = '$contato', TELEFONE2 = '$contatoSec', 
    ENDERECO = '$endereco',ESCOLARIDADE = '$escolaridade' WHERE ID = '$id'";

    $resultSql = mysqli_query($conexao, $update);

    if (mysqli_affected_rows($conexao)) {
        echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
        echo "<br>";echo "<br>";echo "<br>";echo "<br>";
        echo  "<center><p>USUÁRIO ATUALIZADO COM SUCESSO!</p></center>";
        
    } else {
        echo "Erro: " . $update . "<br>" . $conexao->error;
    }
  
    header('Location: list_sargentos.php');
    exit;

?>
