<!--
#######################
# CONTENT GENEALOGIAS #
#######################
-->
<div class="tab-pane" id="Genealogias">
    <form class="form-horizontal" id="FormGenealogia">
        <div class="row">
            <div class="form-group col-sm-4">
                <label>Nome do Animal:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nome" 
                           placeholder="Digite aqui ..." required>
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label>Registro de Nascimento (RGN):</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-plus"></i></span>
                    </div>
                    <input type="text" class="form-control" name="rgn" 
                           placeholder="Digite aqui ..." required>
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label> Registro Definitivo (RGD):</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-plus"></i></span>
                    </div>
                    <input type="text" class="form-control" name="rgd" 
                           placeholder="Digite aqui ..." required>
                </div>                
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label> Nome do reprodutor (Touro):</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                    <input type="text" class="form-control" name="touro" 
                           placeholder="Digite aqui ..." required>
                </div>                
            </div>
            <div class="form-group col-sm-4">
                <label> Nome da Matriz (Mãe):</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                    <input type="text" class="form-control" name="matriz" 
                           placeholder="Digite aqui ..." required>
                </div>                
            </div>
            <div class="form-group col-sm-4">
                <label>Rastreado no nascimento:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-chart-bar"></i></span>
                    </div>
                    <input type="text" class="form-control" name="tracking" 
                           placeholder="Digite aqui ...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>Brinco do Reprodutor (Touro):</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                    <input type="text" class="form-control" name="BrincoTouro" 
                           placeholder="Digite aqui ...">
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label>Brinco do Matriz (Mãe):</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                    <input type="text" class="form-control" name="BrincoMatriz" 
                           placeholder="Digite aqui ...">
                </div>
            </div>            
        </div>        
        <div class="row">
            <div class="form-group">
                <div class="col-sm-12">                                                
                    <button type="submit"
                            class="btn btn-primary">
                        <i class="fas fa-edit"></i>&nbsp;&nbsp;Cadastrar Agora
                    </button>
                </div>
            </div>
        </div>        
    </form>
    <div class="text-sm">* Itens Obrigatórios</div>
</div>