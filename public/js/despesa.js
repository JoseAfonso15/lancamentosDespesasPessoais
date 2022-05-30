/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

$(document).ready(function(){
 
$("#valor").mask("99/99/9999");
});


$(document).on('click', '#save', function (e) {

    var data = $("#form-data").serialize();

    $.ajax({
        data: data,
        type: "post",
        url: "/despesa/add",
        success: function (data) {

            if (data.status == true) {
                swal({
                    title: data.msg,
                    text: 'Redirecting...',
                    icon: 'success',
                    timer: 2000,
                    buttons: false,
                })
                        .then(() => {
                            window.location.href = "lista";
                        })
            } else {
                swal({
                    title: data.msg,
                    text: 'Redirecting...',
                    icon: 'error',
                    timer: 2000,
                    buttons: false,
                })
                        .then(() => {
//                            /window.location.href = "add";
                        })

            }

        }
    });
});
$(document).on('click', '#edit', function (e) {

    var data = $("#form-data").serialize();

    $.ajax({
        data: data,
        type: "post",
        url: "/despesa/edit",
        success: function (data) {

            if (data.status == true) {
                swal({
                    title: data.msg,
                    text: 'Redirecting...',
                    icon: 'success',
                    timer: 2000,
                    buttons: false,
                })
                        .then(() => {
                            window.location.href = "lista";
                        })
            } else {
                swal({
                    title: data.msg,
                    text: 'Redirecting...',
                    icon: 'error',
                    timer: 2000,
                    buttons: false,
                })
                        .then(() => {
//                            /window.location.href = "add";
                        })

            }

        }
    });
});

$(function () {
    $('#example1').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });
});
function consultaFornecedor(id) {
    $('#idFornecedor').val(id);
    $('#formularioFornecedor').submit();
}

$(document).on('change', '#categoria_despesa_id', function (e) {
    var categoria_despesa_id = $(this).val();
    getGrupoDespesa(categoria_despesa_id);

});
function getGrupoDespesa(grupo_despesa_id) {
    
    $.ajax({
            url: "/despesa/buscaFornecedorDespesa",
            type: 'POST',
            data: {
                grupo_despesa_id: grupo_despesa_id
            },
            datatype: 'json',
            beforeSend: function beforeSend() {
               // IdealUiJs.createAlertModal();
            },
            success: function success(a) {
                //alert(a);
               $.each(a.itens, function (index, value) {
                   $("#fornecedor_id").append('<option value="' + value.id + '">' + value.nome + '</option>').select();
                });
                //IdealUiJs.hideAlertModal();
            }
        }).fail(function () {
        }).done(function () {
           // IdealUiJs.hideAlertModal();
        });
 
}
$(".js-example-basic-multiple").select2();

