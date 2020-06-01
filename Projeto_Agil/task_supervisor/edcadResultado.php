<?php

include 'includes/head.php';
include 'includes/navbar.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Resultados</title>
</head>
<body>
<div class="container mt-5">
<div class="container"><h3> Atualizar de Resultados</h3></div>
<form action="atualizaResultado.php" method="post">
<?php

include 'conexao.php';

$sql = "SELECT * FROM `indicador` WHERE id_indicador = $id";
$buscar = mysqli_query($conexao,$sql);

while ($array = mysqli_fetch_array($buscar)) {

    $id_indicador = $array['id_indicador'];
    $matsap = $array['matsap'];
    $nome = $array['nome'];
    $supervisor= $array['supervisor'];
    $mes= $array['mes'];
    $ausjust = $array['ausjust'];
    $ausinjust= $array['ausinjust'];
    $qualidade = $array['qualidade'];
    $aderencia= $array['aderencia'];
    $tma = $array['tma'];
    $tmo = $array['tmo'];
    $rca = $array['rca'];
    $nip= $array['nip'];

?>

<div class="container mt-5">
    <div class="row">
        <div class="form-group col-6 ">
          <label>Matrícula </label>
          <input type="text" class="form-control" name="matsap" style="width:300px;" value ="<?php echo $matsap ?>">
          <input type="text" class="form-control" name="id" style="width:300px; display:none " value ="<?php echo $id_indicador ?>" >
        </div>
        <div class="form-group col-6">
          <label>Nome Agente</label>
          <input type="text" class="form-control" name="nome" style="width:300px;" value ="<?php echo $nome ?>">
        </div>
      </div>
  </div>
  <div class="container mt-2">
    <div class="row">
        <div class="form-group col-6 ">
          <label>Mês </label>
          <select class="form-control col-7" name="mes" value ="<?php echo $mes ?>">
            <option></option>
            <option>Janeiro</option>
            <option>Fevereiro</option>
            <option>Março</option>
            <option>Abril</option>
            <option>Maio</option>
            <option>Junho</option>
            <option>Julho</option>
            <option>Agosto</option>
            <option>Setembro</option>
            <option>Outubro</option>
            <option>Novembro</option>
            <option>Dezembro</option>
          </select>
        </div>
        <div class="form-group col-6">
          <label>Supervisor</label>
          <input type="text" class="form-control" name="supervisor" style="width:300px" value ="<?php echo $supervisor ?>"  >
        </div>
      </div>
  </div>
  <div class="container mt-5">
    <div class="row">
        <div class="form-group col-6 ">
          <label><i class="fas fa-chart-line"></i>&nbsp; Ausências Justificadas </label>
          <input type="text" class="form-control" name="ausjust" style="width:300px;"placeholder="Insira a quantidade de ausências" value ="<?php echo $ausjust ?>" >
        </div>
        <div class="form-group col-6">
          <label><i class="fas fa-chart-line"></i>&nbsp; Ausências Injustificadas </label>
          <input type="text" class="form-control" name="ausinjust" style="width:300px;" value ="<?php echo $ausinjust ?>" >
        </div>
      </div>
  </div>
  <div class="container mt-5">
      <div class="row">
        <div class="form-group col-6 ">
          <label><i class="fas fa-chart-line"></i>&nbsp; Qualidade </label>
          <input type="text" class="form-control" name="qualidade" style="width:300px;" value ="<?php echo $qualidade ?>" >
        </div>
        <div class="form-group col-6">
          <label><i class="fas fa-chart-line"></i>&nbsp; Aderência </label>
          <input type="text" class="form-control" name="aderencia" style="width:300px;" value ="<?php echo $aderencia ?>" >
        </div>
      </div>
  </div>
  <div class="container mt-5">
      <div class="row">
        <div class="form-group col-6 ">
          <label><i class="fas fa-chart-line"></i>&nbsp; TMA </label>
          <input type="text" class="form-control" name="tma" style="width:300px;" value ="<?php echo $tma ?>" >
        </div>
        <div class="form-group col-6">
          <label><i class="fas fa-chart-line"></i>&nbsp; TMO </label>
          <input type="text" class="form-control" name="tmo" style="width:300px;"  value ="<?php echo $tmo ?>">
        </div>
      </div>
  </div> 
  <div class="container mt-5">
      <div class="row">
        <div class="form-group col-6 ">
          <label><i class="fas fa-chart-line"></i>&nbsp; RCA Indevido </label>
          <input type="text" class="form-control" name="rca" style="width:300px;" value ="<?php echo $rca ?>"  >
        </div>
        <div class="form-group col-6">
          <label><i class="fas fa-chart-line"></i>&nbsp; NIP </label>
          <input type="text" class="form-control" name="nip" style="width:300px;"  value ="<?php echo $nip ?>" >
        </div>
      </div>
  </div>
    <div class="container mt-5">
  <button type="submit" class="btn btn-secondary">Atualizar</button>
  </div>
  </div>
  
<?php }  ?>
</form>

</body>
<?php
include 'includes/footer.php';
?>
</html>
