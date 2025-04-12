<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./_menu.php" class="brand-link">
        <!-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" -->
        <!-- style="opacity: .8"> -->
        <span class="brand-text font-weight-light">Controle OS</span>
    </a>

    <!-- Sidebar EQUIPAMENTOS -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Jess Kahane</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Adicione ícones aos links usando a classe .nav-icon
               com font-awesome ou qualquer outra biblioteca de ícones -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Equipamentos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="equipamento.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Novo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="gerenciar_tipo_equipamento.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tipos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="consultar_equipamento.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="gerenciar_modelo_equipamento.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modelos</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="remover_equipamento.php.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Remover</p>
                            </a>
                        </li>


                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <!-- Sidebar SETOR -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Adicione ícones aos links usando a classe .nav-icon
               com font-awesome ou qualquer outra biblioteca de ícones -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Setor
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="gerenciar_setor.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Setor</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

    <!-- Sidebar USUÁRIO -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Adicione ícones aos links usando a classe .nav-icon
               com font-awesome ou qualquer outra biblioteca de ícones -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Usuário
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="novo_usuario.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Novo usuário</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="consultar_usuario.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consultar usuario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="remover_equipamento.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Remover usuário</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>