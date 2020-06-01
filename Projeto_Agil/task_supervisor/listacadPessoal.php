<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>
<div class="container mt-2"> <h3> Lista Resgistros Dados do Agentes Pessoal</h3></div>

<div class="container-fluid mt-3">
<table class="table" id="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email Pessoal</th>
      <th scope="col">Endereço</th>
      <th scope="col">Complemento endereço </th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Município </th>
      <th scope="col">CEP</th>
      <th scope="col">CPF</th>
      <th scope="col">RG</th>
      <th scope="col">Telefone Celular</th>
      <th scope="col">Telefone 2º opção</th>
      <th scope="col">Estado Civil</th>
      <th scope="col">Possui Filhos</th>
      <th scope="col">Anivesário</th>
      <th scope="col">Cuidado Especial</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

    include 'conexao.php';

    $sql = "SELECT * FROM `cadpessoal`";
    $buscar = mysqli_query($conexao,$sql);

    while ($array = mysqli_fetch_array($buscar)) {
        
        $id_cadpessoal = $array['id_cadpessoal'];
        $nome = $array['nome'];
        $email = $array['email'];
        $local = $array['local'];
        $complemento = $array['complemento'];
        $bairro = $array['bairro'];
        $cidade = $array['cidade'];
        $estado = $array['estado'];
        $municipio = $array['municipio'];
        $cep = $array['cep'];
        $cpf = $array['cpf'];
        $rg = $array['rg'];
        $telefone = $array['telefone'];
        $telefone2 = $array['telefone2']; 
        $estadocivil = $array['estadocivil']; 
        $filho = $array['filho']; 
        $aniversario = $array['aniversario']; 
        $cuidado = $array['cuidado'];   
    ?>
      <td> <?php  echo $nome  ?></td>
      <td> <?php  echo $email  ?></td>
      <td> <?php  echo $local  ?></td>   
      <td> <?php  echo  $complemento ?></td>   
      <td> <?php  echo $bairro  ?></td>   
      <td> <?php  echo $cidade  ?></td>   
      <td> <?php  echo $estado ?></td>   
      <td> <?php  echo $municipio  ?></td>   
      <td> <?php  echo $cep  ?></td>   
      <td> <?php  echo $cpf  ?></td>   
      <td> <?php  echo $rg ?></td>   
      <td> <?php  echo $telefone  ?></td>   
      <td> <?php  echo $telefone2  ?></td> 
      <td> <?php  echo $estadocivil ?></td>  
      <td> <?php  echo $filho  ?></td>   
      <td> <?php  echo $aniversario  ?></td>  
      <td> <?php  echo $cuidado  ?></td>

      <td><a class="btn btn-sm btn-warning" style="color:#fff" href="edcadPessoal.php?id=<?php echo $id_cadpessoal  ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>  

      <td><a class="btn btn-sm btn-danger" style="color:#fff" href="delcadPessoal.php?id=<?php echo $id_cadpessoal  ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a> </td>          
    </tr>
    <?php } ?>

  </tbody>
</table>
</div>

<script>$("#table").fixedHeader(800);</script>

<div class="container mt-5">
<a type="button" href="cadastroPessoal.php" class="btn btn-secondary">Voltar</a>
</div>

<?php

include 'includes/footer.php';

?>
