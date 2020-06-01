<?php

include 'includes/head.php';
include 'includes/navbar.php';


?>
<div class="container mt-5">
<h1 class="text-center">Consulta Dados Empresa </h1>
<form action="" method="post"> 
<div class="container mt-5 form-group">                
<label>Digite o Nome</label>               
<input type="text" name="nome">  
<input type="submit" name="search" value="Localizar">         
</div>                            
</form>

<?php

$servername ="localhost";
$database ="supercontrol";
$username ="root";
$password =""; 
$conexao = mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['search'])){

    $nome = htmlspecialchars($_POST['nome']);                            
    $sql ="SELECT * FROM cadempresa WHERE nome like '%$nome%'";
    $buscar =  mysqli_query($conexao,$sql);

    while ($row = mysqli_fetch_array($buscar)) {

    ?>
<form action="" method="post" class="mt-5">
        <div class="form-row mt-4">
            <div class="form-group col-md-3">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome"  value="<?php echo $row['nome'] ?>"  >
            </div>
            <div class="form-group col-md-3">
            <label>Email Corporativo</label>
            <input type="email" class="form-control" name="email" placeholder="Digite o email"  value="<?php echo $row['email'] ?>"   >
            </div>
            <div class="form-group col-md-3">
            <label>Matricula SAP</label>
            <input type="text" class="form-control" name="matsap" placeholder="SAP"  value="<?php echo $row['matsap'] ?>"   >
            </div>
            <div class="form-group col-md-3">
            <label>Data Admissão</label>
            <input type="date" class="form-control" name="admissao" placeholder="Admissão" value="<?php echo $row['admissao'] ?>" >
            </div>
        </div>
        <div class="form-row mt-3">            
            <div class="form-group col-md-3">
            <label>Matrícula IEX</label>
            <input type="text" class="form-control" name="matiex" value="<?php echo $row['matiex'] ?>" > 
            </div>
            <div class="form-group col-md-3">
            <label>login Avaya</label>
            <input type="text" class="form-control" name="avaya" value="<?php echo $row['avaya'] ?>" > 
            </div>
            <div class="form-group col-md-3">
            <label>Ramal Home Office</label>
            <input type="text" class="form-control" name="ramalhome" placeholder="Ramal Home" value="<?php echo $row['ramalhome'] ?>"  >
            </div>
            <div class="form-group col-md-3">
            <label>Login de Rede</label>
            <input type="text" class="form-control" name="loginrede" placeholder="Rede" value="<?php echo $row['loginrede'] ?>"  >
            </div>
        </div>
        <div class="form-row mt-3">
            <div class="form-group col-md-3">
            <label>Ilha - Célula </label>
            <input class="form-control" name="ilha" value="<?php echo $row['ilha'] ?>"   >
            </div>
            <div class="form-group col-md-3">
            <label>Supervisor</label>
            <input class="form-control" name="supervisor" value="<?php echo $row['supervisor'] ?>"   >
            </div>
            <div class="form-group col-md-3">
            <label>Coordenador</label>
            <input class="form-control" name="coordenador" value="<?php echo $row['coordenador'] ?>"  >
            </div>
            <div class="form-group col-md-3">
            <label>Gerente</label>
            <input class="form-control" name="gerente" value="<?php echo $row['gerente'] ?>"   >
        </div>
</form>
    <?php                               
    }
}
    ?>
    </div>   

<?php

include 'includes/footer.php';

?>

