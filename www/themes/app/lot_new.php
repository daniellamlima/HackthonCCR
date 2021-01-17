<?php $v->layout("theme"); ?>
<!--
################
# CONTENT LOTE #
################
-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= flash(); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Novo Lote</h1><span class="text-sm">Fazenda #Nome da Fazenda#</span>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Animais</a></li>
                        <li class="breadcrumb-item"><a href="#">Novo Lote</a></li>
                        <li class="breadcrumb-item"><a href="#">Dados do Lote</a></li>
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
                        <div class="card-body">
                            <div class="tab-content">

                                <?= $v->insert("views/lot/novo_lote"); ?>                            
                                
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