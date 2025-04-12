<?php

require_once dirname(__DIR__, 2) . '/Resource/dataview/setor_dataview.php';
?>
<!DOCTYPE html>
<html>

<head>
  <?php
  include_once PATH . 'Template/_includes/_head.php';
  ?>
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper Jess kt -->
  <div class="wrapper">
    <!-- Navbar -->

    <?php
    include_once PATH . 'Template/_includes/_topo.php';
    include_once PATH . 'Template/_includes/_menu.php'
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Gerenciar Setor</h1>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Cadastrar um novo setor.</h3>
          </div>
          <div class="card-body">

            <form method="post" id="formCAD" action="gerenciar_setor.php">
              <div class="form-group">
                <label>Setor</label>
                <input class="form-control obg" placeholder="Digite aqui setor desejado..." name="setor" id="setor">
              </div>
              <button onclick="return NotificarCampos('formCAD')" class="btn btn-success" name="btn_cadastrar">Cadastrar</button>
            </form>

          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Setores cadastrados.</h3>

          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Alterar ou excluir setores</h3>

                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Pesquisar...">

                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Ação</th>
                          <th>Setor</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php for ($i = 0; $i < count($setores_cadastrados); $i++) { ?>
                          <tr>
                            <td>
                              <a href="#" class="btn btn-warning btn-xs">Alterar</a>
                              <a href="#" class="btn btn-danger btn-xs">Excluir</a>
                            </td>
                            <td><?= $setores_cadastrados[$i]['nome_setor'] ?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>

        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php
    include_once PATH . 'Template/_includes/_footer.php';
    ?>
  </div>
  <!-- ./wrapper -->

  <?php
  include_once PATH . 'Template/_includes/_scripts.php';
  include_once PATH . 'Template/_includes/_msg.php';
  ?>
</body>

</html>