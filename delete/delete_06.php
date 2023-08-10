<?php  
session_start();

include_once('conn.php');

$sql_remove = "DELETE FROM tb_cad05 WHERE id ";
$result_del = mysqli_query($conexao, $sql_remove);

if ($conexao->query($sql_remove) === TRUE) {
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo  "<center><p>LISTA DE CADASTRADOS EXCLUIDOS COM SUCESSO!</p></center>";
} else {
	echo "Erro: " . $sql_remove . "<br>" . $conexao->error;
}

//Outra função SQL, zerar o id dos registros 

$sql_alter_id = "ALTER TABLE tb_cad05 AUTO_INCREMENT  = 1";
$result_alter = mysqli_query($conexao, $sql_alter_id);


$conexao->close();

