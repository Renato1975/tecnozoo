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
<html lang="pt-br">
<head>
  <title>SisApoio</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <script src="https://kit.fontawesome.com/185b20baa0.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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


<div class="container " style="margin-top: 50px;">
   <h4><i class="fas fa-headset"></i>&nbsp; Localizar Agente</h4>
   <form action="" method="post">
     <div class="form-row">
      <div class="form-group col-md-2">
        <input type="text" class="form-control" name="login" autocomplete="off">
           </div>
      <div class="form-group col-md-2">
        <input class="form-control btn btn-sm btn-primary" type="submit" name="search" value="Localizar">  
      </div>
      </div>
    </form>
</div>

<?php 

include 'config.php';

if (isset($_POST['search'])) {

    $login = $_POST['login'];
    $sql = "SELECT * FROM baseagente WHERE id_login = $login";
    $buscar = mysqli_query($db,$sql);

    while ($row = mysqli_fetch_array($buscar)) {
  

 ?>


<form action="dado-inc-registro.php" method="post">

  <div class="container" style="margin-top: 30px;">
    <h4> <u><i class="far fa-edit"></i>&nbsp;Registro de Atendimento</u></h4>
    <div class="form-row" style="margin-top: 20px;">
      <div class="form-group col-md-2">
        <label>Login</label>
        <input type="number" class="form-control" name="login" value="<?php echo $row['Id_login'] ?>">
      </div>
      <div class="form-group col-md-4">
        <label>Nome Agente</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $row['Nome_Agente'] ?>" >
      </div>
      <div class="form-group col-md-4">
        <label>Supervisor</label>
        <input type="text" class="form-control" name="supervisor" value="<?php echo $row['Nome_Supervisor'] ?>">
      </div>
    </div>
  </div>

<?php 
    }  
}
?>

<?php
  include_once 'config.php';
  $query = "SELECT * FROM country Order by country_name";
  $result = $db->query($query);
?>


<div class="container " style="margin-top: 50px;"> 
  <div class="form-row" style="margin-top: 10px;">
    <div class="form-group col-md-2">
      <label for="email">Acionamento</label>
          <select name="country" id="country" class="form-control" onchange="FetchState(this.value)"  required>
            <option value="">Selecione</option>
          <?php
            if ($result->num_rows > 0 ) {
               while ($row = $result->fetch_assoc()) {
                echo '<option value='.$row['id'].'>'.$row['country_name'].'</option>';

                }
            }
          ?>  
          </select>
    </div>
    <div class="form-group col-md-2">
         <label for="pwd">Motivo</label>
          <select name="state" id="state" class="form-control" onchange="FetchCity(this.value)"  required>
            <option>Selecione</option>
          </select>
        </div>
        <div class="form-group col-md-2">
            <label for="pwd">Visão Analítica</label>
              <select name="city" id="city" class="form-control">
                <option>Selecione</option>
              </select>
        </div>
          <div class="form-group col-md-4">
            <label for="email">Assunto</label>
                <select name="assunto" id="country" class="form-control" required>
                  <option value="">Selecione</option>

                  <?php 

                    include 'config.php';

                    $sql = "select * from assunto_apoio";
                    $buscar = mysqli_query($db,$sql);

                    while ($array = mysqli_fetch_array($buscar)) {
                      
                      $id = $array['id'];
                      $assunto = $array['assunto'];

                    ?>

                    <option value=""><?php echo utf8_decode($assunto) ?></option>
                   
                   <?php } ?>                 

                </select>
          </div>
      </div>

      <!-- Assunto -->

        <div class="form-row" style="margin-top: 20px;">

          <div class="form-group col-md-2">
               <label for="pwd">Portal</label>
                <select name="portal" id="state" class="form-control" required>
                  <option>Sim</option>
                  <option>Não</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                  <label for="pwd">Melhoria?</label>
                    <select name="melhoria" id="city" class="form-control">
                      <option>Selecione</option>
                      <option>Sim</option>
                      <option>Não</option>
                    </select>
              </div>
              <div class="form-group col-md-2">
                  <label for="pwd">Sugestão</label>
                    <select name="sugestao" id="city" class="form-control">
                      <option>Selecione</option>
                      <option>Melhorar Portal</option>
                      <option>Treinamento</option>
                      <option>Outras Sugestões</option>
                    </select>
              </div>
        <div class="form-group col-md-4">
          <label for="pwd">Apoio</label>
          <select type="text" class="form-control" name="apoio" autocomplete="off"> 
          <option> Selecione</option>
          <?php 

            include 'config.php';

            $sql = "select * from baseapoio";
            $buscar = mysqli_query($db,$sql);

            while ($array = mysqli_fetch_array($buscar )) {
              $idapoio = $array['Id_login'];
              $nome = $array['Nome_Agente'];

           ?>

            <option> <?php  echo utf8_decode($nome) ?></option>
          
           <?php  } ?>

          </select>
        </div>

            </div>
      </div>

          <!--  Fim Assunto -->



<div class="container">
      <div class="form-row">
          <div class="form-group col-md-8">
            <label for="pwd">Descrição Atendimento</label>
                <textarea name="registro" id="city" class="form-control">
              </textarea>
          </div>
 
          <div class="form-group col-md-2" style="margin-top: 35px;">
          <button type="submit" class="btn btn-sm btn-primary" href="dado-inc-registro.php">Registrar</button>
          </div>
          </div>
    </div>
  </form>



<script type="text/javascript">
  function FetchState(id){
    $('#state').html('');
    $('#city').html('<option>Select City</option>');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { country_id : id},
      success : function(data){
         $('#state').html(data);
      }

    })
  }

  function FetchCity(id){ 
    $('#city').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { state_id : id},
      success : function(data){
         $('#city').html(data);
      }

    })
  }

  
</script>

</body>
</html>
