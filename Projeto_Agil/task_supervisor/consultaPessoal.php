<?php

include 'includes/head.php';
include 'includes/navbar.php';


?>
<div class="container mt-5">
<h1 class="text-center">Consulta Dados Pessoais </h1>
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
    $sql ="SELECT * FROM cadpessoal WHERE nome like '%$nome%'";
    $buscar =  mysqli_query($conexao,$sql);

    while ($row = mysqli_fetch_array($buscar)) {

    ?>
<form action="dado-inc-pessoal.php" method="post" class="mt-5">
    <div class="form-row mt-5">
        <div class="form-group col-md-6">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $row['nome'] ?>" >
        </div>
        <div class="form-group col-md-6">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-4">
            <label>Endereço</label>
            <input type="text" class="form-control" name="local" value="<?php echo $row['local'] ?>">
        </div>
        <div class="form-group col-md-4 ">
            <label>Complemento Endereço </label>
            <input type="text" class="form-control" name="complemento" value="<?php echo $row['complemento'] ?>">
        </div>
        <div class="form-group col-md-4 ">
            <label>Bairro</label>
            <input type="text" class="form-control" name="bairro" value="<?php echo $row['bairro'] ?>">
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-3">
        <label>Cidade</label>
        <input type="text" class="form-control" name="cidade" value="<?php echo $row['cidade'] ?>">
        </div>
        <div class="form-group col-md-3">
        <label>Estado</label>
        <input type="text" class="form-control" name="estado" value="<?php echo $row['estado'] ?>">
        </div>
        <div class="form-group col-md-3">
        <label>Município</label>
        <input type="text" class="form-control" name="municipio" value="<?php echo $row['municipio'] ?>">
        </div>
        <div class="form-group col-md-3">
        <label>Cep</label>
        <input type="text" class="form-control" name="cep" value="<?php echo $row['cep'] ?>">
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-3">
        <label>CPF</label>
        <input type="text" class="form-control" name="cpf" value="<?php echo $row['cpf'] ?>">
        </div>
        <div class="form-group col-md-3">
        <label>RG</label>
        <input type="text" class="form-control" name="rg" value="<?php echo $row['rg'] ?>">
        </div>
        <div class="form-group col-md-3">
        <label>Telefone Celular</label>
        <input type="text" class="form-control" name="telefone" value="<?php echo $row['telefone'] ?>">
        </div>
        <div class="form-group col-md-3">
        <label>Telefone 2º opção</label>
        <input type="text" class="form-control" name="telefone2" value="<?php echo $row['telefone2'] ?>">
        </div>
    </div>
    <hr>
    <div class="container mt-3">
    <h3> Cadastro informações pessoais</h3>
    </div>
        <div class="form-row mt-5">  
        <div class="form-group col-md-4">
        <label>Estado Civil</label>
        <input type="text" class="form-control" name="estadocivil" value="<?php echo $row['estadocivil'] ?>">    
        </div>  
        <div class="form-group col-md-2">
        <label>Possui Filhos</label>
        <input type="text" class="form-control" name="filho" value="<?php echo $row['filho'] ?>">    
        </div>  
        <div class="form-group col-md-2">
        <label>Data Aniversário</label>
        <input type="date" class="form-control" name="aniversario" value="<?php echo $row['aniversario'] ?>">    
        </div>   
        <div class="form-group col-md-4">
        <label>*Algum cuidado Especial</label>
        <input type="text" class="form-control" name="cuidado" value="<?php echo $row['cuidado'] ?>">    
        </div>        
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

