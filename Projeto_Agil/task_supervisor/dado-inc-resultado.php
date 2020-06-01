<?php

include 'conexao.php';

$matsap = $_POST['matsap'];
$nome = $_POST['nome'];
$supervisor = $_POST['supervisor'];
$mes = $_POST['mes'];
$ausjust = $_POST['ausjust'];
$ausinjust = $_POST['ausinjust'];
$qualidade = $_POST['qualidade'];
$aderencia = $_POST['aderencia'];
$tma = $_POST['tma'];
$tmo = $_POST['tmo'];
$rca = $_POST['rca'];
$nip = $_POST['nip'];

$sql = "INSERT INTO `indicador`(`matsap`, `nome`, `supervisor`, `mes`, `ausjust`, `ausinjust`, `qualidade`, `aderencia`, `tma`, `tmo`, `rca`, `nip`) VALUES ($matsap,'$nome','$supervisor' ,'$mes','$ausjust','$ausinjust','$qualidade','$aderencia','$tma','$tmo','$rca','$nip')";

$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container mt-5">
<center>
<h3> Cadastro Realizado com Sucesso </h3>
</center>

<a type="button" href="cadastroResultado.php" class="btn btn-secondary">Registro</a>

</div>
