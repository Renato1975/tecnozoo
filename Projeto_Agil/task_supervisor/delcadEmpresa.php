<?php

include 'includes/head.php';
include 'includes/navbar.php';

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `cadempresa` WHERE id_empresa = $id";

$deletar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container mt-5">
<center>
<h3> Excluído com Sucesso </h3>
</center>

<a type="button" href="listacadEmpresa.php" class="btn btn-secondary">Voltar</a>

</div>
