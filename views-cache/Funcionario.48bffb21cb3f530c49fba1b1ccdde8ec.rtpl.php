<?php if(!class_exists('Rain\Tpl')){exit;}?><!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <link href="res/site/assets/img/favicons/favicon.ico" rel="apple-touch-icon">
  <title>Login Funcionário</title>


  <!-- Bootstrap core CSS -->
  <link href="/res/log/css/login_bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="/res/log/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <form id="login_form" name="" action="/admin/Funcionario" method="post" class="form-signin">
    <?php if( $error != '' ){ ?>
    <div class="alert alert-danger">
      <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
    </div>
    <?php } ?>
    <!-- <img class="mb-4" src="/res/log/images/teste.png" alt=""> -->
    <label for="inputEmail" class="sr-only">Nome do usuário</label>
    <input type="text" id="login" name="login" class="form-control" placeholder="Nome do usuário" required autofocus>
    <br>
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembre de mim
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
    <br><br><br>
    <br>
    &copy; Look Perfeito Confeccões</a> 2022 -
    <script type="text/javascript"> document.write(new Date().getFullYear());</script> | Todos os direitos
    reservados.</span></strong>

  </form>

</body>

</html>