<?php

include 'conexao.php';

$data = $_POST['data'];
$tarefa = $_POST['tarefa'];

$sql = "INSERT INTO `cadtarefa`(`data`,`tarefa`) VALUES ('$data','$tarefa')";

$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container mt-5">
<center>
<h3> Cadastro Realizado com Sucesso </h3>
</center>

<a type="button" href="CadastroTask.php" class="btn btn-secondary">Registro</a>

</div>