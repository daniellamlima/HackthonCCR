<!--
##########################
# MODAL NOVO FUNCIONARIO #
##########################
-->
<div class="modal fade" id="ModalNovoFuncionario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Novo Funcionário</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="FormNewEmployees">
                    <div class="form-group row">
                        <label for="inputNameFuncionario"
                               class="col-sm-2 col-form-label">
                            <sup>*</sup>Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                                   name="nome" placeholder="Nome Completo" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputJobFuncionario" 
                               class="col-sm-2 col-form-label">
                            <sup>*</sup>Cargo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                                   name="job" placeholder="Nome do Cargo" required>
                        </div>
                    </div>                                                                                  
                    <div class="form-group row">
                        <label for="inputCPFFuncionario" 
                               class="col-sm-2 col-form-label">
                            <sup>*</sup>CPF:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  
                                   name="cpf" placeholder="000.000.000-00"
                                   required>
                        </div>
                        <label for="inputSexFuncionario" class="col-sm-2 col-form-label">Sexo:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="sexo" placeholder="Sexo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputBirthFuncionario" class="col-sm-2 col-form-label">Nascimento:</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control"  
                                   name="birth">
                        </div>
                        <label for="inputAgeFuncionario" class="col-sm-2 col-form-label">Idade:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="age" placeholder="Idade">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">
                    <i class="far fa-paper-plane"></i>
                    &nbsp;&nbsp;Enviar agora
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>