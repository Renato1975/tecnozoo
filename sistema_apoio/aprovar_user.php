<?php 

include 'config.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];


if ($nivel == 1 ) {
	
	$update ="UPDATE users SET status = 'Ativo', nivel = 1 WHERE id_user = $id";
	$atualizacao = mysqli_query($db,$update);
	echo "<h2>ADMINISTRADOR APROVADO</h2>";
}
if ($nivel == 2 ) {
	
	$update ="UPDATE users SET status = 'Ativo', nivel = 2 WHERE id_user = $id";
	$atualizacao = mysqli_query($db,$update);
	echo "<h2>SUPERVISOR APROVADO</h2>";
}
if ($nivel == 3 ) {
	
	$update ="UPDATE users SET status = 'Ativo', nivel = 3 WHERE id_user = $id";
	$atualizacao = mysqli_query($db,$update);
	echo "<h2>AGENTE APROVADO</h2>";
}

 ?>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<div class="container" style="margin-top: 90px; width: 500px;">
    <h4> <img src="images/thumbs_up.png">Operação realizada com sucesso</h4>
	
 	<div style="text-align: right; margin-right: 230px;">
		<a href="aprovar_usuario.php" class="btn btn-sm btn-secondary" >Voltar</a>
	</div>
    </div>