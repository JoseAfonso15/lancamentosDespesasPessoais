

<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?php echo site_url('assets/datatables/dataTables.bootstrap.css') ?>">
<div class="content-wrapper">
    <section class="content-header">
        <h1>Lista Fornecedor</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Fornecedor</li>
            <li class="active">Lista Fornecedor</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="box">
                    <div class="box-body">
                        <form role="form" name="formularioFornecedor"  action="addFornecedor" method="post" class="form-horizontal">
                            <div style="text-align:right">
                                <label><a href="add">Novo Fornecedor</a></label>
                            </div>
                        </form>
                        <form role="form" name="formularioFornecedor" id="formularioFornecedor" action="edit" method="post" class="form-horizontal">
                            <input name="idFornecedor" id="idFornecedor" type="hidden" value="" readonly="readonly">
                        </form>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Cidade</th>
                                    <th style="width:24px">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ((isset($fornecedorLista)) && (!empty($fornecedorLista))) {
                                    foreach ($fornecedorLista as $fornecedor) {
                                        ?>
                                        <tr>
                                            <td><?php echo $fornecedor['nome']; ?></td>
                                            <td><?php echo $fornecedor['telefone']; ?></td>
                                            <td><?php echo $fornecedor['cidade']; ?></td>
                                            <td><a href="#" onclick="consultaFornecedor('<?php echo $fornecedor['id']; ?>')"><i class="fa fa-pencil-square-o"></i></a></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>

<script src="<?php echo site_url('/assets/js/jquery/jquery-2.2.3.min.js') ?>"></script>
<script src="<?php echo site_url('/assets/js/bootstrap/bootstrap.min.js') ?>"></script>
<script src="<?php echo site_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo site_url('assets/datatables/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo site_url('js/fornecedor.js') ?>"></script>

<script>
                                                var base_url = '<?php echo base_url() ?>';
                                                $(document).ready(function () {

                                                });
                                                $(function () {
//        $('#example1').DataTable({
//            "paging": true,
//            "lengthChange": true,
//            "searching": true,
//            "ordering": true,
//            "info": true,
//            "autoWidth": true,
//      
//        });
                                                });
                                                function consultarDespesa(id) {

                                                    $('#idFornecedor').val(id);
                                                    $('#formularioFornecedor').submit();
                                                }
</script>


