<?php

include 'conexao.php';

$nome= $_POST['nome'];
$email= $_POST['email'];
$local= $_POST['local'];
$complemento= $_POST['complemento'];
$bairro= $_POST['bairro'];
$cidade= $_POST['cidade'];
$estado= $_POST['estado'];
$municipio= $_POST['municipio'];
$cep= $_POST['cep'];
$cpf= $_POST['cpf'];
$rg= $_POST['rg'];
$telefone= $_POST['telefone'];
$telefone2= $_POST['telefone2'];
$estadocivil= $_POST['estadocivil'];
$filho= $_POST['filho'];
$aniversario= $_POST['aniversario'];
$cuidado= $_POST['cuidado'];

$sql = "INSERT INTO `cadpessoal` (`nome`,`email`,`local`,`complemento`,`bairro`,`cidade`,`estado`,`municipio`,`cep`,`cpf`,`rg`,`telefone`,`telefone2`,`estadocivil`,`filho`,`aniversario`,`cuidado`) VALUES ('$nome','$email','$local','$complemento','$bairro','$cidade','$estado','$municipio','$cep','$cpf','$rg','$telefone','$telefone2','$estadocivil','$filho','$aniversario','$cuidado')";

if (mysqli_query($conexao, $sql)) {
      // echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container mt-5">
<center>
<h3> Cadastro Realizado com Sucesso </h3>
</center>

<a type="button" href="listacadPessoal.php" class="btn btn-secondary">Registro</a>

</div>