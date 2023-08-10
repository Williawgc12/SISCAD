<?php

//iniciar sessao de conexão 
session_start();

//Conexão com o banco de dados
include_once('conn.php');

$id = $_GET['id'];

$sql = "SELECT * FROM tb_cad WHERE id = '$id'";
$result_query = mysqli_query($conexao, $sql);
$result_user = mysqli_fetch_assoc($result_query);

//usado para ver se está pegando os dados para a exibição, no banco de dados
//print_r($result_user)

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <link rel="stylecheet" href="style.css">
    <meta charset="utf-8">
    <title>SISCAD</title>
    <link rel="icon" href="imagem/iconBASM.png">
    <!--Link Boostrap CSS e JS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--Link Icons Bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
        input {
            width: 100px;
        }

        body {
            background-color: rgb(5, 79, 190);
        }
    </style>

</head>


<body>
    <br>
    <center>
        <h3 id="tit" style="color: #FFF;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size:30px;">EDITAR MILITAR CADASTRADO</h3>

    </center>


    <br>
    <br>

    <center>
        <form method="POST" action="proc_edit_01.php" id="formCad" style="background-color: rgb(20, 16, 146);width: 890px; height: 900px;border-radius: 20px;margin-left: 30px;">
            <!--form 01-->
            <br>
            <div style="margin-left: -400px;">
                <div>
                    <input type="hidden" name="id" value="<?php echo $result_user['ID'] ?>">
                </div>
                <div class="form-group">
                    <label id="lname" style="color: #FFF;">
                        NOME:
                    </label>
                    <input style="width: 300px;" maxlength="20" value="<?php echo $result_user['NOME']; ?>" type="text" class="form-control" name="nome">
                </div>
                <br>
                <div class="form-group">
                    <label id="lidade" style="color: #FFF;">
                        IDADE:
                    </label>
                    <input style="width: 300px;" type="number" value="<?php echo $result_user['IDADE']; ?>" class="form-control" name="idade" maxlength="2">
                </div>
                <br>
                <div class="form-group">
                    <label id="lemail" style="color: #FFF;">
                        EMAIL:
                    </label>
                    <input style="width: 300px;" type="email" value="<?php echo $result_user['EMAIL']; ?>" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label id="ltele" style="color: #FFF;">
                        TELEFONE PESSOAL:
                    </label>
                    <input style="width: 300px;" type="text" value="<?php echo $result_user['TEL01']; ?>" class="form-control" name="contato" maxlength="15">
                </div>
                <br>
            </div>
            <!--form 02-->
            <div style="margin-left: 300px;margin-top:-415px;">
                <div class="form-group">
                    <label style="color: #FFF;">
                        TELEFONE SECUNDÁRIO
                    </label>
                    <input type="text" style="width: 300px;" value="<?php echo $result_user['TEL02']; ?>" id="tel" class="form-control" name="contatoSec" maxlength="15">
                </div>
                <div class="form-group">
                    <label style="color: #fff;">
                        ENDEREÇO:
                    </label>
                    <input type="tel" style="width: 300px;" name="endereco" value="<?php echo $result_user['ENDERECO']; ?>" class="form-control" maxlength="30">
                </div>
                <div class="form-group">
                    <label style="color: #FFF;">
                        ESCOLARIDADE:
                    </label>
                    <select class="form-control" name="escolaridade" value="<?php echo $result_user['ESCOLARIDADE']; ?>" style="width: 300px;">
                        <option>SELECIONE:</option>
                        <option>ENSINO FUNDAMENTAL - Incompleto</option>
                        <option>ENSINO FUNDAMENTAL - Completo </option>
                        <option> ENSINO MÉDIO - Incompleto</option>
                        <option> ENSINO MÉDIO - Completo</option>
                        <option> ENSINO TÉCNICO </option>
                        <option>ENSINO SUPERIOR - Incompleto</option>
                        <option>ENSINO SUPERIOR - Completo</option>
                    </select>
                </div>
            </div>
            <!--form04-->
            <div id="form03" style="margin-top:50px;margin-left:300px;">
                <div class="form-group">
                    <label style="color: #fff;">
                        NOME DO PAI:
                    </label>
                    <input type="text" style="width: 300px;"  value="<?php echo $result_user['NOME_PAI'] ?>" name="nome_pai" class="form-control"
                        placeholder="Digite o endereço" maxlength="30">
                </div>
                <div class="form-group">

                    <label style="color: #fff;">
                        NOME DA MÃE:
                    </label>
                    <input type="text" style="width: 300px;" name="nome_mae"  value="<?php echo $result_user['NOME_MAE'] ?>" class="form-control"
                        placeholder="Digite o endereço" maxlength="30" >
                </div>
            </div>

            <!--form04-->
            <div id="form03" style="margin-top:40px;margin-left:300px;">
                <div class="form-group">
                    <label style="color: #fff;">
                        NATURALIDADE:
                    </label>
                    <input type="text" style="width: 300px;" value="<?php echo $result_user['NATURALIDADE']  ?>"  name="naturalidade" class="form-control"
                        placeholder="Digite o endereço" maxlength="30">
                </div>
                <div class="form-group">
                    <label style="color: #fff;">
                       UF:
                    </label>
                    <select class="form-control" value="<?php echo $result_user['UF'] ?>" name="uf" style="width: 90px;" >
                        <option>SP </option>
                        <option>RJ </option>
                        <option>PR </option>
                        <option>PE </option>
                        <option>RS </option>
                        <option>RN </option>
                        <option>AM </option>
                        <option>RR </option>
                        <option>RO </option>
                        <option>SC </option>
                        <option>MG </option>
                        <option>ES </option>
                        <option>AC </option>
                        <option>PA </option>
                        <option>AP </option>
                        <option>DF</option>
                        <option>GO</option>
                        <option>MT</option>
                        <option>MS</option>
                        <option>BA</option>
                        <option>SE</option>
                        <option>AL</option>
                        <option>PB</option>
                        <option>CE</option>
                        <option>PI</option>
                        <option>TO</option>
                    </select>
                </div>
                <div class="form-group">

                    <label style="color: #fff;">
                       ESPECIALIZAÇÃO:
                    </label>
                    <input type="text" style="width: 300px;" value="<?php echo $result_user['ESPECIALIDADE'] ?>"  name="especialidade" class="form-control"
                        placeholder="Digite o endereço" maxlength="30">
                </div>
            </div>
            <!--BTN EDIT-->
            <div id="btn" style="margin-top: 160px; margin-left: -5px;width:890px;">
                <button class="btn btn-secondary btn-lg btn-block">ATUALIZAR CADASTRADO</button>
            </div>

        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <br>

    </center>







</body>

</html>