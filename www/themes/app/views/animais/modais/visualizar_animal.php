<div class="modal fade" id="ModalVisualizarAnimal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Visualizar Animal <span class="ExcluirItem"></span></b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">                
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-2">
                                        <ul class="nav nav-pills">

                                            <!--
                                            ###############
                                            # MENU ANIMAL #
                                            ###############
                                            -->
                                            
                                            <li class="nav-item">
                                                <a class="nav-link active" 
                                                   href="#Resumo" data-toggle="tab">
                                                    Resumo
                                                </a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link" 
                                                   href="#DadosAnimal" data-toggle="tab">
                                                    Dados do Animal
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#Genealogia" data-toggle="tab">
                                                    Genealogia
                                                </a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="#Fotografia" data-toggle="tab">
                                                    Fotografia
                                                </a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="#Pesagem" data-toggle="tab">
                                                    Pesagem
                                                </a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="#Vacinas" data-toggle="tab">
                                                    Vacinas
                                                </a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="#Premios" data-toggle="tab">
                                                    Premios
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#Observacoes" data-toggle="tab">
                                                    Observações
                                                </a>
                                            </li>

                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">

                                            <?= $v->insert("views/animais/modais/visualizar/contents/resumo"); ?>                            
                                            
                                            <?= $v->insert("views/animais/modais/visualizar/contents/dados_animal"); ?>                            

                                            <?= $v->insert("views/animais/modais/visualizar/contents/genealogia"); ?>
                                            
                                            <?= $v->insert("views/animais/modais/visualizar/contents/fotografia"); ?>
                                            
                                            <?= $v->insert("views/animais/modais/visualizar/contents/pesagem"); ?>
                                            
                                            <?= $v->insert("views/animais/modais/visualizar/contents/vacinas"); ?>
                                            
                                            <?= $v->insert("views/animais/modais/visualizar/contents/premios"); ?>

                                            <?= $v->insert("views/animais/modais/visualizar/contents/observacoes"); ?>

                                        </div>
                                        <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
                                </div>
                                <!-- /.nav-tabs-custom -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>                
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>