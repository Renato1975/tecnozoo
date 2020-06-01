<?php

include 'includes/head.php';
include 'includes/navbar.php';

?>
<div class="container mt-5">
<h3> Cadastro Feedback</h3>
<form action="dado-inc-feedback.php" method="post">
  <div class="row mt-4">
    <div class="form-group col-md-3">
    <labe> Matrícula </labe>
      <input type="text" name="matsap" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
    <labe> Data Feedback </labe>
      <input type="date" name="data" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-6">
    <labe> Nome </labe>
      <input type="text" name="nome" class="form-control" autocomplete="off">
    </div>
  </div>
  <div class="row mt-3">
    <div class="form-group col-md-6">
    <labe> Assunto </labe>
      <input type="text" name="assunto" class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-6">
    <labe> Motivo </labe>
      <input type="text" name="motivo" class="form-control" autocomplete="off">
    </div>
  </div>
     <div class="form-group mt-3">
    <label> Descrição feedback </label>
      <textarea type="text" name="feedback" rows="6" class="form-control" autocomplete="off"></textarea>
    </div>
    <div class="form-group mt-3">
    <labe> Plano de Ação </labe>
      <textarea type="text" name="plano" rows="4" class="form-control" autocomplete="off"></textarea>
    </div>
  <div class="mt-5">
  <button type="submit" class="btn btn-secondary">Cadastrar</button>
  </div>
</form>
</div>

<?php

include 'includes/footer.php';

?>