<?php

include 'includes/head.php';
include 'includes/navbar.php';

include 'conexao.php';

$id = $_POST['id'];


$nome = $_POST['nome'];
$email = $_POST['email'];
$local = $_POST['local'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$cep = $_POST['cep'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$telefone2 =$_POST['telefone2']; 
$estadocivil = $_POST['estadocivil']; 
$filho = $_POST['filho']; 
$aniversario = $_POST['aniversario']; 
$cuidado = $_POST['cuidado'];

    $sql = "UPDATE `cadpessoal` SET `nome`='$nome',`email`='$email',`local`='$local',`complemento`='$complemento',`bairro`='$bairro',`cidade`='$cidade',`estado`='$estado' ,`municipio`='$municipio',`cep`='$cep',`cpf`='$cpf',`rg`='$rg' ,`telefone`='$telefone',`telefone2`='$telefone2',`estadocivil`='$estadocivil',`filho`='$filho' ,`aniversario`='$aniversario',`cuidado`='$cuidado'  WHERE id_cadpessoal = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container mt-5">
<center>
<h3> Cadastro Atualizado com Sucesso </h3>
</center>

<a type="button" href="listacadPessoal.php" class="btn btn-secondary">Voltar</a>

</div>