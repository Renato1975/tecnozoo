<?php

include 'includes/head.php';
include 'includes/navbar.php';

?>
<div class="container mt-5">
    <h3> Cadastro dados pessoais </h3>
    <form action="dado-inc-pessoal.php" method="post">
    <div class="form-row mt-5">
        <div class="form-group col-md-6">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite o nome" autocomplete="off">
        </div>
        <div class="form-group col-md-6">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Digite o email" autocomplete="off">
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-4">
            <label>Endereço</label>
            <input type="text" class="form-control" name="local" placeholder="Digite o endereço" autocomplete="off">
        </div>
        <div class="form-group col-md-4 ">
            <label>Complemento Endereço </label>
            <input type="text" class="form-control" name="complemento" placeholder="Apartamento, casa e demais informações" autocomplete="off">
        </div>
        <div class="form-group col-md-4 ">
            <label>Bairro</label>
            <input type="text" class="form-control" name="bairro" placeholder="Apartamento, casa e demais informações" autocomplete="off">
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-3">
        <label>Cidade</label>
        <input type="text" class="form-control" name="cidade" autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>Estado</label>
        <input type="text" class="form-control" name="estado" autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>Município</label>
        <input type="text" class="form-control" name="municipio" autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>Cep</label>
        <input type="text" class="form-control" name="cep" autocomplete="off-set">
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-3">
        <label>CPF</label>
        <input type="text" class="form-control" name="cpf" autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>RG</label>
        <input type="text" class="form-control" name="rg" autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>Telefone Celular</label>
        <input type="text" class="form-control" name="telefone" autocomplete="off">
        </div>
        <div class="form-group col-md-3">
        <label>Telefone 2º opção</label>
        <input type="text" class="form-control" name="telefone2" autocomplete="off">
        </div>
    </div>
    <hr>
    <div class="container mt-3">
    <h3> Cadastro informações pessoais</h3>
    </div>
        <div class="form-row mt-5">  
        <div class="form-group col-md-4">
        <label>Estado Civil</label>
        <input type="text" class="form-control" name="estadocivil" autocomplete="off">    
        </div>  
        <div class="form-group col-md-2">
        <label>Possui Filhos</label>
        <input type="text" class="form-control" name="filho" autocomplete="off">    
        </div>  
        <div class="form-group col-md-2">
        <label>Data Aniversário</label>
        <input type="date" class="form-control" name="aniversario" autocomplete="off">    
        </div>   
        <div class="form-group col-md-4">
        <label>*Algum cuidado Especial</label>
        <input type="text" class="form-control" name="cuidado" autocomplete="off">    
        </div>        
    </div>
        <div class="form-row mt-5">
        <button type="submit" value="cadastrar" class="btn btn-secondary">Cadastrar</button>
        </div>
    </form>
</div>
<?php

include 'includes/footer.php';

?>