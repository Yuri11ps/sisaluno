<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Cadastre-se</title>
</head>

<body>

  <div class="box-1">

    <div class="formulario">

      <form class="form-aluno" method="GET" action="crudaluno.php">

        <div class="intem-form">
          <label for="">Nome aluno</label>
          <input class="input-item" type="text" name="nomealuno">
        </div>

        <div class="intem-form">
          <label for="">Idade</label>
          <input class="input-item" type="text" name="idade">
        </div>

        <div class="intem-form">
          <label for="">Data de Nascimento</label>
          <input class="input-item" type="date" name="datanascimento">
        </div>

        <div class="intem-form">
          <label for="">endereço</label>
          <input class="input-item" type="text" name="endereco">
        </div>

        <div class="intem-form">

          <label for="">Status</label>

          <select class="input-item" id="" name="estatus">
            <option value=""></option>
            <option class="aprovado" value="Aprovado">Aprovado</option>
            <option class="reprovado" value="Reprovado">Reprovado</option>
          </select>

        </div>
        <div class="caixa_btn">

          <input class="btn-footer-cadastrar cadastrar-1 alterar-1" type="submit" name="cadastrar" value="cadastrar">

      </form>
          <a href='index.php'class='btn-footer-voltar voltar-1'>voltar</a>

        </div>

    </div>
  </div>
</body>

</html>