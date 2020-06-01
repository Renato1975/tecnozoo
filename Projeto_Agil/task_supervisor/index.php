
<?php

include 'includes/head.php';

?>

 <div class="container text-center" style="width: 400px; margin-top: 120px; border-radius: 15px;border: 2px solid #f3f3f3">
 	<div style="padding: 20px">
    <form class="form-signin">
    	<div class="form-group">
			  <img class="mb-4" src="images/cadeado.png" width="72" height="72">
			  <h1 class="h3 mb-3 font-weight-normal">Acesso</h1>
			  <label class="sr-only">Usuario</label>
			  <input type="email" id="inputEmail" class="form-control" placeholder="Endereço email " required="" autofocus="">
		</div>
		<div class="form-group">
			  <label for="inputPassword" class="sr-only">Senha</label>
			  <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
		</div>
			<div style="margin-top: 30px">
			<button class="btn btn-md btn-secondary btn-block" type="submit">Acessar</button>
			</div>
	</form>
	</div>
</div>

<?php

include 'includes/footer.php';

?>

