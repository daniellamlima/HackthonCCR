<!--
##########
# NAVBAR #
##########
-->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">
                <i class="fas fa-bars"></i> &nbsp;&nbsp; Menu
            </a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->        
        <li class="nav-item">
            <a class="nav-link" href="<?= url("/relatorios"); ?>" title="relatorios">
                <i class="fas fa-chart-pie"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#modal-suporte" title="suporte">
                <i class="fas fa-life-ring"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="<?= url("/notificacoes"); ?>" title="notificações">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= url("/perfil"); ?>" title="opções do usuário">
                <i class="fas fa-user-cog"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= url("/sair"); ?>" title="sair">
                <i class="fas fa-door-open" style="color: #dc3545;"></i>
            </a>
        </li>        
    </ul>
</nav>

<!--SUPORTE-->
<div class="modal fade" id="modal-suporte">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">                
                <h4 class="modal-title">
                    <i class="far fa-calendar-minus"></i>
                    &nbsp;Fale Conosco:
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="suporte" action="<?= url("/suporte"); ?>" method="post">
                <div class="modal-body">
                    <div id="ajax_response_suporte"></div>
                    <div class="form-group">
                        <label>
                            <i class="far fa-life-ring"></i>&nbsp;
                            O que precisa ?
                        </label>
                        <select name="subject" class="form-control">
                            <option value="Pedido de suporte">Preciso de suporte</option>
                            <option value="Nova sugestão">É uma sugestão</option>
                            <option value="Nova reclamação">É uma reclamação</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><i class="far fa-comments"></i>&nbsp;
                            Mensagem:
                        </label>
                        <textarea id="SuporteTextArea" class="form-control" name="message"
                                  placeholder="Digite aqui ..." required></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button id="EnviarSuporte" type="submit" class="btn btn-primary">
                        <i class="far fa-paper-plane"></i>&nbsp;&nbsp;Enviar agora
                    </button>
                </div>
            </form>
            <!-- /.form -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->