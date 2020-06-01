<?php

include 'conexao.php';

$nome   =$_POST['nome'];
$email   =$_POST['email'];
$matsap   =$_POST['matsap'];
$admissao   =$_POST['admissao'];
$matiex   =$_POST['matiex'];
$avaya   =$_POST['avaya'];
$ramalhome   =$_POST['ramalhome'];
$loginrede   =$_POST['loginrede'];
$ilha   =$_POST['ilha'];
$supervisor   =$_POST['supervisor'];
$coordenador   =$_POST['coordenador'];
$gerente   =$_POST['gerente'];

$sql ="INSERT INTO `cadempresa`(`nome`, `email`, `matsap`,`admissao`,`matiex`, `avaya`, `ramalhome`, `loginrede`, `ilha`, `supervisor`, `coordenador`, `gerente`) VALUES ('$nome','$email' ,'$matsap','$admissao','$matiex','$avaya','$ramalhome','$loginrede','$ilha','$supervisor','$coordenador','$gerente')";

$inserir = mysqli_query($conexao,$sql);


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container mt-5">
<center>
<h3> Cadastro Realizado com Sucesso </h3>
</center>

<a type="button" href="listacadEmpresa.php" class="btn btn-secondary">Registro</a>

</div>
