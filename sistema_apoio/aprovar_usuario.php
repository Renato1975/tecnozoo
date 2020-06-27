<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/185b20baa0.js" crossorigin="anonymous"></script>

    <title>SisApoio</title>
  </head>
  <body>
    <?php include 'nav.php'; ?>
<div class="container" style="margin-top: 50px;">
  <h4> Aprovação de Usuários </h4>
  <table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nível</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    <?php 

      include 'config.php';
      $sql = "SELECT * FROM users WHERE status = 'Inativo'";
      $buscar = mysqli_query($db,$sql);


      while ($array = mysqli_fetch_array($buscar)) {
       
       $id_user = $array['id_user'];
       $nome = $array['nome'];
       $email = $array['email'];
       $nivel = $array['nivel'];

     
    ?>
      <tr>
        <td scope="col"><?php echo $nome ?></td>
        <td scope="col"><?php echo $email ?></td>
        <td scope="col"><?php echo $nivel ?></td>


        <td scope="col">

          <a href="aprovar_user.php?id=<?php echo $id_user ?>&nivel= 1" class="btn btn-sm btn-primary" style="color:#fff"><i class="fas fa-check"></i>&nbsp;Administrador</a>     

          <a href="aprovar_user.php?id=<?php echo $id_user ?>&nivel= 2" class="btn btn-sm btn-success" style="color:#fff"><i class="fas fa-check"></i>&nbsp;Supervisor </a>
         
          <a href="aprovar_user.php?id=<?php echo $id_user ?>&nivel= 3" class="btn btn-sm btn-info" style="color:#fff"><i class="fas fa-check"></i>&nbsp;Agente </a>

          <a href="deletar_user.php?id=<?php echo $id_user ?>&nivel=<?php echo $nivel ?>" class="btn btn-sm btn-danger" style="color:#fff"><i class="fas fa-check"></i>&nbsp;Excluir </a>
            
        </tr>  

    <?php  } ?>
  
</table>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>