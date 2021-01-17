<?php $v->layout("theme"); ?>
<!--
################
# CONTENT HOME #
################
-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= flash(); ?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Painel</h1><span class="text-sm">Fazenda #Nome da Fazenda#</span>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!--
            ################
            # SMALL BOXES #
            ################
            -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Total de Animais</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <a href="#" class="small-box-footer"> Mais info <i class="fas fa-arrow-circle-right"></i></a>                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Arroba do Boi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-at"></i>
                        </div>
                        <a href="#" class="small-box-footer"> Mais info <i class="fas fa-arrow-circle-right"></i></a>                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>GMD Médio</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <a href="#" class="small-box-footer"> Mais info <i class="fas fa-arrow-circle-right"></i></a>                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>@ Boi ESALQ/BMF</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <a href="#" class="small-box-footer"> Mais info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <!--
            ################
            # APRENDA MAIS #
            ################
            -->

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">           
                            <h3 class="card-title">
                                <i class="fas fa-graduation-cap"></i>
                                &nbsp;&nbsp; Aprenda mais:
                            </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <li class="item">
                                    <div class="product-img">
                                        <img src="<?= image("images/blog/default.png", 150, 150); ?>"
                                             alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="#Link para o blog#" class="product-title">
                                            Titulo do Blog
                                        </a>
                                        <span class="product-description">
                                            <?php str_limit_chars("teste teste teste teste teste teste teste teste", 30) ?>
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->                                
                                <li class="item">
                                    <div class="product-img">
                                        <img src="<?= image("images/blog/default.png", 150, 150); ?>"
                                             alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="#Link para o blog#" class="product-title">
                                            Titulo do Blog
                                        </a>
                                        <span class="product-description">
                                            <?php str_limit_chars("teste teste teste teste teste teste teste teste", 30) ?>
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->                                
                                <li class="item">
                                    <div class="product-img">
                                        <img src="<?= image("images/blog/default.png", 150, 150); ?>"
                                             alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="#Link para o blog#" class="product-title">
                                            Titulo do Blog
                                        </a>
                                        <span class="product-description">
                                            <?php str_limit_chars("teste teste teste teste teste teste teste teste", 30) ?>
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->                                
                                <li class="item">
                                    <div class="product-img">
                                        <img src="<?= image("images/blog/default.png", 150, 150); ?>"
                                             alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="#Link para o blog#" class="product-title">
                                            Titulo do Blog
                                        </a>
                                        <span class="product-description">
                                            <?php str_limit_chars("teste teste teste teste teste teste teste teste", 30) ?>
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->                                
                                <li class="item">
                                    <div class="product-img">
                                        <img src="<?= image("images/blog/default.png", 150, 150); ?>"
                                             alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="#Link para o blog#" class="product-title">
                                            Titulo do Blog
                                        </a>
                                        <span class="product-description">
                                            <?php str_limit_chars("teste teste teste teste teste teste teste teste", 30) ?>
                                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->                                
                            </ul>
                        </div>
                        <!-- /.card-body -->                        
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.aprenda mais -->
</div>
<!-- /.content-wrapper -->