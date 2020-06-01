<?php

include 'includes/head.php';
include 'includes/navbar.php';

include 'conexao.php';

$id = $_GET['id'];

?>

<div class="container mt-5">
<h3> Cadastro dados Empresa </h3>
    <form action="atualizaEmpresa.php" method="post">
    <?php

    $sql = "SELECT * FROM `cadempresa` WHERE id_empresa = $id";
	$buscar = mysqli_query($conexao,$sql);
	
	while ($array = mysqli_fetch_array($buscar)) {
		$id_empresa = $array['id_empresa'];
        $nome = $array['nome'];
        $email = $array['email'];
        $matsap = $array['matsap'];
        $admissao = $array['admissao'];
        $matiex = $array['matiex'];
        $avaya = $array['avaya'];
        $ramalhome = $array['ramalhome'];
        $loginrede = $array['loginrede'];
        $ilha = $array['ilha'];
        $supervisor = $array['supervisor'];
        $coordenador = $array['coordenador'];
        $gerente = $array['gerente']; 

    ?>
        <div class="form-row mt-4">
            <div class="form-group col-md-3">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value = "<?php echo $nome ?>" >
			<input type="number" class="form-control" name="id" value = "<?php echo $id_empresa ?>" style="display:none" >

            </div>
            <div class="form-group col-md-3">
            <label>Email Corporativo</label>
            <input type="email" class="form-control" name="email" value = "<?php echo $email ?>">
            </div>
            <div class="form-group col-md-3">
            <label>Matricula SAP</label>
            <input type="text" class="form-control" name="matsap" value = "<?php echo $matsap ?>">
            </div>
            <div class="form-group col-md-3">
            <label>Data Admissão</label>
            <input type="date" class="form-control" name="admissao" value = "<?php echo $admissao ?>">
            </div>
        </div>
        <div class="form-row mt-3">            
            <div class="form-group col-md-3">
            <label>Matrícula IEX</label>
            <input type="text" class="form-control" name="matiex" value = "<?php echo $matiex ?>" 
			></div>
            <div class="form-group col-md-3">
            <label>login Avaya</label>
            <input type="text" class="form-control" name="avaya" value = "<?php echo $avaya ?>" >
            </div>
            <div class="form-group col-md-3">
            <label>Ramal Home Office</label>
            <input type="text" class="form-control" name="ramalhome" value = "<?php echo $ramalhome ?>">
            </div>
            <div class="form-group col-md-3">
            <label>Login de Rede</label>
            <input type="text" class="form-control" name="loginrede" value = "<?php echo $loginrede ?>">
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
            <select class="form-control" name="supervisor" value = "<?php echo $supervisor ?>"  >
			<option></option>
			<option>Renato Braga</option>
            <option>Tiago Araujo</option>
            <option>Celso Alves</option>
            </select>
            </div>
            <div class="form-group col-md-3">
            <label>Coordenador</label>
            <select class="form-control" name="coordenador" value = "<?php echo $coordenador ?>" >
			<option></option>
			<option>Fátima Sampaio</option>
            <option>Jose Cavalini</option>
            <option>Marcia Martiniano</option>            
            </select>
            </div>
            <div class="form-group col-md-3">
            <label>Gerente</label>
            <select class="form-control" name="gerente" value = "<?php echo $gerente ?>" >
			<option></option>
		    <option>Sergio</option>
            <option>Tonon</option>
            <option>Katia Chagas</option>  
            <option>Cintia</option>             
            </select>

            </div>
            <div class="form-row mt-5">
            <button type="submit" class="btn btn-secondary">Atualizar</button>
            </div>
        </div>
	<?php } ?>
    </form>
</div>

<?php

include 'includes/footer.php';

?>