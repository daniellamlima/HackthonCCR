<!--
########################
# CONTENT FUNCIONARIOS #
########################
-->
<?= $v->insert("views/profile/modais/novo_funcionario"); ?>

<?= $v->insert("views/profile/modais/editar_funcionario"); ?>

<?= $v->insert("views/profile/modais/excluir_funcionario"); ?>

<!--
################
# FUNCIONÁRIOS #
################
-->
<div class="tab-pane" id="Funcionarios">
    
    <button type="button"
            class="btn btn-primary mb-3" data-toggle="modal"
            data-target="#ModalNovoFuncionario">
        <i class="fas fa-plus-circle"></i>
        &nbsp;&nbsp;Novo Funcionario
    </button>
    
    <div class="card p-1">
        <div class="card-body table-responsive p-0">
            <table id="TableEmployees" class="table table-hover table-striped
                   table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr >                       
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!--
                    #########################
                    # LISTA DE FUNCIONÁRIOS #
                    #########################
                    -->
                    <?php for ($i = 0; $i < 50; $i++): ?>
                        <tr>
                            <td><?= str_random(); ?></td>
                            <td><?= str_random(); ?></td>                            
                            <td>
                                <button type="button" title="Editar" data-toggle="modal"
                                        data-target="#ModalEditarFuncionario" 
                                        class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                    Editar
                                </button>&nbsp;&nbsp;
                                <button type="button" title="Excluir" data-toggle="modal"
                                        data-target="#ModalExcluirFuncionario"
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
                        <th>Cargo</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.card -->
</div>