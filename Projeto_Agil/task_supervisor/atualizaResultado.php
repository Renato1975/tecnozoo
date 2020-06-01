<?php

include 'includes/head.php';
include 'includes/navbar.php';

include 'conexao.php';

$id = $_POST['id'];

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

    $sql = "UPDATE `indicador` SET `matsap`='$matsap',`nome`='$nome',`supervisor`='$supervisor',`mes`='$mes',`ausjust`='$ausjust',`ausinjust`='$ausinjust',`qualidade`='$qualidade',`aderencia`='$aderencia',`tma`='$tma',`tmo`='$tmo',`rca`='$rca',`nip`='$nip' WHERE id_indicador = $id";

    $atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container mt-5">
<center>
<h3> Resultado Atualizado com Sucesso </h3>
</center>

<a type="button" href="listacadResultado.php" class="btn btn-secondary">Voltar</a>

</div>