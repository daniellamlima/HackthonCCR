<!--
########################
# CONTENT NOVO DO LOTE #
########################
-->
<form class="form-horizontal" id="FormNewLote">
    <div class="row">
        <div class="form-group col-sm-4">
            <label><sup>*</sup>Tipo de Lote:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-th"></i></span>
                </div>
                <input type="text" class="form-control" name="tipo" 
                       placeholder="Digite aqui ..." required>
            </div>
        </div>
        <div class="form-group col-sm-4">
            <label><sup>*</sup>Nome do Lote:</label>            
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen-square"></i></span>
                </div>
                <input type="text" class="form-control" name="nome" 
                       placeholder="Digite aqui ..." required>
            </div>                
        </div>
        <div class="form-group col-sm-4">
            <label>Área:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-vector-square"></i></span>
                </div>
                <input type="text" class="form-control" name="area" 
                       placeholder="Digite aqui ...">
            </div>                
        </div>
    </div>
    <div><b>Metas</b></div>
    <div class="row">        
        <div class="form-group col-sm-4">
            <label>Valor Médio, por kg, estimado de venda:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-file-invoice-dollar"></i></span>
                </div>
                <input type="text" class="form-control" name="vmv" 
                       placeholder="Digite aqui ...">
            </div>
        </div>
        <div class="form-group col-sm-4">
            <label>Peso Médio estimado da venda:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-weight"></i></span>
                </div>
                <input type="datetime" class="form-control" name="pesagem" 
                       placeholder="00/00/0000">
            </div>
        </div>
        <div class="form-group col-sm-4">
            <label>Data estimada da venda:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="datetime" class="form-control" name="data" 
                       placeholder="00/00/0000">
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