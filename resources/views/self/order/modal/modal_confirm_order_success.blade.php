<form id="form-confirm-order-success" method="post">
    <div id="modal_confirm_order_success" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Xác nhận đã nhận hàng</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <p id="msg-confirm"></p>
            <input type="hidden" name="transactionId" id="transaction-id">
            <input type="hidden" name="transactionCode" id="transaction-code">
          </div>
          <div class="modal-footer">
            <button id="btn_submit_order_success" type="button" class="btn btn-primary">Xác nhận</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</form>