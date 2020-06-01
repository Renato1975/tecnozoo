<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>
<div class="container mt-2"> <h3> Consulta Registro de Resultados </h3></div>

<div class="container-fluid mt-3">
<table class="table" id="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Matricula SAP</th>
      <th scope="col">Nome</th>
      <th scope="col">Supervisor</th>
      <th scope="col">Mês </th>
      <th scope="col">Ausência Justificada</th>
      <th scope="col">Ausência Injustificada</th>
      <th scope="col">Qualidade</th>
      <th scope="col">Aderência </th>
      <th scope="col">TMA</th>
      <th scope="col">TMO</th>
      <th scope="col">RCA Indevido</th>
      <th scope="col">NIP</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

    include 'conexao.php';

    $sql = "SELECT * FROM `indicador`";
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
      <td> <?php  echo $matsap ?></td>
      <td> <?php  echo $nome  ?></td>
      <td> <?php  echo $supervisor  ?></td>   
      <td> <?php  echo $mes ?></td>   
      <td> <?php  echo $ausjust  ?></td>   
      <td> <?php  echo $ausinjust ?></td>   
      <td> <?php  echo $qualidade ?></td>   
      <td> <?php  echo $aderencia  ?></td>   
      <td> <?php  echo $tma  ?></td>   
      <td> <?php  echo $tmo ?></td>   
      <td> <?php  echo $rca?></td>   
      <td> <?php  echo $nip  ?></td>      

      <td><a class="btn btn-sm btn-warning" style="color:#fff" href="edcadResultado.php?id=<?php echo $id_indicador ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>   
      <td><a class="btn btn-sm btn-danger" style="color:#fff" href="delcadResultado.php?id=<?php echo $id_indicador ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>          
    </tr>
    <?php } ?>

  </tbody>
</table>
</div>

<script>$("#table").fixedHeader(800);// 100 px of height for the table</script>

  <div class="container mt-5">
  <a type="button" href="cadastroResultado.php" class="btn btn-secondary">Voltar</a>
  </div>

<?php

include 'includes/footer.php';

?>
