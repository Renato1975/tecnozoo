<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>SisApoio</title>
  </head>
  <body>

<div class="container" style="margin-top: 80px; width: 400px;">

<form action="inserir_usuario.php" method="post">
    <h5> <img src="images/pencil.png"> Cadastro de Usuário</h5>
    <div class ="form-group" style="margin-top: 30px;">
        <label> Nome do Usuário</label>
        <input type="text" name="nome" class="form-control" required autocomplete="off" placeholder="Nome completo">
    </div>
    <div class ="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required autocomplete="off" placeholder="Email">
    </div>
    <div class ="form-group">
        <label>Senha</label>
        <input type="password" name="senha" id="txtSenha" class="form-control " required autocomplete="off" placeholder="Senha">
    </div>
    <div class ="form-group">
        <label>Repetir Senha</label>
        <input type="password" oninput="validaSenha(this)" name="senha2" class="form-control" required autocomplete="off" placeholder="Repetir Senha">
        <small>Repetir a mesma senha</small>
    </div>
    <div class ="form-group">
        <label>Nivel Usuario</label>
        <select type="number" name="nivel" class="form-control " required autocomplete="off">
        <option>Selecione</option>
        <option value="3"> Agente</option>
        <option value="2"> Supervisor</option>
        <option value="1"> Administrador</option>
        </select>
    </div>
    <div style="text-align: right;">
        <button type="submit" class="btn btn-sm btn-info">Cadastrar</button>
    </div>

</form>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
      
      function validaSenha(input){
        if (input.value != document.getElementById('txtSenha').value){
          input.setCustomValidity('Repita a senha corretamente');
        }else{
          input.setCustomValidity('');
        }
      }

    </script>
  </body>
</html>