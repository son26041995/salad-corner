<form id="form-confirm-order" method="post">
    <div id="modal_confirm_order" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Xác nhận đơn hàng</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <p id="msg-confirm"></p>
                <label for="money-cod">Số tiền COD</label>
                <input type="text" name="moneyCod" id="money-cod">
                <input type="hidden" name="transactionId" id="transaction-id">
                <input type="hidden" name="nextStatus" id="transaction-status">
            </div>
            <div class="form-group">
                <label for="money-cod">Mã vận đơn</label>
                <input type="text" name="transaction_code" id="transaction_code">
            </div>
            <div class="form-group">
                <label for="money-cod">Mã đơn hàng</label>
                <input type="text" name="order_code" id="order_code">
            </div>
          </div>
          <div class="modal-footer">
            <button id="btn_submit_order" type="button" class="btn btn-primary">Xác nhận</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</form>