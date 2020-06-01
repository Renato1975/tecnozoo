<?php

include 'includes/head.php';
include 'includes/navbar.php';


?>
<div class="container mt-2"> <h3> Consulta de Feedbacks </h3></div>

<div class="container-fluid mt-3">
<table class="table" id="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Matrícula</th>
      <th scope="col">Data Feedback</th>
      <th scope="col">Nome</th>
      <th scope="col">Assunto </th>
      <th scope="col">Motivo</th>
      <th scope="col">Descrição Feedback </th>
      <th scope="col">Plano de Ação</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

    include 'conexao.php';

    $sql = "SELECT * FROM `cadfeedback`";
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
      <td> <?php  echo $matsap  ?></td>
      <td> <?php  echo $data  ?></td>
      <td> <?php  echo $nome  ?></td>   
      <td> <?php  echo $assunto ?></td>   
      <td> <?php  echo $motivo  ?></td>   
      <td> <?php  echo $feedback  ?></td>   
      <td> <?php  echo $plano ?></td>   

      <td><a class="btn btn-sm btn-warning" style="color:#fff" href="edcadFeedback.php?id=<?php echo $id_feedback  ?>"><i class="far fa-edit"></i>&nbsp;Editar</a></td>   

      <td><a class="btn btn-sm btn-danger" style="color:#fff" href="delcadFeedback.php?id=<?php echo $id_feedback ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a> </td>         
    </tr>
    <?php } ?>

  </tbody>
</table>
</div>

<script>$("#table").fixedHeader(700);// 100 px of height for the table</script>

<div class="container mt-5">
<a type="button" href="cadastroFeedback.php" class="btn btn-secondary">Voltar</a>
</div>

<?php

include 'includes/footer.php';

?>