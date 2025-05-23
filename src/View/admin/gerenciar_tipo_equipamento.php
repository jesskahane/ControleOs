<?php
//include_once dirname(__DIR__, 3) . '/vendor/autoload.php';
//echo dirname(__DIR__, 2);
//exit;
require_once dirname(__DIR__, 2) . '/Resource/dataview/tipo_equipamento_dataview.php';
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
              <h1>Gerenciar Tipo de Equipamentos</h1>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Cadastrar um novo registro</h3>
          </div>
          <div class="card-body">

            <form method="post" id="formCAD" action="gerenciar_tipo_equipamento.php">
              <div class="form-group">
                <label>Tipo de equipamento</label>
                <input class="form-control obg" name="tipo" id="tipo" placeholder="Digite aqui...">
              </div>
              <button onclick="return NotificarCampos('formCAD')" class="btn btn-success" name="btn_cadastrar">Cadastrar</button>
            </form>

          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tipos cadastrados</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Alterar ou excluir os registros</h3>

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
                          <th>Tipo do equipamento</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php for ($i = 0; $i < count($tipos_equipamentos); $i++) { ?>
                          <tr>
                            <td>
                              <a href="#" data-toggle="modal" data-target="#alterar_tipo" class="btn btn-warning btn-xs" onclick="CarregarTipoEquipamento('<?= $tipos_equipamentos[$i]['id_tipo'] ?>''<?= $tipos_equipamentos[$i]['nome_tipo'] ?>')">Alterar</a>
                              <a href="#" data-toggle="modal" data-target="#modal_excluir" class="btn btn-danger btn-xs" onclick="CarregarExcluir('<?= $tipos_equipamentos[$i]['id_tipo'] ?>','<?= $tipos_equipamentos[$i]['nome_tipo'] ?>')">Excluir</a>
                            </td>
                            <td><?= $tipos_equipamentos[$i]['nome_tipo'] ?></td>
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
    <form id="formAlt" action="gerenciar_tipo_equipamento.php" method="post">
          <?php include_once 'modals/alterar_tipo.php';?>
          <?php include_once 'modals/excluir.php';?>
    </form>

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