<!--
##########################
# CONTENT DADOS PESSOAIS #
##########################
-->
<div class="active tab-pane" id="DadosPessoais">
    <form class="form-horizontal" id="FormDadosPessoais">
        <div class="row">
            <div class="form-group col-sm-6">
                <label><sup>*</sup>Nome Completo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nome" 
                           placeholder="Digite aqui ..." required>
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label><sup>*</sup>Cargo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-hat-cowboy-side"></i></span>
                    </div>
                    <input type="text" class="form-control" name="job" 
                           placeholder="Digite aqui ..." required>
                </div>                
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label><sup>*</sup>CPF:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                    </div>
                    <input type="text" class="form-control" name="cpf" 
                           placeholder="000.000.000-00" required>
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label>Sexo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                    </div>
                    <input type="text" class="form-control" name="sex" 
                           placeholder="Digite aqui ...">
                </div>                
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>Data de Nascimento:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" name="nascimento" 
                           placeholder="00/00/0000">
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label>Idade:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-clock"></i></span>
                    </div>
                    <input type="text" class="form-control" name="age" 
                           placeholder="Digite aqui ..." required>
                </div>                
            </div>
        </div>        
        <div class="row">
            <div class="form-group col-sm-12">
                <label><sup>*</sup>Email:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" name="email" 
                           placeholder="Digite aqui ..." required>
                </div>
            </div>           
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label><sup>*</sup>Senha:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" name="pass" 
                           placeholder="Digite 8 caracteres no mínimo" required>
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label><sup>*</sup>Repetir Senha:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" name="confirm" 
                           placeholder="Repitir senha" required>
                </div>                
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-sm-12">                                                
                    <button id="AtualizarUsuario"
                            type="submit"
                            class="btn btn-primary">
                        <i class="fas fa-user-edit"></i>
                        &nbsp;&nbsp;Atualizar meus dados
                    </button>
                </div>
            </div>
        </div>
    </form>
    <div class="text-sm">* Itens Obrigatórios</div>
</div>