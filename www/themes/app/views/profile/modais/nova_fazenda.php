<!--
######################
# MODAL NOVA FAZENDA #
######################
-->
<div class="modal fade" id="ModalNovaFazenda">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Nova Fazenda</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="FormNewFarms">
                    <div class="form-group row">
                        <label for="inputNameFarm" class="col-sm-2 col-form-label"><sup>*</sup>Nome:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="fazenda" placeholder="Nome da sua fazenda" required>
                        </div>
                        <label for="inputCNPJ" class="col-sm-2 col-form-label">CNPJ:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="cnpj" placeholder="00.000.000/0000-00">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="inputEnd" class="col-sm-2 col-form-label">Endereço:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  
                                   name="endereco" placeholder="Endereço">
                        </div>
                        <label for="inputLogradouro" class="col-sm-2 col-form-label">Logradouro:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="logradouro" placeholder="Logradouro">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCity" class="col-sm-2 col-form-label">
                            <sup>*</sup>Cidade:
                        </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="city" placeholder="Cidade" required>
                        </div>
                        <label for="inputState" class="col-sm-2 col-form-label">
                            <sup>*</sup>Estado:
                        </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="state" placeholder="Estado" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCountry" class="col-sm-2 col-form-label">
                            País:
                        </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="pais" placeholder="País">
                        </div>
                        <label for="inputCEP" class="col-sm-2 col-form-label">
                            CEP:
                        </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="cep" placeholder="CEP">
                        </div>
                    </div>                                  
                    <div class="form-group row">
                        <label for="inputAreaPasture" class="col-sm-2 col-form-label">
                            Área de Pastagem:
                        </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="pasture" placeholder="Área de Pastagem">
                        </div>
                        <label for="inputAreaTotal" class="col-sm-2 col-form-label">
                            Área Total:
                        </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="total" placeholder="Área Total">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputInscEstadual" class="col-sm-2 col-form-label">
                            <sup>*</sup>Inscrição Estadual:
                        </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="estadual" placeholder="Inscrição Estadual" required>
                        </div>
                        <label for="inputNRF" class="col-sm-2 col-form-label">
                            NRF:
                        </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="nrf" placeholder="NRF">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputIncra" class="col-sm-2 col-form-label">
                            INCRA:
                        </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="incra" placeholder="INCRA">
                        </div>
                        <label for="inputSISATAK" class="col-sm-2 col-form-label">
                            Código sisATACK:
                        </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" 
                                   name="sisatack" placeholder="sisATACK">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">
                    <i class="far fa-paper-plane"></i>&nbsp;&nbsp;Enviar agora
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>