<?php $v->layout("theme"); ?>
<!--
###########################
# CONTENT GESTÃO DE LOTES #
###########################
-->

<!--
#######################
# MODAL EXCLUIR LOTES #
#######################
-->
<?= $v->insert("views/lot/excluir_lote"); ?>

<!--
#######################
# MODAIS EDITAR LOTES #
#######################
-->
<?= $v->insert("views/lot/editar_lote"); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= flash(); ?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Gestão de Lotes</h1><span class="text-sm">Fazenda #Nome da Fazenda#</span>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="TableLotes" 
                                   class="table table-hover table-striped table-bordered
                                   dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name do Lote</th>
                                        <th>Área</th>
                                        <th>Animais</th>
                                        <th>Peso Total</th>
                                        <th>Peso Médio</th>
                                        <th>Penúltimo GMD</th>
                                        <th>Último GMD</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--
                                    ##################
                                    # LISTA DE LOTES #
                                    ##################
                                    -->
                                    <?php for ($i = 0; $i < 50; $i++): ?>
                                        <tr>
                                            <td><?= str_random(); ?></td>
                                            <td><?= rand(10, 99) . "," . rand(0, 99) ?></td>
                                            <td><?= rand(10, 1000) ?></td>
                                            <td><?= rand(10, 99) . "," . rand(0, 99) ?></td>
                                            <td><?= rand(10, 99) . "," . rand(0, 99) ?></td>
                                            <td><?= rand(10, 99) . "," . rand(0, 99) ?></td>
                                            <td><?= rand(10, 99) . "," . rand(0, 99) ?></td>
                                            <td>
                                                <button type="button" title="Editar" data-toggle="modal"
                                                        data-target="#ModalEditarLote" 
                                                        class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                    Editar
                                                </button>&nbsp;&nbsp;
                                                <button type="button" title="Excluir" data-toggle="modal"
                                                        data-target="#ModalExcluirLote"
                                                        class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                    Excluir
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name do Lote</th>
                                        <th>Área</th>
                                        <th>Animais</th>
                                        <th>Peso Total</th>
                                        <th>Peso Médio</th>
                                        <th>Penúltimo GMD</th>
                                        <th>Último GMD</th>
                                        <th>Ações</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.aprenda mais -->
</div>
<!-- /.content-wrapper -->