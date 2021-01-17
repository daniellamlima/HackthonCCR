<?php $v->layout("theme"); ?>
<!--
#############################
# CONTENT GESTÃO DE ANIMAIS #
#############################
-->

<!--
########################
# MODAL EXCLUIR ANIMAL #
########################
-->
<?= $v->insert("views/animais/modais/excluir_animal"); ?>

<!--
###########################
# MODAL VISUALIZAR ANIMAL #
###########################
-->
<?= $v->insert("views/animais/modais/visualizar_animal"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= flash(); ?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Gestão de Animais</h1><span class="text-sm">Fazenda #Nome da Fazenda#</span>
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
                            <table id="TableAnimais" 
                                   class="table table-hover table-striped table-bordered
                                   dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Lote</th>
                                        <th>Idade</th>
                                        <th>Sexo</th>
                                        <th>Última Pesagem</th>
                                        <th>Último Peso</th>
                                        <th>GMD Total (Kg/dia)</th>
                                        <th>Ganho(Kg)</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--
                                    ####################
                                    # LISTA DE ANIMAIS #
                                    ####################
                                    -->
                                    <?php for ($i = 0; $i < 50; $i++): ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= str_random(); ?></td>
                                            <td><?= rand(10, 99) ?></td>
                                            <td><?= str_random(); ?></td>
                                            <td><?= date("Y-m-d H:i:s") ?></td>
                                            <td><?= rand(10, 99) . "," . rand(0, 99) ?></td>
                                            <td><?= rand(10, 99) . "," . rand(0, 99) ?></td>
                                            <td><?= rand(10, 99) . "," . rand(0, 99) ?></td>
                                            <td>
                                                <button type="button" title="Visualizar Animal" data-toggle="modal"
                                                        data-target="#ModalVisualizarAnimal"
                                                        class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                    Visualizar
                                                </button>&nbsp;&nbsp;
                                                <button type="button" title="Excluir Animal" data-toggle="modal"
                                                        data-target="#ModalExcluirAnimal"
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
                                        <th>ID</th>
                                        <th>Lote</th>
                                        <th>Idade</th>
                                        <th>Sexo</th>
                                        <th>Última Pesagem</th>
                                        <th>Último Peso</th>
                                        <th>GMD Total (Kg/dia)</th>
                                        <th>Ganho(Kg)</th>
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