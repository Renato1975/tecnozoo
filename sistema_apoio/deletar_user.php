<?php 

include 'config.php';

$id = $_GET['id'];

$deletar = "DELETE FROM users WHERE id_user = $id";

$sql = mysqli_query($db,$deletar);

header('Location: aprovar_usuario.php');


 ?>