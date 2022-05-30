

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cadastro de Fornecedor
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
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Fornecedor</h3>
                    </div>
                     
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" id="form-data" name="form-data">
                        <div class="box-body">
                            <input type="hidden" class="form-control" value="<?php echo $fornecedor['id']; ?>" id="id" name="id" autocomplete="off" required="" placeholder="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome*</label>
                                <input  type="text" class="form-control" value="<?php echo $fornecedor['nome']; ?>" id="nome" name="nome" placeholder="Digite o nome" >
                                <span class="text-danger error-text nome_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Telefone*</label>
                                <input type="text" class="form-control" value="<?php echo $fornecedor['telefone']; ?>" id="telefone" name="telefone" placeholder="Digite o telefone" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Cidade*</label>
                                <input type="text" class="form-control" value="<?php echo $fornecedor['cidade']; ?>" id="cidade" name="cidade" placeholder="digite a cidade" required>
                            </div>
<!--                             <div class="form-group ">
                                <label>Tipo*</label>
                                <select class="form-control js-example-basic-multiple" multiple="multiple" id="categoria_despesa_id" name="categoria_despesa_id" autocomplete="off" required="">
                                    <option value="">Selecione...</option>
                                    <?php
                                    if (isset($listaCategoriaDespesa)) {
                                        foreach ($listaCategoriaDespesa as $categoria) {

                                                echo '<option value="' . $categoria['id'] . '">' . $categoria['titulo'] . '</option>';
                                            }
                                        
                                    }
                                    ?>
                                </select>
                            </div>-->
                            
                            </div>
                        <!-- /.box-body -->

                        <div class="box-footer">

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
<script src="<?php echo site_url('js/fornecedor.js')?>"></script>
 