<?php 

include 'includes/head.php';
include 'includes/navbar.php';

 ?>

<div class="container" style="width: 500px;margin-top: 50px">
 <form action="" method="post">
	<label>Digite o nome do colaborador</label>
	<input class="form-control" type="text" name=nome>
	<div style="text-align: right;">
	<input type="submit" name="search" class="btn btn-sm btn-secondary" style="margin-top: 20px" value="Localizar"> 
	</div>
 </form>
 </div>

 <?php 

	include 'conexao.php';

	if (isset($_POST['search'])) {
		
		$nome = htmlspecialchars($_POST['nome']);
		$sql = "SELECT * FROM cadempresa WHERE nome like '%$nome%' ";
		$buscar = mysqli_query($conexao,$sql);

		while ($row = mysqli_fetch_array($buscar)) {
			
  ?>

<div class="container">
	<h5> Dados Pretensão Férias </h5>	

	<!--- Localização dos dados do agente no banco de dados -->
	<form action="dado-inc-preFerias.php" method="post">
	  <div class="form-row mt-3">
	    <div class="col-3">
	    	<label> Nome Agente</label>
	      <input type="text" class="form-control" name="nome" value="<?php echo $row ['nome'] ?>" >
	    </div>
	    <div class="col-3">
	    	<label> Data de Admissão</label>
	      <input type="text" class="form-control" name="admissao" value="<?php echo $row ['admissao'] ?>" >
	    </div>
	    <div class="col-3">
	    	<label> Tempo de Casa</label>
	      <input type="text" class="form-control" name ="tempocasa">
	    </div>
	    <div class="col-3">
	    	<label> Supervisor</label>
	      <input type="text" class="form-control" name ="supervisor" value="<?php echo $row ['supervisor'] ?>" >
	    </div>
	  </div>

	  <?php 		
	}
}
 	?>

  <!-- fechamento da tag para seach -->

	  <hr style="margin-top: 50px;">
</div>

	<!--- Opções de pretenção de férias -->
	<div class="container form-group ">
		<h5>Escolha de opções de pretensão de férias</h5>
		<div class="form-row mt-4">
			<div class="col-4">
		    <label>Selecione o Mês da 1ºopção</label>
		    <select class="form-control" name="op1">
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
		    <select class="form-control" name="op2">
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
		    <select class="form-control" name="ano">
		      <option>2020</option>
		      <option>2021</option>
		      <option>2022</option>
		      <option>2023</option>
		    </select>
		    </div>
		</div>
		<hr style="margin-top: 50px">
		<h5>Campo de observações</h5>
	 	<textarea type="text" name="obs" rows="3" class="form-control" autocomplete="off" style="width: 600px"></textarea>

	 	<div style="text-align: right";>
	 		<button type="submit" class="btn btn-sm btn-secondary" href="dado-inc-preFerias.php"> Cadastrar</button>
	 	</div>
 		</form>
</div>
  