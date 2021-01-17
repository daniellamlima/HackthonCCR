<!--
##########################
# CONTENT EDITAR DO LOTE #
##########################
-->
<div class="modal fade" id="ModalEditarLote">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Editar Lote</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="FormEditLote">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label><sup>*</sup>Nome de Lote:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-pen-square"></i></span>
                                </div>
                                <input type="text" class="form-control" name="nome" id="0"
                                       placeholder="Digite aqui ..." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label><sup>*</sup>Área do Lote:</label>            
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-vector-square"></i></span>
                                </div>
                                <input type="text" class="form-control" name="area" id="1"
                                       placeholder="Digite aqui ..." required>
                            </div>                
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Total de Animais:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tags"></i></span>
                                </div>
                                <input type="text" class="form-control" name="animais" id="2"
                                       value="xx,xx" readonly title="Apenas leitura">
                            </div>                
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Peso Total:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-weight-hanging"></i></span>
                                </div>
                                <input type="text" class="form-control" name="pesototal" id="3"
                                       value="xx,xx" readonly title="Apenas leitura">
                            </div>
                        </div>
                    </div>
                    <div class="row">        
                        <div class="form-group col-sm-4">
                            <label>Peso Médio:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-weight"></i></span>
                                </div>
                                <input type="text" class="form-control" name="pesomedio" id="4"
                                       value="xx,xx" readonly title="Apenas leitura">
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Penúltimo GMD</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-weight"></i></span>
                                </div>
                                <input type="text" class="form-control" name="penultimogmd" id="5"
                                       value="xx,xx" readonly title="Apenas leitura">
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Último GMD</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-weight"></i></span>
                                </div>
                                <input type="text" class="form-control" name="ultimogmd" id="6"
                                       value="xx,xx" readonly title="Apenas leitura">
                            </div>
                        </div>
                    </div>
                    <div class="row">        
                        <div class="form-group col-sm-12">
                            <label>Descrição:</label>
                            <textarea id="DescricaoLoteTextArea" 
                                      style="width: 100%; height: 200px; font-size: 14px;
                                      line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>        
                    </div>                         
                </form>
                <div class="text-sm">* Itens Obrigatórios</div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">
                     <i class="fas fa-edit"></i>&nbsp;&nbsp;Editar Agora
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>