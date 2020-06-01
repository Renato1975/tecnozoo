<?php

include 'conexao.php';

$matsap = $_POST['matsap'];
$data = $_POST['data'];
$nome = $_POST['nome'];
$assunto = $_POST['assunto'];
$motivo = $_POST['motivo'];
$feedback = $_POST['feedback'];
$plano = $_POST['plano'];

$sql = "INSERT INTO `cadfeedback`(`matsap`, `data`, `nome`, `assunto`, `motivo`, `feedback`, `plano`) VALUES ($matsap,'$data','$nome' ,'$assunto','$motivo','$feedback','$plano')";

$inserir = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container mt-5">
<center>
<h3> Cadastro Realizado com Sucesso </h3>
</center>

<a type="button" href="listacadFeedback.php" class="btn btn-secondary">Registro</a>

</div>