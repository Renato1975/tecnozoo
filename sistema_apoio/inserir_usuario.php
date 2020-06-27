<?php 

include 'config.php';
include 'script/password.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];
$nivel = $_POST['nivel'];
$status = 'Ativo';

$sql = "INSERT INTO `users`(`nome`, `email`, `senha`, `nivel`, `status`) VALUES ('$nome','$email',sha1('$senha'),$nivel,'$status')";

$inserir = mysqli_query($db,$sql);

?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<div class="container" style="margin-top: 90px; width: 500px;">
    <h4> <img src="images/thumbs_up.png">Usuario adicionado com Sucesso </h4>
	
 	<div style="text-align: right; margin-right: 230px;">
		<a href="cadastro_usuario.php" class="btn btn-sm btn-secondary" >Voltar</a>
	</div>
    </div>
