<!--
####################
# CONTENT FAZENDAS #
####################
-->
<?= $v->insert("views/profile/modais/nova_fazenda"); ?>

<?= $v->insert("views/profile/modais/editar_fazenda"); ?>

<?= $v->insert("views/profile/modais/excluir_fazenda"); ?>

<!--
############
# FAZENDAS #
############
-->
<div class="tab-pane" id="Fazendas">
    <button type="button" class="btn btn-primary mb-3" 
            data-toggle="modal" data-target="#ModalNovaFazenda">
        <i class="fas fa-plus-circle"></i>
        &nbsp;&nbsp;<span id="BotaoNovaFazenda">Nova Fazenda</span>
    </button>
    <div class="card p-1">
        <div class="card-body table-responsive p-0">
            <table id="TableFarms" class="table table-hover table-striped
                   table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr >
                        <th>Nome</th>
                        <th>Localização</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!--
                    #####################
                    # LISTA DE FAZENDAS #
                    #####################
                    -->
                    <?php for ($i = 0; $i < 50; $i++): ?>
                        <tr>
                            <td><?= str_random(); ?></td>
                            <td><?= str_random(); ?></td>                            
                            <td>
                                <button type="button" title="Editar" data-toggle="modal"
                                        data-target="#ModalEditarFazenda" 
                                        class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                    Editar
                                </button>&nbsp;&nbsp;
                                <button type="button" title="Excluir" data-toggle="modal"
                                        data-target="#ModalExcluirFazenda"
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
                        <th>Nome</th>
                        <th>Localização</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.card -->
</div>