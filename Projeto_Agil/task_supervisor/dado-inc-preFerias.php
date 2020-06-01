<?php 

include 'includes/head.php';
include 'includes/navbar.php';

include 'conexao.php';


$nome = $_POST['nome'];
$admissao = $_POST['admissao'];
$tempocasa = $_POST['tempocasa'];
$supervisor = $_POST['supervisor'];
$opçao_1 = $_POST['op1'];
$opçao_2 = $_POST['op2'];
$ano = $_POST['ano'];
$obs = $_POST['obs'];


$sql = "INSERT INTO `pretferias`(`nome`, `admissao`, `tempocasa`, `supervisor`, `op1`, `op2`, `ano`, `obs`) VALUES ('$nome','$admissao','$tempocasa','$supervisor' ,'$opçao_1','$opçao_2','$ano','$obs')";

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
<h3> Cadastro Pretensão de Férias Realizado com Sucesso </h3>
</center>

<a type="button" href="cadastro_pret_ferias.php" class="btn btn-secondary">Voltar</a>

</div>

