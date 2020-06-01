<?php

include 'includes/head.php';
include 'includes/navbar.php';


?>

<div class="container mt-5">

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-tachometer-alt"> &nbsp;</i>Consulta de Resultados</h5>
        <p class="card-text"> Visualize os resultados da sua equipe</p>
        <a href="#" class="btn btn-dark">Dashboard</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="far fa-comments">&nbsp;</i>Registro de Feedbacks</h5>
        <p class="card-text">Realize o registro de feedbacks da sua equipe </p>
        <a href="cadastroFeedback.php" class="btn btn-dark">Registro de Feedbacks </a>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container mt-5">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-pencil-alt">&nbsp;</i>Diário de bordo </h5>
        <p class="card-text">Registre suas tarefas e organize sua agenda </p>
        <a href="cadastroTask.php" class="btn btn-dark">Tarefas</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-chalkboard"></i> &nbsp;Consulte seus Feebacks</h5>
        <p class="card-text">Aqui você pode consultar seus feedbacks</p>
        <a href="listacadFeedback.php" class="btn btn-dark"> Consulta Feedbacks</a>
      </div>
    </div>
  </div>
</div>
</div>


<div class="container mt-5">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="far fa-address-card"></i>&nbsp;Cadastro de dados da empresa </h5>
        <p class="card-text">Consulte os dados dos agentes da empresa </p>
        <a href="consultaEmpresa.php" class="btn btn-dark"> Consulta dados empresa</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-address-card"></i> &nbsp;Consulta de dados pessoais</h5>
        <p class="card-text">Consulta de dados pessoais </p>
        <a href="consultaPessoal.php" class="btn btn-dark">Consulte os dados pessoais</a>
      </div>
    </div>
  </div>
</div>
</div>
<?php

include 'includes/footer.php';

?>











