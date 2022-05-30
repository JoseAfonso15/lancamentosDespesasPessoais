

<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?php echo site_url('assets/datatables/dataTables.bootstrap.css') ?>">
<div class="content-wrapper">
    <section class="content-header">
        <h1>Lista Despesa</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Despesa</li>
            <li class="active">Lista Despesa</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="box">
                    <div class="box-body">
                        <form role="form" name="formularioDespesa"  action="addDespesa" method="post" class="form-horizontal">
                            <div style="text-align:right">
                                <label><a href="add">Nova Despesa</a></label>                               
                            </div>
                        </form>
                        <form role="form" name="formularioDespesa" id="formularioDespesa" action="edit"   method="post" class="form-horizontal">
                            <input name="idDespesa" id="idDespesa" type="hidden" value="" readonly="readonly">
                        </form>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Descrição</th>
                                    <th>Fornecedor</th>
                                    <th>Valor</th>
                                    <th>Forma Pgto</th>
                                    <th>Vencimento</th>
                                    <th style="text-align:center">Status</th>
                                    <th style="width:24px">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ((isset($despesaLista)) && (!empty($despesaLista))) {
                                    foreach ($despesaLista as $despesa) {
                                        ?>
                                        <tr>
                                            <td><?php echo $despesa['desc']; ?></td>
                                            <td><?php echo $despesa['fornecedor']; ?></td>
                                            <td><?php echo 'R$ ' . number_format($despesa['valor'], 2, ',', '.'); ?></td>
                                            <td><?php echo $despesa['tipo']; ?></td>
                                            <td><?php echo date("d/m/Y", strtotime($despesa['data_vencimento'])); ?></td>
                                            <td style="text-align:center" bgcolor="<?php echo $despesa['color'] ?>"><?php echo $despesa['status']; ?></td>
                                            <td><a href="#" onclick="consultarDespesa('<?php echo $despesa['id']; ?>')"><i class="fa fa-pencil-square-o"></i></a></td>
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

<!-- page script -->
<script>
                                                var base_url = '<?php echo base_url() ?>';
                                                $(document).ready(function () {

                                                });
                                                $(function () {
                                                    $('#example1').DataTable({
                                                        "paging": true,
                                                        "lengthChange": true,
                                                        "searching": true,
                                                        "ordering": true,
                                                        "info": true,
                                                        "autoWidth": true,

                                                    });
                                                });
                                                function consultarDespesa(id) {

                                                    $('#idDespesa').val(id);
                                                    $('#formularioDespesa').submit();
                                                }
</script>
