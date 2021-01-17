<!--
######################################
# CONTENT VISUALIZAR DADOS DO ANIMAL #
######################################
-->
<div class="tab-pane" id="DadosAnimal">
    <form class="form-horizontal" id="FormDadosAnimal">
        <div class="row">
            <div class="form-group col-sm-4">
                <label><sup>*</sup>Número do Brinco:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                    <input type="text" class="form-control" name="brinco" 
                           placeholder="Digite aqui ..." required>
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label><sup>*</sup>Escolha um lote:</label>
                <a href="#" class="float-right">Novo Lote</a>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-th"></i></span>
                    </div>
                    <input type="text" class="form-control" name="lote" 
                           placeholder="Digite aqui ..." required>
                </div>                
            </div>
            <div class="form-group col-sm-4">
                <label><sup>*</sup>Sexo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                    </div>
                    <input type="text" class="form-control" name="sex" 
                           placeholder="Digite aqui ..." required>
                </div>                
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>Data de entrada na fazenda:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="datetime" class="form-control" name="entrada" 
                           placeholder="00/00/0000">
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label>Data da primeira pesagem na fazenda:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="datetime" class="form-control" name="pesagem" 
                           placeholder="00/00/0000">
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label>Primeiro peso na fazenda:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-weight-hanging"></i></span>
                    </div>
                    <input type="text" class="form-control" name="primeiro" 
                           placeholder="Digite aqui ...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>Raça:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                    </div>
                    <input type="text" class="form-control" name="raca" 
                           placeholder="Digite aqui ...">
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label>Pelagem:</label>                
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                    </div>
                    <input type="text" class="form-control" name="pelagem" 
                           placeholder="Digite aqui ..." required>
                </div>                
            </div>
            <div class="form-group col-sm-4">
                <label>Marca</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-registered"></i></span>
                    </div>
                    <input type="text" class="form-control" name="marca" 
                           placeholder="Digite aqui ...">
                </div>                
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>Data de nascimento: </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="datetime" class="form-control" name="nascimento" 
                           placeholder="00/00/0000">
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label>Peso ao nascer:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-baby-carriage"></i></span>
                    </div>
                    <input type="text" class="form-control" name="peso_nascimento " 
                           placeholder="Digite aqui ...">
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label>Data de desmame:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="datetime" class="form-control" name="desmame" 
                           placeholder="00/00/0000">
                </div>
            </div>            
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>Categoria:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-bookmark"></i></span>
                    </div>
                    <input type="text" class="form-control" name="categoria" 
                           placeholder="Digite aqui ...">
                </div>
            </div>            
            <div class="form-group col-sm-4">
                <label>Preço de Compra (R$/Kg):</label>                
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-hand-holding-usd"></i></span>
                    </div>
                    <input type="text" class="form-control" name="compra" 
                           placeholder="Digite aqui ..." required>
                </div>                
            </div>
            <div class="form-group col-sm-4">
                <label>Preço de Frete na Compra:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-truck"></i></span>
                    </div>
                    <input type="text" class="form-control" name="frete" 
                           placeholder="Digite aqui ...">
                </div>                
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12">
                <label>Produtor de Origem:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                    </div>
                    <input type="text" class="form-control" name="origem" 
                           placeholder="Digite aqui ...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-sm-12">                                                
                    <button type="submit"
                            class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Salvar Agora
                    </button>
                </div>
            </div>
        </div>        
    </form>
    <div class="text-sm">* Itens Obrigatórios</div>
</div>