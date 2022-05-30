 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Editar Despesa
            <small> </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Despesa</h3>
                    </div>
                    <?php
                    if (isset($msg)) {
                        echo '<div class="box-header with-border">' . $msg . '</div>';
                    }
                    ?>

                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" id="form-data" name="form-data">
                        <div class="box-body">
                            <input type="hidden" class="form-control" value="<?php echo $despesa[0]['id']; ?>" id="id" name="id" autocomplete="off" required="" placeholder="">
                             <div class="form-group col-md-6" >
                                <label for="descricao">Descricão*</label>
                                <input type="text" class="form-control" value="<?php echo $despesa[0]['desc']; ?>" id="descricao" name="descricao" autocomplete="off" required="" placeholder="">

                            </div>

                            <div class="form-group col-md-6">
                                <label>Tipo*</label>
                                <select class="form-control" id="categoria_despesa_id" name="categoria_despesa_id" autocomplete="off" required="">
                                    <option value="">Selecione...</option>
                                    <?php
                                    if (isset($listaCategoriaDespesa)) {
                                        foreach ($listaCategoriaDespesa as $categoria) {

                                            if ($despesa[0]['categoria_despesa_id'] == $categoria['id']) {
                                                echo '<option value="' . $categoria['id'] . '"selected >' . $categoria['titulo'] . '</option>';
                                            } else {

                                                echo '<option value="' . $categoria['id'] . '">' . $categoria['titulo'] . '</option>';
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group col-md-4">

                                <label>Fornecedor*</label>

                                <select class="form-control" id="fornecedor_id" name="fornecedor_id" autocomplete="off" required="" >

                                    <option value="">Selecione...</option>
                                    <?php
                                    if (isset($listaFornecedor)) {
                                        foreach ($listaFornecedor as $fornecedor) {
                                            if ($despesa[0]['fornecedor_id'] == $fornecedor['id']) {
                                                echo '<option value="' . $fornecedor['id'] . '"selected >' . $fornecedor['nome'] . '-(' . $fornecedor['cidade'] . ')</option>';
                                            } else {
                                                echo '<option value="' . $fornecedor['id'] . '">' . $fornecedor['nome'] . '-(' . $fornecedor['cidade'] . ')</option>';
                                            }
                                        }
                                    }
                                    ?>

                                </select>

                            </div>
                            
                            <div class="form-group col-md-3">
                                <label>Data Competencia*</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input  class="form-control" type="date" data-mask value="<?php echo $despesa[0]['data_compra']; ?>" id="data_compra" name="data_compra" autocomplete="off" required="">
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group col-md-3">
                                <label>Data Vencimento*</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input  class="form-control" type="date" data-mask id="data_vencimento" value="<?php echo $despesa[0]['data_vencimento']; ?>" name="data_vencimento" autocomplete="off" required="">
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group col-md-2">
                                <label for="valor">Valor</label>
                                <input type="text" class="form-control" value="<?php echo $despesa[0]['valor']; ?>" id="valor" name="valor" placeholder="R$ 0.00" value="" autocomplete="off" required=""  tabindex="-1">
                            </div>


                            <div class="form-group col-md-6">

                                <label>Forma Pgto*</label>

                                <select class="form-control" id="tipo_pagamento_id" name="tipo_pagamento_id" autocomplete="off" required="">

                                    <option value="">Selecione...</option>
                                    <?php
                                    if (isset($listaTipoPagamento)) {
                                        foreach ($listaTipoPagamento as $formaPgto) {

                                            if ($despesa[0]['tipo_pagamento_id'] == $formaPgto['id']) {
                                                echo '<option value="' . $formaPgto['id'] . '"selected >' . $formaPgto['titulo'] . '</option>';
                                            } else {
                                                echo '<option value="' . $formaPgto['id'] . '">' . $formaPgto['titulo'] . ' </option>';
                                            }
                                        }
                                    }
                                    ?>

                                </select>

                            </div>

                            <div class="form-group col-md-6">
                                <label>Status*</label>
                                <select class="form-control" id="status_despesa_id" name="status_despesa_id" autocomplete="off" required="">
                                    <option value="">Selecione...</option>
                                    <?php
                                    if (isset($listaStatusDespesa)) {
                                        foreach ($listaStatusDespesa as $tipoPagto) {

                                            if ($despesa[0]['status_despesa_id'] == $tipoPagto['id']) {
                                                echo '<option value="' . $tipoPagto['id'] . '"selected >' . $tipoPagto['titulo'] . '</option>';
                                            } else {

                                                echo '<option value="' . $tipoPagto['id'] . '">' . $tipoPagto['titulo'] . ' </option>';
                                            }
                                        }
                                    }
                                    ?>
 
                                </select>
                            </div>
 
                            <div class="form-group col-md-12">
                                <label for="observacao">Observação</label>
                                <input type="descricao" class="form-control" value="<?php echo $despesa[0]['desc']; ?>" id="observacao" name ="observacao" autocomplete="off" required="" placeholder="Enter email">
                            </div>
 
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer text-center">
                            <button type="button" id="edit" class="btn btn-primary">Gravar</button>
                        </div>
                    </form>
                </div>

                <!-- /.box -->

                <!-- Input addon -->

                <!-- /.box -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->

            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<script src="<?php echo site_url('js/despesa.js') ?>"></script>