<!DOCTYPE html>

<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="generator" content="Jekyll v3.8.6">
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/185b20baa0.js" crossorigin="anonymous"></script>

</head>

  <body>
      <nav class="navbar navbar-dark bg-dark flex-md-nowrap p-1 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"> <i class="fas fa-poll"></i>&nbsp;SUPERVISOR CONTROL</a>

      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="https://getbootstrap.com/docs/4.4/examples/dashboard/#">Sign out</a>
        </li>
      </ul>
    </nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=pedidos">
              Pedidos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=produtos">
              Produtos 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=clientes">
              Clientes
            </a>
          </li>
        </ul>       
      </div>
    </nav>
     <!-- conteudo   --> 
     
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          </div>  
        </div>
      </div>

      <?php

      if(isset($_GET['pagina'])){
        switch ($_GET['pagina']) {
          case 'pedidos':
          echo '<h2> Pedidos </h2>';
          break;
          case 'produtos':
          echo '<h2> Produtos </h2>';
          break;          
          case 'clientes':
          echo '<h2> Clientes </h2>';
          break;        
          default:
          echo ' nenhuma opção escolhida ';
          break;
        }
      }



      ?>
    
    </main>
  </div>
</div>

<!-- Bootrap via cdn -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body></html>