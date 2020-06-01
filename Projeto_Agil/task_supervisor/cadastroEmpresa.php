<?php

include 'includes/head.php';
include 'includes/navbar.php';


?>

<div class="container mt-5">
<h3> Cadastro dados Empresa </h3>
    <form action="dado-inc-empresa.php" method="post">
        <div class="form-row mt-4">
            <div class="form-group col-md-3">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome" autocomplete="off-set">
            </div>
            <div class="form-group col-md-3">
            <label>Email Corporativo</label>
            <input type="email" class="form-control" name="email" placeholder="Digite o email"   autocomplete="off-set">
            </div>
            <div class="form-group col-md-3">
            <label>Matricula SAP</label>
            <input type="text" class="form-control" name="matsap" placeholder="SAP" autocomplete="off-set">
            </div>
            <div class="form-group col-md-3">
            <label>Data Admissão</label>
            <input type="date" class="form-control" name="admissao" placeholder="Admissão" autocomplete="off-set">
            </div>
        </div>
        <div class="form-row mt-3">            
            <div class="form-group col-md-3">
            <label>Matrícula IEX</label>
            <input type="text" class="form-control" name="matiex" placeholder="IEX"  autocomplete="off-set"></div>
            <div class="form-group col-md-3">
            <label>login Avaya</label>
            <input type="text" class="form-control" name="avaya" placeholder="Login"  autocomplete="off-set">
            </div>
            <div class="form-group col-md-3">
            <label>Ramal Home Office</label>
            <input type="text" class="form-control" name="ramalhome" placeholder="Ramal Home"  autocomplete="off-set">
            </div>
            <div class="form-group col-md-3">
            <label>Login de Rede</label>
            <input type="text" class="form-control" name="loginrede" placeholder="Rede"  autocomplete="off-set">
            </div>
        </div>
        <div class="form-row mt-3">
            <div class="form-group col-md-3">
            <label>Ilha - Célula </label>
            <select class="form-control" name="ilha">
            <option></option>
            <option>Beneficiário</option>
            <option>Célula One</option>
            <option>Gestor PJ</option>
            </select>
            </div>
            <div class="form-group col-md-3">
            <label>Supervisor</label>
            <select class="form-control" name="supervisor">
            <option></option>
            <option>Renato Braga</option>
            <option>Tiago Araujo</option>
            <option>Celso Alves</option>
            </select>
            </div>
            <div class="form-group col-md-3">
            <label>Coordenador</label>
            <select class="form-control" name="coordenador">
            <option></option>
            <option>Fátima Sampaio</option>
            <option>Jose Cavalini</option>
            <option>Marcia Martiniano</option>            
            </select>
            </div>
            <div class="form-group col-md-3">
            <label>Gerente</label>
            <select class="form-control" name="gerente">
            <option></option>
            <option>Sergio</option>
            <option>Tonon</option>
            <option>Katia Chagas</option>  
            <option>Cintia</option>             
            </select>
            </div>
            <div class="form-row mt-5">
            <button type="submit" class="btn btn-secondary">Cadastrar</button>
            </div>
        </div>
    </form>
</div>

<?php

include 'includes/footer.php';

?>