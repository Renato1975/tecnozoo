<?php 

include 'includes/head.php';
include 'includes/navbar.php';

include 'conexao.php';

$id = $_GET['id'];

 ?>

<div class="container" style="margin-top: 50px">
	<h5> Dados Pretensão Férias </h5>	

	<!--- Localização dos dados do agente no banco de dados -->
	<form action="atualizaPretFerias.php" method="post">
		    <?php

		   	$sql = "SELECT * FROM `pretferias` WHERE id_preferias = $id";
		    $buscar = mysqli_query($conexao,$sql);

		    while ($array = mysqli_fetch_array($buscar)) {

		        $id_preferias = $array['id_preferias'];
		        $nome = $array['nome'];
		        $admissao = $array['admissao'];
		        $tempocasa = $array['tempocasa'];
		        $supervisor = $array['supervisor'];
		        $op1 = $array['op1'];
		        $op2 = $array['op2'];
		        $ano = $array['ano'];
		        $obs = $array['obs'];


		    ?>

	  <div class="form-row mt-3">
	    <div class="col-3">
	    	<label> Nome Agente</label>
	      <input type="text" class="form-control" name="nome" value = "<?php echo $nome ?>" >
	      <input type="number" class="form-control" name="id" value = "<?php echo $id_preferias ?>" style="display: none;" >

	    </div>
	    <div class="col-3">
	    	<label> Data de Admissão</label>
	      <input type="text" class="form-control" name="admissao"  value = "<?php echo $admissao ?>" >
	    </div>
	    <div class="col-3">
	    	<label> Tempo de Casa</label>
	      <input type="text" class="form-control" name ="tempocasa"  value = "<?php echo $tempocasa ?>" >
	    </div>
	    <div class="col-3">
	    	<label> Supervisor</label>
	      <input type="text" class="form-control" name ="supervisor" value = "<?php echo $supervisor ?>" >
	    </div>
	  </div>

  <!-- fechamento da tag para search -->

	  <hr style="margin-top: 50px;">
</div>

	<!--- Opções de pretenção de férias -->
	<div class="container form-group ">
		<h5>Escolha de opções de pretensão de férias</h5>
		<div class="form-row mt-4">
			<div class="col-4">
		    <label>Selecione o Mês da 1ºopção</label>
		    <select class="form-control" name="op1" value="<?php echo $op1 ?>" >
		      <option>Janeiro</option>
		      <option>Fevereiro</option>
		      <option>Março</option>
		      <option>Abril</option>
		      <option>Maio</option>
		      <option>Junho</option>
		      <option>Julho</option>
		      <option>Agosto</option>
		      <option>Setembro</option>
		      <option>Outubro</option>
		      <option>Novembro</option>
		      <option>Dezembro</option>
		    </select>
		    </div>
			<div class="col-4">
		    <label>Selecione o Mês da 2ºopção</label>
		    <select class="form-control" name="op2" value="<?php echo $op2 ?>" >
		      <option>Janeiro</option>
		      <option>Fevereiro</option>
		      <option>Março</option>
		      <option>Abril</option>
		      <option>Maio</option>
		      <option>Junho</option>
		      <option>Julho</option>
		      <option>Agosto</option>
		      <option>Setembro</option>
		      <option>Outubro</option>
		      <option>Novembro</option>
		      <option>Dezembro</option>
		    </select>
		    </div>
			<div class="col-4">
		    <label>Ano Pretensão de férias</label>
		    <select class="form-control" name="ano" value="<?php echo $ano ?>" >
		      <option>2020</option>
		      <option>2021</option>
		      <option>2022</option>
		      <option>2023</option>
		    </select>
		    </div>
		</div>
		<hr style="margin-top: 50px">
		<h5>Campo de observações</h5>
	 	<textarea type="text" name="obs" rows="3" class="form-control" autocomplete="off" style="width: 600px"  value="<?php echo $obs ?>"  ></textarea>



		<div class="form-row mt-5">
	    <button type="submit" class="btn btn-secondary">Atualizar</button>
	    </div>





	 <?php } ?>
 		</form>
</div>
  