<?php
// Conexão
require_once 'config.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
  header('Location: index.php');
endif;

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM users WHERE id_user = '$id'";
$resultado = mysqli_query($db, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($db);
?>



<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.5/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">


    <title>Sis Apoio</title>

    <!-- Font -->
    <script src="https://kit.fontawesome.com/185b20baa0.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
  <body>
    <nav class="navbar navbar-primary bg-primary flex-md-nowrap p-0">
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="menu.php" style="color:#fff" 
      ><i class="fab fa-angellist" ></i>&nbsp;Sis Apoio</a>
       <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap" style="margin-right: 50px;" >
          <p style="color: #fff"><u> Oi <?php echo $dados['nome']; ?>!&nbsp;<i class="far fa-smile-wink"></i></u></p>
          <center>
          <a class="nav-link" href="logout.php" style="color: #fff"><i class="fas fa-sign-out-alt">&nbsp;</i>Sair</a>
          </center>
        </li>
      </ul>
    </nav>

<div class="container-fluid"  style="margin-top: 20px;">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="?pagina=registro">
              <img src="images/pencil_tip.png" style="width: 25px; height: 25px;">
              Registro
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=processo">
              <img src="images/bulletin_board.png" style="width: 25px; height: 25px;">
              Processos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=resultado">
              <img src="images/monitor.png" style="width: 25px; height: 25px;">
              Resultados
            </a>
          </li>
        </ul>
      </div>
   </nav>

   <!--Conteudo -->

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sis Apoio</h1>
      </div>

      <div class="container">

        <img src="images/statistics.png" style="width: 300px; height: 300px;">
      </div>

      <?php 

        if (isset($_GET['pagina'])) {
            
            switch ($_GET['pagina']) {
              case 'registro':
                
                header('Location: tela.php');
                break;
                case 'processo':
                header('Location: processo.php');
                break;   
                case 'resultado':
                echo "<h3> Resultados </3>";
                header('Location: resultado.php');
                break;            
                default:
                echo "nenhuma opção escolhida";
                break;
            }
        }

       ?>

    </main>
  </div>
</div>
<script src="./Dashboard Template · Bootstrap_files/jquery-3.5.1.slim.min.js.download" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body></html>