<?php 

include_once('conn.php');

$idOfi = $_GET['id'];

$sqlDel = "DELETE FROM tb_cad02 WHERE id =  '$idOfi'";
$result_del = mysqli_query($conexao, $sqlDel);

if ($conexao->query($sqlDel) === TRUE) {
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo  "<center><p>USUÁRIO EXCLUIDO COM SUCESSO!</p></center>";
} else {
	echo "Erro: " . $sqlDel . "<br>" . $conexao->error;
}

$conexao->close();



?>