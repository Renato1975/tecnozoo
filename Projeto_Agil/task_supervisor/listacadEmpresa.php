<?php

include 'includes/head.php';
include 'includes/navbar.php';

?>

<div class="container mt-2"> <h3> Lista Resgistros Dados do Agentes Empresa </h3></div>
<div class="container-fluid mt-3">
<table class="table" id="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email Corporativo</th>
      <th scope="col">Matrícula SAP</th>
      <th scope="col">Data de Admissão </th>
      <th scope="col">Matrícula IEX</th>
      <th scope="col">Login Avaya</th>
      <th scope="col">Ramal Home Office </th>
      <th scope="col">Login de Rede </th>
      <th scope="col">Ilha - Célula </th>
      <th scope="col">Supervisor</th>
      <th scope="col">Coordenador</th>
      <th scope="col">Gerente</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

    include 'conexao.php';

    $sql = "SELECT * FROM `cadempresa`";
    $buscar = mysqli_query($conexao,$sql);

    while ($array = mysqli_fetch_array($buscar)) {
        
        $id_empresa = $array['id_empresa'];
        $nome = $array['nome'];
        $email = $array['email'];
        $matsap = $array['matsap'];
        $admissao = $array['admissao'];
        $matiex = $array['matiex'];
        $avaya = $array['avaya'];
        $ramalhome = $array['ramalhome'];
        $loginrede = $array['loginrede'];
        $ilha = $array['ilha'];
        $supervisor = $array['supervisor'];
        $coordenador = $array['coordenador'];
        $gerente = $array['gerente'];    
    ?>
      <td> <?php  echo $nome  ?></td>
      <td> <?php  echo $email  ?></td>   
      <td> <?php  echo $matsap  ?></td>   
      <td> <?php  echo $admissao  ?></td>   
      <td> <?php  echo $matiex  ?></td>   
      <td> <?php  echo $avaya  ?></td>   
      <td> <?php  echo $ramalhome  ?></td>   
      <td> <?php  echo $loginrede  ?></td>   
      <td> <?php  echo $ilha  ?></td>   
      <td> <?php  echo $supervisor ?></td>   
      <td> <?php  echo $coordenador  ?></td>   
      <td> <?php  echo $gerente  ?></td>  

      <td><a class="btn btn-sm btn-warning" href="edcadEmpresa.php?id=<?php echo $id_empresa ?>" style="color:#fff" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a> </td>

      <td><a class="btn btn-sm btn-danger" href="delcadEmpresa.php?id=<?php echo $id_empresa  ?>"role="button"><i class="far fa-trash-alt"></i>&nbsp; Excluir</td>
           
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
