<?php

include 'includes/head.php';
include 'includes/navbar.php';

include 'conexao.php';

$id = $_GET['id'];

?>
<div class="container mt-5">
<h3> Cadastro Feedback</h3>
<form action="atualizaFeedback.php" method="post">

<?php

    $sql = "SELECT * FROM `cadfeedback` WHERE id_feedback = $id";
    $buscar = mysqli_query($conexao,$sql);

    while ($array = mysqli_fetch_array($buscar)) {

        $id_feedback = $array['id_feedback'];
        $matsap = $array['matsap'];
        $data = $array['data'];
        $nome = $array['nome'];
        $assunto = $array['assunto'];
        $motivo = $array['motivo'];
        $feedback = $array['feedback'];
        $plano = $array['plano'];
    ?>

  <div class="row mt-4">
    <div class="form-group col-md-3">
    <label> Matrícula </label>
      <input type="text" name="matsap" class="form-control" value="<?php echo $matsap ?>">
      <input type="number" name="id" class="form-control" value="<?php echo $id_feedback ?>" style="display:none">
    </div>
    <div class="form-group col-md-3">
    <label> Data Feedback </label>
      <input type="date" name="data" class="form-control" value="<?php echo $data ?>">
    </div>
    <div class="form-group col-md-6">
    <label> Nome </label>
      <input type="text" name="nome" class="form-control" value="<?php echo $nome ?>">
    </div>
  </div>
  <div class="row mt-3">
    <div class="form-group col-md-6">
    <label> Assunto </label>
      <input type="text" name="assunto" class="form-control" value="<?php echo $assunto ?>">
    </div>
    <div class="form-group col-md-6">
    <label> Motivo </label>
      <input type="text" name="motivo" class="form-control" value="<?php echo $motivo ?>">
    </div>
  </div>
     <div class="form-group mt-3">
    <label> Descrição feedback </label>
      <textarea type="text" name="feedback" rows="6" class="form-control" value="<?php echo $feedback ?>"></textarea>
    </div>
    <div class="form-group mt-3">
    <label> Plano de Ação </label>
      <textarea type="text" name="plano" rows="4" class="form-control" value="<?php echo $plano ?>"></textarea>
    </div>
  <div class="mt-5">
  <button type="submit" class="btn btn-secondary">Atualizar</button>
  </div>
    <?php } ?>
</form>
</div>

<?php

include 'includes/footer.php';

?>