<?php

include 'includes/head.php';
include 'includes/navbar.php';

include 'conexao.php';

$id = $_GET['id'];

?>

<div class="container mt-5">
    <h3> Atualiza dados pessoais </h3>
    <form action="atualizaPessoal.php" method="post">

    <?php

    $sql = "SELECT * FROM `cadpessoal` WHERE id_cadpessoal = $id";
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
    <div class="form-row mt-5">
        <div class="form-group col-md-6">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $nome ?> " autocomplete="off">
        <input type="number" class="form-control" name="id" value="<?php echo $id_cadpessoal ?>" style="display:none">
        </div>
        <div class="form-group col-md-6">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email ?>"  autocomplete="off">
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-4">
            <label>Endereço</label>
            <input type="text" class="form-control" name="local" value="<?php echo $local ?> " autocomplete="off">
        </div>
        <div class="form-group col-md-4 ">
            <label>Complemento Endereço </label>
            <input type="text" class="form-control" name="complemento" value="<?php echo $complemento ?> " autocomplete="off">
        </div>
        <div class="form-group col-md-4 ">
            <label>Bairro</label>
            <input type="text" class="form-control" name="bairro" value="<?php echo $bairro ?> " autocomplete="off">
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-3">
        <label>Cidade</label>
        <input type="text" class="form-control" name="cidade" value="<?php echo $cidade ?> " autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>Estado</label>
        <input type="text" class="form-control" name="estado" value="<?php echo $estado ?> "  autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>Município</label>
        <input type="text" class="form-control" name="municipio"  value="<?php echo $municipio ?> " autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>Cep</label>
        <input type="text" class="form-control" name="cep" value="<?php echo $cep ?> " autocomplete="off-set">
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-3">
        <label>CPF</label>
        <input type="text" class="form-control" name="cpf" value="<?php echo $cpf ?> " autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>RG</label>
        <input type="text" class="form-control" name="rg" value="<?php echo $rg ?> " autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>Telefone Celular</label>
        <input type="text" class="form-control" name="telefone" value="<?php echo $telefone ?> " autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>Telefone 2º opção</label>
        <input type="text" class="form-control" name="telefone2" value="<?php echo $telefone2 ?> " autocomplete="off">
        </div>
    </div>
    <hr>
    <div class="container mt-3">
    <h3> Atualiza informações pessoais</h3>
    </div>
        <div class="form-row mt-5">  
        <div class="form-group col-md-4">
        <label>Estado Civil</label>
        <input type="text" class="form-control" name="estadocivil" value="<?php echo $estadocivil ?> "  autocomplete="off">    
        </div>  
        <div class="form-group col-md-2">
        <label>Possui Filhos</label>
        <input type="text" class="form-control" name="filho"  value="<?php echo $filho ?> " autocomplete="off">    
        </div>  
        <div class="form-group col-md-2">
        <label>Data Aniversário</label>
        <input type="date" class="form-control" name="aniversario" value="<?php echo $aniversario ?> " autocomplete="off">    
        </div>   
        <div class="form-group col-md-4">
        <label>*Algum cuidado Especial</label>
        <input type="text" class="form-control" name="cuidado" value="<?php echo $cuidado ?> " autocomplete="off">    
        </div>        
    </div>
        <div class="form-row mt-5">
        <button type="submit" value="cadastrar" class="btn btn-secondary">Atualizar</button>
        </div>
        <?php } ?>
    </form>
</div>
<?php

include 'includes/footer.php';

?>