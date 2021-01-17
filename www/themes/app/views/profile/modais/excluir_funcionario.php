<!--
#############################
# MODAL EXCLUIR FUNCIONARIO #
#############################
-->
<div class="modal fade" id="ModalExcluirFuncionario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Confirmação necessária</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Você tem certeza absoluta? Esta ação excluirá definitivamente o funcionário <b><span class="ExcluirItem"></span></b>
                </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" 
                        data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i> &nbsp;&nbsp; Excluir Agora
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>