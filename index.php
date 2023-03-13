<?php
require 'connection.php';

if(isset($_POST["submit"])){
    $nome = $_POST["nome"];
    $tipodocontainer = $_POST["tipodocontainer"];
    $status = $_POST["status"];
    $categoria = $_POST["categoria"];
    $tipodemovimentação = $_POST["tipodemovimentação"];
    $datahorainicial = $_POST["datahorainicial"];
    $datahorafinal = $_POST["datahorafinal"];
foreach($datahorafinal as $row){
    $datahorafinal .= $row . ",";
}
    $query = "INSERT INTO tb_container VALUES('', '$nome', '$tipodocontainer', '$status', ' $categoria', '$tipodemovimentação', '$datahorainicial', ' $datahorafinal',)";
    mysqli_query($conn, $query);
    echo
    "
    <script> alerta('Data Inserido com Sucesso!!!')</script>
    ";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Test Data</title>
    <meta charset="utf-8">
    <style>
        body{
            background-image: url("Ponta da praia.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
        }
        #tela{
            background-color: #FFFFFF;
            padding: 70px;
            width: 400px;
            height: 500px;
            position: absolute;
            top: 80px;
            margin-left: 450px;
            border-radius: 40px;
            box-shadow: 0px 0px 80px #0000FF;

        }
    </style>
</head>
<style media="screen">
    label{
        display: block;
    }
</style>
<body>
    <div id="tela">
    <b2>Cadastro<br><br>
            <form class="Cadastro" action="" method="post" autocomplete="off">
                <label for="">Nome</label>
                <input type="text" name="nome" required value=""><br>
                <label for="">Tipo do Container</label>
                <input type="radio" name="tipodocontainer" value="20" required>20
                <input type="radio" name="tipodocontainer" value="40" required>40<br>
                <label for="">Status</label>
                <select class="" name="status" required value="">
                <option name="status" value="selecione">Selecione...</option>
                <option name="status" value="cheio">Cheio</option>
                <option name="status" value="vazio">Vazio</option>
                </select><br>
                <label for="">Categoria</label>
                <select class="" name="categoria" required value="">
                <option name="categoria" value="selecione">Selecione...</option>
                <option name="categoria" value="importação">Importação</option>
                <option name="categoria" value="exportação">Exportação</option>
                </select><br>
                <label for="">Tipo de Movimentação</label>
                <select class="" name="tipodemovimentação" required value="">
                <option name="tipodemovimentação" value="selecione">Selecione...</option>
                <option name="tipodemovimentação" value="embarque">Embarque</option>
                <option name="tipodemovimentação" value="descarga">Descarga</option>
                <option name="tipodemovimentação" value="gatein">GateIn</option>
                <option name="tipodemovimentação" value="gateout">GateOut</option>
                <option name="tipodemovimentação" value="reposicionamento">Reposicionamento</option>
                <option name="tipodemovimentação" value="pesagem">Pesagem</option>
                <option name="tipodemovimentação" value="scanner">Scanner</option>
                </select><br>
                <label>Data e Hora Inicial</label>
                <input type="datetime-local" name="datahorainicial" style="font-size:18px;color:#0000FF" required><br> 
                <label>Data e Hora Final</label>
                <input type="datetime-local" name="datahorafinal" style="font-size:18px;color:#0000FF" required><br>
                <button type="submit" name="submit" value="submit"style="font-size:18px;color:#0000FF">Submit</button>
            </form>
        </div>
    </body>
</html>
