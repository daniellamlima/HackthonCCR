<?php $v->layout("theme"); ?>
<!--
###################
# CONTENT ANIMAIS #
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
                    <h1>Novo Animal</h1><span class="text-sm">Fazenda #Nome da Fazenda#</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Animais</a></li>
                        <li class="breadcrumb-item"><a href="#">Novo Animal</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">                
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">

                                <?= $v->insert("views/animais/menus/dados_animal"); ?>

                                <?= $v->insert("views/animais/menus/genealogia"); ?>

                                <?= $v->insert("views/animais/menus/observacoes"); ?>

                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">

                                <?= $v->insert("views/animais/contents/dados_animal"); ?>                            

                                <?= $v->insert("views/animais/contents/genealogia"); ?>

                                <?= $v->insert("views/animais/contents/observacoes"); ?>
                                
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