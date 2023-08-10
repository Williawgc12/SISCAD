<?php
session_start();

include_once('conn.php');

//Pesquisa dos dados na lista php
if (!empty($_GET['search'])) {

    $data = $_GET['search'];
    //
    $sql = "SELECT * FROM tb_cad04 WHERE
        id LIKE '%$data%' 
        or nome LIKE '%$data%' 
        or email LIKE '%$data%'
        or idade LIKE '%$data%'
        or tel01 LIKE '%$data%'
        or tel02 LIKE '%$data%'
        or endereco LiKE '%$data%'
        or escolaridade LIKE '%$data%'
        or cpf LIKE '%$cpf%'
        or nome_pai LIKE '%$data%'
        or nome_mae LIKE '%$data%' 
        or uf LIKE '%$data%'
        or especialidade LIKE '%$data%'
        ";
} else {
    $sql = "SELECT * FROM tb_cad04 ORDER BY id ASC";
}

$result =  $conexao->query($sql); // consulta

//Mostrar o resultado da consulta query de uma comando SQL
//print_r($result);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>SISCAD</title>
    <!--Colocando um icone-->
    <link rel="icon" href="imagem/officedatabase_104402.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>
        td {
            color: #000;
        }
    </style>

</head>

<body id="fundoList">
    <div>
    <CENTER>
            <div style="margin-top: -10px;background-color: rgb(5, 79, 190);height:100px;width:900px;">
                <h3 style="color: #FFF;">
                    <br>
                    <p style="margin-top: 10px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">LISTA DE CADASTROS</p>
                </h3>
            </div>
            <hr style="width: 300px;background-color:rgb(5, 79, 190);height:8px;">
            <hr style="width: 100px;background-color:rgb(5, 79, 190);height:8px;">
        </CENTER>
    </div>
    <div style="background-color: rgb(5, 79, 190);width:250px;margin-left:-10px;border-radius:30px;">
        <a href="pagina_ini.html" style="text-decoration: none;">
            <p style=" color: #FFF;margin-left:30px;"> Voltar ao formulário</p>
        </a>
    </div>
    <br>
    <br>
    <br>
    <!--Fazendo o guia de pesquisa-->
    <div class="box-search" style="margin-left: 450px;margin-top:-80px;">
        <input type="search" class="form-control" id="pesquisar" style="width:400px;" placeholder="Pesquise.....">
        <button onclick="searchData()" class="btn btn-primary" style="margin-left: 410px;margin-top:-65px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </button>
    </div>
    <br>
    <!--Deletar todos os registros da lista --->
    <div style="margin-top: -86px;margin-left:910px;">
        <button class="btn btn-danger">
            <a id="likDel" style="text-decoration-color:red;" href='delete_05.php?id=$user_data[ID]'>
                <i style="color: #FFF;" class="bi bi-file-earmark-x"></i>
            </a>
        </button>
    </div>
    <br>
    <br>
    <br>
    <table class="table" style="width: 500px;margin-left:16px;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#ID </th>
                <th scope="col"> NOME </th>
                <th scope="col"> IDADE </th>
                <th scope="col"> EMAIL </th>
                <th scope="col"> TELE01</th>
                <th scope="col"> TELE02 </th>
                <th scope="col"> ESCOLARIDADE </th>
                <th scope="col"> ENDEREÇO </th>
                <th scope="col"> CPF </th>
                <th scope="col"> NOME_PAI </th>
                <th scope="col"> NOME_MAE </th>
                <th scope="col"> NATURALIDADE </th>
                <th scope="col"> UF </th>
                <th scope="col"> ESPECIALIDADE</th>
                <th scope="col">....</th>

            </tr>

        </thead>
        <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['ID'] . "</td>";
                echo "<td>" . $user_data['NOME'] . "</td>";
                echo "<td>" . $user_data['IDADE'] . "</td>";
                echo "<td>" . $user_data['EMAIL'] . "</td>";
                echo "<td>" . $user_data['TEL01'] . "</td>";
                echo "<td>" . $user_data['TEL02'] . "</td>";
                echo "<td>" . $user_data['ESCOLARIDADE'] . "</td>";
                echo "<td>" . $user_data['ENDERECO'] . "</td>";
                echo "<td>" . $user_data['CPF'] . "</td>";
                echo "<td>" . $user_data['NOME_PAI'] . "</td>";
                echo "<td>" . $user_data['NOME_MAE'] . "</td>";
                echo "<td>" . $user_data['NATURALIDADE'] . "</td>";
                echo "<td>" . $user_data['UF'] . "</td>";
                echo "<td>" . $user_data['ESPECIALIDADE'] . "</td>";
                echo "<td>
                <a class='btn btn-primary' style='margin-top:50px;' href='edit_05.php?id=$user_data[ID]'><i class='bi bi-pencil-square'></i></a></td>";
                /*BUTTON editar linha */
                echo "<td>
                <a class='btn btn-danger' style='margin-left:-66px;margin-top:-0px;' href='exclu_05.php?id=$user_data[ID]'><i class='bi bi-trash3'></i></a>
                </td>";
                /*BUTTON editar linha */
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>


    <br>
    <br>
    <br>

    <br>
    <br>


    <center>
        <div style="background-color: rgb(5, 79, 190);width:1750px;height:190px;margin-top: 90px;margin-left:-50px;">

            <hr style="background-color: #FFF;margin-top: 230px;">
            <center>
                <div style="margin-top: 170px;margin-left:-240px;">
                    <p style="font-size: 12px;color:#FFF;">Copyright © </p>
                </div>

            </center>
        </div>
    </center>

     <!---Button de voltar ao inicio da página-->
     <a style="margin-left: 1290px;margin-top:-80px;" class="btn btn-primary" href="#top">
      <span class="mat-icons">
        <i class="bi bi-eject"></i>
      </span>
    </a>


</body>
<script class="js">

  //Variavel constante abastecida com a classe do meu item - variavel de valor fixo, somente leitura
  const btn = document.querySelector(".btn-back-to-top");

  //Esse laço condicional If Else, traz o seguinte, se na posição Y, estiver == 0, vai tornar o btn
  //invisivel, se na posição Y retornar a outro valor não sendo 0, vai ficar visivel.
  window.addEventListener("scroll", function (event) {
    if (window.scrollY == 0) {
      btn.classList.remove("visible");//remove a propiedade visible
    } else {
      btn.classList.add("visible");//adiciona a propiedade visible
    }
  });

</script>

<!--Script JS neccessário para fazer a bsuca na url com os dados de uma lista 
php -->
<script>
    var search = document.getElementById('pesquisar');

    //Criando a ação de teclar a tecla enter para pesquisar
    search.addEventListener("keydown", function(evento) {
        if (evento.key == "Enter") {
            searchData();
        }
    });

    function searchData() {
        //Alterando a URl
        window.location = 'list_05.php?search=' + search.value;
    }
</script>


</html>