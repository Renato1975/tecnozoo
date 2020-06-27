<?php 

include 'config.php';

$login = $_POST['login'];
$nome = $_POST['nome'];
$supervisor =$_POST['supervisor'];
$acionamento =$_POST['country'];
$motivo = $_POST['state'];
$visao = $_POST['city'];
$portal = $_POST['portal'];
$melhoria = $_POST['melhoria'];
$sugestao = $_POST['sugestao'];
$apoio = $_POST['apoio'];
$registro = $_POST['registro'];


echo $sql = "INSERT INTO `regatendimento`(`login`, `nome`, `supervisor`, `acionamento`, `motivo`, `visao`, `portal`, `melhoria`, `sugestao`, `apoio`, `registro`) VALUES ('$login','$nome','$supervisor','$acionamento','$motivo','$visao','$portal','$melhoria','$sugestao','$apoio','$registro')";

if (mysqli_query($db, $sql)) {
      // echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
mysqli_close($db);

header('Location: tela.php');


 ?>