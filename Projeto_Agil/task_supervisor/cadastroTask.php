<?php

include 'includes/head.php';
include 'includes/navbar.php';

?>

<div class="container mt-3">
    <h3> Controle de Tarefas </h3>
    <form action="dado-inc-task.php" method="post" Class="mt-3">
    <div class="form-row">
        <div class="col-md-2">
        <label> Prazo </label>
        <input type="date" name="data" class="form-control" autocomplete="off">
        </div>
        <div class="col">
        <label> Tarefa </label>
        <input type="text" name="tarefa" class="form-control" autocomplete="off">
        </div>
    </div>
        <div class="form-row mt-4">
        <button type="submit" class="btn btn-secondary">Cadastrar</button>
        </div>
    </form>
</div>
<div class="container mt-4">
<table class="table" id="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Prazo</th>
      <th scope="col">Tarefa</th>     
      <th scope="col">Editar</th>   
      <th scope="col">Deletar</th>       
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

    include 'conexao.php';

    $sql = "SELECT * FROM `cadtarefa`";
    $buscar = mysqli_query($conexao,$sql);

    while ($array = mysqli_fetch_array($buscar)) {
        
        $data  = $array['data'];
        $tarefa  = $array['tarefa'];
  
    ?>
      <td> <?php  echo $data ?></td>
      <td> <?php  echo $tarefa ?></td>
      
      <td><a class="btn btn-sm btn-warning" style="color:#fff" href="#" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a> </td>    
      <td><a class="btn btn-sm btn-danger" style="color:#fff" href="#" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a> </td>         
    </tr>
    <?php } ?>

  </tbody>
</table>
</div>
<script>$("#table").fixedHeader(600);</script>

<?php

include 'includes/footer.php';

?>