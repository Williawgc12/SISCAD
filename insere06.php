<?php 

session_start();

include_once ('conn.php');

$id = 0;
$nome 			= $_POST['nome'];
$email 			= $_POST['email'];
$idade 			= $_POST['idade'];	 	
$contato		= $_POST['contato'];
$contatoSec		= $_POST['contatoSec'];
$endereco		= $_POST['endereco'];
$escolaridade	= $_POST['escolaridade'];
$cpf 			= $_POST['cpf'];
$nome_pai 		= $_POST['nome_pai']; 
$nome_mae 		= $_POST['nome_mae'];
$naturalidade 	= $_POST['naturalidade'];
$uf 			= $_POST['uf'];
$especialidade 	= $_POST['especialidade'];

$sqlSgt = "INSERT INTO tb_cad05 (
	
	id,
	nome, 
	email,
	idade,
	tel01,
	tel02,
	endereco,
	escolaridade,
	cpf,
	nome_pai,
	nome_mae,
	naturalidade,
	uf,
	especialidade

) VALUES (
	'$id','$nome', '$email',
	'$idade', '$contato', '$contatoSec',
	'$endereco','$escolaridade',
	'$cpf','$nome_pai','$nome_mae','$naturalidade',
	'$uf', '$especialidade')";


if ($conexao->query($sqlSgt) === TRUE) {
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo  "<center><p>USUÁRIO CADASTRADO COM SUCESSO!</p></center>";
} else {
	echo "Erro: " . $sqlSgt . "<br>" . $conexao->error;
}

$conexao->close();

