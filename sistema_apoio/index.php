<?php
// Conexão
require_once 'config.php';
include 'script/password.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['acessar'])):
  $erros = array();
  $login = mysqli_escape_string($db, $_POST['usuario']);
  $senha = mysqli_escape_string($db, $_POST['senha']);

  if(isset($_POST['acessar'])):

    setcookie('usuario', $login, time()+3600);
    setcookie('senha', sha1($senha), time()+3600);
  endif;

  if(empty($login) or empty($senha)):
    $erros[] = "<h4> O campo login/senha precisa ser preenchido </h4>";
  else:

    $sql = "SELECT email FROM users WHERE email = '$login'";
    $resultado = mysqli_query($db, $sql);    

    if(mysqli_num_rows($resultado) > 0):
        $senha = sha1($senha);       
        $sql = "SELECT * FROM users WHERE email = '$login' AND senha = '$senha'";

        $resultado = mysqli_query($db, $sql);

          if(mysqli_num_rows($resultado) == 1):
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($db);
            $_SESSION['logado'] = true;
            $_SESSION['id_usuario'] = $dados['id_user'];
            header('Location: menu.php');
          else:
            $erros[] = "<h4> Usuário e senha não conferem </h4>";
          endif;

    else:
      $erros[] = "<h4> Usuário inexistente </h4>";
    endif;

  endif;

endif;
?>


<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.5/examples/sign-in/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sis Apoio</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="./Signin Template · Bootstrap_files/signin.css" rel="stylesheet">
  </head>

  <div class="container" style="width: 300px; margin-top: 80px;" >
     <?php 
        if(!empty($erros)):
          foreach($erros as $erro):
            echo $erro;
          endforeach;
        endif;
    ?>
  <body class="text-center">
    <form class="form-signin" action="" method="post">

      <img class="mb-4" src="images/logo.png" alt="" width="82" height="82">
      <h1 class="h3 mb-3 font-weight-normal">Acesso SisApoio</h1>

      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" name="usuario" class="form-control" placeholder="Email" autocomplete="off" required="" autofocus="">

      <label for="inputPassword" class="sr-only">Senha</label>
      <br>
      <input type="password" name="senha" class="form-control" placeholder="Senha"  autocomplete="off" required="">

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="acessar" style="margin-top: 25px;">Acessar</button>
      
     </form>
  </div>

  <center style="margin-top: 15px;">    
    <p> Você ainda não possui cadastro?</p> <a href="cadastro_usuario_externo.php">Clique aqui!</a>
  </center>

   <p class="mt-5 mb-3 text-muted">© Desenvolvido por Renato Braga </p>


</body></html>