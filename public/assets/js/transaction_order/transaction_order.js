$(document).ready(function() {
    $('.btn-confirm-order').on('click', function() {
        const transactionId = $(this).parents('tr').data('transactionid')
        const nextStatus = 1
        const member = $(this).parents('tr').data('member')
        const nickShopee = $(this).parents('tr').data('nickshopee')

        const msg = "Xác nhận đã nhận được đơn đặt từ member: '" + member + "', sử dụng nick shopee: '" + nickShopee + "'"
        $('#modal_confirm_order').find('#msg-confirm').text(msg)
        $('#modal_confirm_order').find('#transaction-id').val(transactionId)
        $('#modal_confirm_order').find('#transaction-status').val(nextStatus)

        $('#modal_confirm_order').modal()
    })

    $('#btn_submit_order').on('click', function() {
        const transactionId = $('#form-confirm-order').find('#transaction-id').val()
        const nextStatus = $('#form-confirm-order').find('#transaction-status').val()
        const moneyCod = $('#form-confirm-order').find('#money-cod').val()
        const transactionCode = $('#form-confirm-order').find('#transaction_code').val()
        const orderCode = $('#form-confirm-order').find('#order_code').val()
        if (!moneyCod || !orderCode || !transactionCode) return

        const url = window.location.origin + '/self/order/update-status'
        $.ajax({
            url,
            type: 'POST',
            data: {transactionId, nextStatus, moneyCod, orderCode, transactionCode},
            dataType: 'json',
            success: function(r){
                $('#modal_confirm_order').modal('hide')
                window.location.reload()
            }
        })
    })

    $('#btn_transfer_money').on('click', function() {
        $('#modal_transfer_money').modal()
    })

    $(document).on('change', '.selectTransaction', function() {
        const transactionId = $(this).parents('tr').data('transactionid')
        if($(this).is(":checked")) {
            console.log("1111")
            const transactionCode = $(this).parents('tr').data('transactioncode')
            const money = $(this).parents('tr').data('money')
            const newRow = '<tr data-money="' + money + '" data-transactionid="' + transactionId + '">' +
                                '<td>' + transactionCode + '</td>' +
                                '<td>' + money + '</td>' +
                            '</tr>'
            $('#table-show-transaction-selected').find('tbody').append(newRow)
        } else {
            console.log("2222")
            $('#table-show-transaction-selected').find(`[data-transactionid='${transactionId}']`).remove()
        }
        let totalMoney = 0
        $('#table-show-transaction-selected').find(`tr[data-money]`).each(function() {
            totalMoney += $(this).data('money')
        })
        $('#total-money').text(totalMoney)
    });

    $('#btn_click_transfer').on('click', function() {
        let data = []
        let totalMoney = 0
        $('#table-show-transaction-selected').find(`tr[data-money]`).each(function() {
            const transactionId = $(this).data('transactionid')
            const money = $(this).data('money')
            totalMoney += money
            data.push({
                transactionId, money
            })
        })
        $('#form-confirm-transfer-money').find('#transaction-data').val(JSON.stringify({transactionData: data}))
        $('#form-confirm-transfer-money').find('#money-cod').val(totalMoney)
        $('#img_capture_transfer_preview').attr('src', '');
        $("#capture_transfer").val('')
        $('#modal_confirm_transfer_money').modal()
    })

    $('#btn_submit_transfer').on('click', function() {
        const transactionData = $('#modal_confirm_transfer_money').find('#transaction-data').val()
        const money = $('#modal_confirm_transfer_money').find('#money-cod').val()
        var fileInput = $.trim($("#capture_transfer").val());
        const evidenceLength = fileInput && fileInput !== ''
        const url = window.location.origin + '/self/order/transfer-money'

        var ext = $('#capture_transfer').val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            alert('invalid extension!');
        }
        if (!transactionData || !money || !evidenceLength) return

        var formData = new FormData();
        formData.append('money', money);
        formData.append('transactionData', transactionData);
        // Attach file
        formData.append('evidence', $('#modal_confirm_transfer_money').find('#capture_transfer')[0].files[0]); 
        $.ajax({
            url,
            type: 'POST',
            data: formData,
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success: function(r){
                window.location.reload()
            }
        })
    })

    $('#create-new-post').on('click', function() {

        $('#modal_create_new_post').modal()
    })

    function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          
          reader.onload = function(e) {
            $('#img_capture_transfer_preview').attr('src', e.target.result);
          }
          
          reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
      }

    function getProductData() {
        const data = []
        $('.link-product-request').find('.row').each(function(i, obj) {
            console.log(obj)
            const productLink = $(this).find('.link-product').val()
            const qty = $(this).find('.qty').val()
            console.log(555, productLink, qty)
            if (productLink !== "" && qty !== "") {
                data.push({productLink, qty})
            }
        })

        return data
    }

      $("#capture_transfer").change(function() {
        readURL(this);
      });

      $('#btn_submit_create_new_post').on('click', function() {
        const title = $('#form-create-post').find('#title').val()
        const content = $('#form-create-post').find('#content').val()
        const thumb = $.trim($('#form-create-post').find("#thumbnail").val());
        const thumbLength = thumb && thumb !== ''
        const numberOrder = $('#form-create-post').find('#number-order').val()
        const coinPay = $('#form-create-post').find('#coin_pay').val()
        const requirementPayment = $('#form-create-post').find('#requirement_payment').val()
        const isApplyFreeship = $('#form-create-post').find('#is_apply_freeship').val()

        var ext = $('#form-create-post').find("#thumbnail").val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            alert('invalid extension!');
        }
        const productData = getProductData()
        console.log(66666666, productData.length)
        if (!title || !content || !thumbLength || !numberOrder || !coinPay || !requirementPayment || !isApplyFreeship || productData.length == 0) return

        var formData = new FormData();
        formData.append('title', title);
        formData.append('content', content);
        formData.append('numberOrder', numberOrder);
        formData.append('coinPay', coinPay);
        formData.append('requirementPayment', requirementPayment);
        formData.append('isApplyFreeship', isApplyFreeship);
        formData.append('productData', JSON.stringify(productData));
        // Attach file
        formData.append('thumbnail', $('#form-create-post').find("#thumbnail")[0].files[0]);
        const url = window.location.origin + '/post/create'
        $.ajax({
            url,
            type: 'POST',
            data: formData,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success: function(r){
                window.location.reload()
            },
            error: function(data) {
                var errors = JSON.parse(data.responseText);
                console.log(2222,errors);
                $('.alert-danger').empty().append('<p>' + errors.message + '</p>').removeClass('d-none')
            }
        })
      })

      $(document).on('click', '.btn-add', function() {
        const newRow = '<div class="row">' +
                            '<div class="col-sm">' +
                              '<label>Link sản phẩm</label>' +
                              '<input class="form-control link-product" type="text" name="">'+
                            '</div>' +
                            '<div class="col-sm">' +
                              '<label>Số lượng</label>' +
                              '<input class="form-control qty" type="number" name="">' +
                            '</div>' +
                            '<div class="col-sm">' +
                              '<label>Thao tác</label><br>' +
                              '<button type="button" class="btn btn-success btn-sm btn-add" style="margin-left: 10px"><span class="glyphicon glyphicon-folder-close yellow">+</span></button>' +
                              '<button type="button" class="btn btn-danger btn-sm btn-sub" style="margin-left: 10px"><span class="glyphicon glyphicon-folder-close yellow">-</span></button>' +
                            '</div>' +
                        '</div>'
        $('.link-product-request').append(newRow)
      })

      $(document).on('click', '.btn-sub', function() {
        const numberRow = $('.link-product-request').find('.row').length
        if (numberRow <= 1) return
        $(this).parents('.row').remove()
      })

      $('.btn-cancel-order').on('click', function() {
        const transactionId = $(this).parents('tr').data('transactionid')
        const transactionStatus = $(this).parents('tr').data('transactionstatus')
        const member = $(this).parents('tr').data('member')
        $('#modal_confirm_cancel_order').find('#member').val(member)
        $('#modal_confirm_cancel_order').find('#transaction-id').val(transactionId)
        $('#modal_confirm_cancel_order').modal()
      })

      $('#btn_submit_cancel_order').on('click', function() {
        const transactionId = $('#modal_confirm_cancel_order').find('#transaction-id').val()
        const url = window.location.origin + '/self/order/update-status'
        $.ajax({
            url,
            type: 'POST',
            data: {transactionId, nextStatus: 4},
            dataType: 'json',
            success: function(r){
                window.location.reload()
            }
        })
       })

       $('.btn-confirm-order-success').on('click', function() {
            const transactionId = $(this).parents('tr').data('transactionid')
            const transactionCode = $(this).parents('tr').data('transactioncode')

            $('#modal_confirm_order_success').find('#transaction-id').val(transactionId)
            $('#modal_confirm_order_success').find('#transaction-code').val(transactionCode)
            $('#modal_confirm_order_success').find('#msg-confirm').text('Xác nhận đơn hàng có mã vận đơn: "' + transactionCode + '" đã giao thành công?')
            $('#modal_confirm_order_success').modal()
       })

       $('#btn_submit_order_success').on('click', function() {
        const transactionId = $('#modal_confirm_order_success').find('#transaction-id').val()
        const url = window.location.origin + '/self/order/update-status'
        $.ajax({
            url,
            type: 'POST',
            data: {transactionId, nextStatus: 3},
            dataType: 'json',
            success: function(r){
                window.location.reload()
            }
        })
       })

       $('.btn-confirm-receive-money').on('click', function() {
            const transferId = $(this).parents('tr').data('transferid')
            const money = $(this).parents('tr').data('money')
            const member = $(this).parents('tr').data('member')

            $('#modal_confirm_receive_money').find('#transfer-id').val(transferId)
            $('#modal_confirm_receive_money').find('#member').val(member)
            $('#modal_confirm_receive_money').find('#money').val(money)

            $('#modal_confirm_receive_money').modal()
       })

       $('#btn_submit_transfer_money').on('click', function() {
        const transferId = $('#modal_confirm_receive_money').find('#transfer-id').val()
        const url = window.location.origin + '/admin/confirm-transfer-money'
        $.ajax({
            url,
            type: 'POST',
            data: {transferId},
            dataType: 'json',
            success: function(r){
                window.location.reload()
            }
        })
       })

})