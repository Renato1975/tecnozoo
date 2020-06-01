<?php

include 'includes/head.php';
include 'includes/navbar.php';

include 'conexao.php';

$id = $_POST['id'];

$nome = $_POST['nome'];
$email = $_POST['email'];
$matsap = $_POST['matsap'];
$admissao = $_POST['admissao'];
$matiex = $_POST['matiex'];
$avaya = $_POST['avaya'];
$ramalhome = $_POST['ramalhome'];
$loginrede = $_POST['loginrede'];
$ilha = $_POST['ilha'];
$supervisor = $_POST['supervisor'];
$coordenador = $_POST['coordenador'];
$gerente = $_POST['gerente']; 

$sql ="UPDATE `cadempresa` SET `nome`='$nome',`email`='$email',`matsap`='$matsap' ,`admissao`='$admissao',`matiex`='$matiex',`avaya`='$avaya',`ramalhome`='$ramalhome',`loginrede`='$loginrede',`ilha`='$ilha',`supervisor`='$supervisor',`coordenador`='$coordenador',`gerente`='$gerente' WHERE id_empresa = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container mt-5">
<center>
<h3> Cadastro Atualizado com Sucesso </h3>
</center>

<a type="button" href="listacadEmpresa.php" class="btn btn-secondary">Voltar</a>

</div>
