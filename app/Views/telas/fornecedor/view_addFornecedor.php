

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cadastro de Fornecedor
            <small> </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Fornecedor</a></li>
            <li class="active">Adiciona fornecedor</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Fornecedor</h3>
                    </div>
                    <?php
                    if (isset($_GET["msg"])) {
                        echo '<div class="box-header with-border">' . $_GET["msg"] . '</div>';
                    }
                    ?>
                    <form method="post" id="form-data" name="form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome*</label>
                                <input  type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" >
                                <span class="text-danger error-text nome_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Telefone*</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Cidade*</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="digite a cidade" required>
                            </div>
                        </div>                        
                        <div class="box-footer">
                            <button type="button" id="save" class="btn btn-primary">Gravar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?php echo site_url('js/fornecedor.js') ?>"></script>