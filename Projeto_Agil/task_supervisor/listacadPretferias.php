<?php

include 'includes/head.php';
include 'includes/navbar.php';

?>

<div class="container mt-2"> <h3> Controle Pretensão Férias</h3></div>
<div class="container-fluid mt-3">
<table class="table" id="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Admissão</th>
      <th scope="col">Tempo Casa</th>
      <th scope="col">Supervisor</th>
      <th scope="col">Opção 1º</th>
      <th scope="col">Opção 2º</th>
      <th scope="col">Ano</th>
      <th scope="col">Observação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

    include 'conexao.php';

    $sql = "SELECT * FROM `pretferias`";
    $buscar = mysqli_query($conexao,$sql);

    while ($array = mysqli_fetch_array($buscar)) {
        
        $id_preferias = $array['id_preferias'];
        $nome = $array['nome'];
        $admissao = $array['admissao'];
        $tempocasa = $array['tempocasa'];
        $supervisor = $array['supervisor'];
        $op1 = $array['op1'];
        $op2 = $array['op2'];
        $ano = $array['ano'];
        $obs = $array['obs'];
 
    ?>
      <td> <?php  echo $nome  ?></td>
      <td> <?php  echo $admissao  ?></td>   
      <td> <?php  echo $tempocasa  ?></td>   
      <td> <?php  echo $supervisor  ?></td>   
      <td> <?php  echo $op1  ?></td>   
      <td> <?php  echo $op2  ?></td>   
      <td> <?php  echo $ano  ?></td>   
      <td> <?php  echo $obs  ?></td>   

      <td><a class="btn btn-sm btn-warning" href="edcadPretFerias.php?id=<?php echo $id_preferias ?>" style="color:#fff" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a> </td>

      <td><a class="btn btn-sm btn-danger" href="delcadEmpresa.php?id=<?php echo $id_preferias  ?>"role="button"><i class="far fa-trash-alt"></i>&nbsp; Excluir</td>
           
    </tr>
    <?php } ?>

  </tbody>
</table>
</div>
<script>$("#table").fixedHeader(700);// 100 px of height for the table</script>


<div class="container-fluid mt-5">
<a type="button" href="cadastroEmpresa.php" class="btn btn-secondary">Voltar</a>
</div>


<?php

include 'includes/footer.php';

?>
