<!--
###########
# SIDEBAR #
###########
-->
<aside class="main-sidebar sidebar-light-success elevation-4">
    <!-- Brand Logo -->
    <a href="<?= url(); ?>" class="brand-link" style="background-color: #fff">
        <img src="<?= image("images/logo/logo_admin.png", 128, 128); ?>"
             alt="Superbov Logo" class="brand-image img-circle elevation-3"> 
        <div class="brand-text font-weight-light">
            &nbsp;
            <span class="font-weight-bold" style="color: #4F7960">Super</span>
            <span class="font-weight-bold" style="color: #687261">Bov</span><br>                               
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-between">
            <div class="image">

                <?php if (user()->photo()): ?>
                    <img src="<?= image(user()->imagem, 260, 260); ?>"
                         class="img-circle elevation-2" alt="User Image"/>
                     <?php else: ?>
                    <img src="<?= image("images/users/user_default.jpg", 260, 260); ?>"
                         class="img-circle elevation-2" alt="User Image"/>
                     <?php endif; ?>
            </div>
            <div class="info">
                <a href="<?= url("/perfil"); ?>"><?= user()->nome ?></a>
            </div>
            <div class="info">
                <span class="badge badge-info">Free</span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent"
                data-widget="treeview" role="menu" data-accordion="false">
                <!--
                ##########
                # PAINEL #
                ##########
                -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link <?= ($AtivarMenuPainel ?? ""); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Painel
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= url(); ?>" class="nav-link <?= ($Item1 ?? ""); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fazenda 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fazenda 2</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--
                ###########
                # ANIMAIS #
                ###########
                -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link <?= ($AtivarMenuAnimal ?? ""); ?>">
                        <i class="fas fa-tag"></i>
                        &nbsp;&nbsp;
                        <p>
                            Animais
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= url("/animais"); ?>" 
                               class="nav-link <?= ($MenuAnimalManagement ?? ""); ?>">
                                <i class="fas fa-cog nav-icon"></i>                                
                                <p>Gestão de Animais</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url("/lotes"); ?>" 
                               class="nav-link <?= ($MenuLotManagement ?? ""); ?>">
                                <i class="fas fa-cogs nav-icon"></i>                                
                                <p>Gestão de Lotes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url("/novo_animal"); ?>" 
                               class="nav-link <?= ($MenuNovoAnimal ?? ""); ?>">
                                <i class="fas fa-plus nav-icon"></i>                                
                                <p>Novo Animal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url("/novo_lote"); ?>" 
                               class="nav-link <?= ($MenuNovoLote ?? ""); ?>">
                                <i class="far fa-plus-square nav-icon"></i>                                
                                <p>Novo Lote</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--
                ##########
                # MANEJO #
                ##########
                -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book-open"></i>
                        &nbsp;&nbsp;
                        <p>
                            Manejo
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Página ativa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Página Inativa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--
                ##############
                # RELATÓRIOS #
                ##############
                -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-pie"></i>
                        &nbsp;&nbsp;
                        <p>
                            Relatórios
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Página ativa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Página Inativa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a data-toggle="modal" data-target="#modal-suporte" class="nav-link">
                        <i class="fas fa-life-ring"></i> 
                        &nbsp;&nbsp; <p> Suporte </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url("/notificacoes"); ?>" class="nav-link">
                        <i class="fas fa-bell"></i> 
                        &nbsp;&nbsp; <p> Notificações </p>
                        <span class="badge badge-warning float-right">15</span>
                    </a>                                
                </li>                
                <li class="nav-item" style="border-radius: .25rem;">
                    <a href="<?= url("/sair"); ?>" class="nav-link">
                        <i class="fas fa-door-open" style="color: #dc3545;"></i>
                        &nbsp;&nbsp; <p class="text-danger"> Sair </p> 
                    </a>                                
                </li>                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>