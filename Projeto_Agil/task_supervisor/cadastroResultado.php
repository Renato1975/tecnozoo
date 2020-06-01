<?php

include 'includes/head.php';
include 'includes/navbar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Resultados</title>
</head>
<body>
<div class="container mt-5">
<div class="container"><h3> Cadastro de Resultados</h3></div>
  <form action="" method="post"> 
  <div class="container mt-5 form-group">                
  <label>Digite o Nome</label>               
  <input type="text" name="nome">  
  <input type="submit" name="search" value="Localizar">         
  </div>                            
  </form>
  <form action="dado-inc-resultado.php" method="post">

  <!-- abrir o bloco para fazer a query no banco de dados-->

  <?php

$servername ="localhost";
$database ="supercontrol";
$username ="root";
$password =""; 
$conexao = mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['search'])){

    $nome = htmlspecialchars($_POST['nome']);                            
    $sql ="SELECT * FROM cadempresa WHERE nome like '%$nome%'";
    $buscar =  mysqli_query($conexao,$sql);

    while ($row = mysqli_fetch_array($buscar)) {

    ?>

<div class="container mt-5">
    <div class="row">
        <div class="form-group col-6 ">
          <label>Nome Agente</label>
          <input type="text" class="form-control" name="nome" style="width:300px;" value="<?php echo $row['nome'] ?> ">
        </div>
        <div class="form-group col-6">
          <label>Matrícula</label>
          <input type="text" class="form-control" name="matsap" style="width:300px;"value="<?php echo $row['matsap'] ?>">
        </div>
      </div>
  </div>
  <div class="container mt-2">
    <div class="row">
        <div class="form-group col-6 ">
          <label>Mês </label>
          <select class="form-control col-7" name="mes">
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
          <input type="text" class="form-control" name="supervisor" style="width:300px;" value="<?php echo $row['supervisor'] ?>">
        </div>
      </div>
  </div>
  <div class="container mt-5">
    <div class="row">
        <div class="form-group col-6 ">
          <label><i class="fas fa-chart-line"></i>&nbsp; Ausências Justificadas </label>
          <input type="text" class="form-control" name="ausjust" style="width:300px;" autocomplete="off">
        </div>
        <div class="form-group col-6">
          <label><i class="fas fa-chart-line"></i>&nbsp; Ausências Injustificadas </label>
          <input type="text" class="form-control" name="ausinjust" style="width:300px;" autocomplete="off">
        </div>
      </div>
  </div>
  <div class="container mt-5">
      <div class="row">
        <div class="form-group col-6 ">
          <label><i class="fas fa-chart-line"></i>&nbsp; Qualidade </label>
          <input type="text" class="form-control" name="qualidade" style="width:300px;"autocomplete="off">
        </div>
        <div class="form-group col-6">
          <label><i class="fas fa-chart-line"></i>&nbsp; Aderência </label>
          <input type="text" class="form-control" name="aderencia" style="width:300px;" autocomplete="off">
        </div>
      </div>
  </div>
  <div class="container mt-5">
      <div class="row">
        <div class="form-group col-6 ">
          <label><i class="fas fa-chart-line"></i>&nbsp; TMA </label>
          <input type="text" class="form-control" name="tma" style="width:300px;">
        </div>
        <div class="form-group col-6">
          <label><i class="fas fa-chart-line"></i>&nbsp; TMO </label>
          <input type="text" class="form-control" name="tmo" style="width:300px;" autocomplete="off">
        </div>
      </div>
  </div> 
  <div class="container mt-5">
      <div class="row">
        <div class="form-group col-6 ">
          <label><i class="fas fa-chart-line"></i>&nbsp; RCA Indevido </label>
          <input type="text" class="form-control" name="rca" style="width:300px;">
        </div>
        <div class="form-group col-6">
          <label><i class="fas fa-chart-line"></i>&nbsp; NIP </label>
          <input type="text" class="form-control" name="nip" style="width:300px;" autocomplete="off">
        </div>
      </div>
  </div>
    <div class="container mt-5" style="text-align:right">  
    <button  type="submit" class="btn btn-secondary">Cadastrar</button> 
  </div>
  </div>
  

</form>
      <?php                               
    }
}
    ?>

</body>
<?php
include 'includes/footer.php';
?>
</html>