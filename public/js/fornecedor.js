/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

$(document).on('click', '#save', function (e) {
    
    var data = $("#form-data").serialize();
   
    $.ajax({
        data: data,
        type: "post",
        url: "/fornecedor/add",
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
                            window.location.href = "add";
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
        url: "/fornecedor/edit",
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

$(".js-example-basic-multiple").select2();
 