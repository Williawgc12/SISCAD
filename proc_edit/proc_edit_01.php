<?php

    include('conn.php');

    $id             = $_POST['id'];
    $nome           = $_POST['nome'];
    $idade          = $_POST['idade'];
    $email          = $_POST['email'];
    $contato        = $_POST['contato'];
    $contatoSec     = $_POST['contatoSec']; 
    $endereco       = $_POST['endereco'];
    $escolaridade   = $_POST['escolaridade'];
    $cpf            = $_POST['cpf'];
    $nome_pai       = $_POST['nome_pai'];
    $nome_mae       = $_POST['nome_mae'];
    $naturalidade   = $_POST['naturalidade'];
    $uf             = $_POST['uf'];
    $especialidade  = $_POST['especialidade'];


    $update = "UPDATE tb_cad SET NOME = '$nome', IDADE = '$idade' ,
    EMAIL = '$email',TEL01 = '$contato', TEL02 = '$contatoSec', 
    ENDERECO = '$endereco',ESCOLARIDADE = '$escolaridade' WHERE ID = '$id'";

    $resultSql = mysqli_query($conexao, $update);

    if (mysqli_affected_rows($conexao)) {
        echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
        echo "<br>";echo "<br>";echo "<br>";echo "<br>";
        echo  "<center><p>USUÁRIO ATUALIZADO COM SUCESSO!</p></center>";
        
    } else {
        echo "Erro: " . $update . "<br>" . $conexao->error;
    }
  
    header('Location: list_01.php');
    exit;

?>
