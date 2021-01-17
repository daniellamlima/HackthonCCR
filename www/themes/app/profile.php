<?php $v->layout("theme"); ?>
<!--
###################
# CONTENT PROFILE #
###################
-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= flash(); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usuario</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Usuario</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-success card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="<?= $photo; ?>"
                                     alt="Foto de Perfil do Usuario">
                            </div>

                            <h3 class="profile-username text-center">Nome do Usuario</h3>

                            <p class="text-muted text-center">Cargo</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Idade:</b> <a class="float-right">## anos</a>
                                </li>
                                <li class="list-group-item">
                                    <b>CPF:</b> <a class="float-right">###.###.###-##</a>
                                </li>                  
                                <li class="list-group-item">
                                    <b>Sexo:</b> <a class="float-right">#########</a>
                                </li>                  
                                <li class="list-group-item">
                                    <b>Nascimento:</b> <a class="float-right">##/##/####</a>
                                </li>                  
                                <li class="list-group-item">
                                    <b>Email:</b> <a class="float-right">Email do usuário</a>
                                </li>                                                                    
                            </ul>                
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">

                                <?= $v->insert("views/profile/menus/dados_pessoais"); ?>

                                <?= $v->insert("views/profile/menus/fazendas"); ?>

                                <?= $v->insert("views/profile/menus/funcionarios"); ?>

                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">

                                <?= $v->insert("views/profile/contents/dados_pessoais"); ?>                            

                                <?= $v->insert("views/profile/contents/fazendas"); ?>

                                <?= $v->insert("views/profile/contents/funcionarios"); ?>
                                
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->