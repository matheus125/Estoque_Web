<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Lista de Usuários</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item"><a href="/admin/users">Usuários</a></li>
            <li class="breadcrumb-item active"><a href="/admin/users"></a>Cadastrar</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="card card-success">
    <!-- <div class="card-header">
      <h3 class="card-title">Novo Usuário</h3>
    </div> -->

    <form id="quickForm" role="form" action="/admin/users/create" method="post">
      <div class="card-body">
        <div class="form-group">
          <label for="nome">Nome</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-users"></i></span>
            </div>
            <input type="text" class="form-control" id="employees_name" name="employees_name"
              placeholder="Digite o nome">
          </div>
        </div>

        <div class="form-group">
          <label>Função</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-car"></i></span>
            </div>
            <input type="text" class="form-control" id="employees_function" name="employees_function"
              placeholder="Digite o cargo">
          </div>
          <!-- /.input group -->
        </div>

        <div class="form-group">
          <label for="login">Login</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-universal-access"></i></span>
            </div>
            <input type="text" class="form-control" id="deslogin" name="deslogin" placeholder="Digite o login">
          </div>
        </div>

        <div class="form-group">
          <label for="password">Senha</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" id="despassword" name="despassword"
              placeholder="Digite a senha">
          </div>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="inadmin" value="1"> Acesso de Administrador
          </label>
        </div>

      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-success salvar">Cadastrar</button>
      </div>

    </form>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  <!-- /.card -->
</div>
<!-- /.content-wrapper -->