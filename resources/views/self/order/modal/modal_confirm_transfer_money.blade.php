<form id="form-confirm-transfer-money" method="post">
    <div id="modal_confirm_transfer_money" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Xác nhận chuyển khoản đơn COD</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="money-cod">Số tiền chuyển khoản</label>
                <input readonly type="text" name="moneyCod" id="money-cod">
            </div>
            <div class="form-group">
                <label for="money-cod">Ảnh màn hình giao dịch</label>
                <input type='file' id="capture_transfer" />
                <img id="img_capture_transfer_preview" src="#" alt="your image" />
            </div>
            <input type="hidden" name="transactionId" id="transaction-data">
          </div>
          <div class="modal-footer">
            <button id="btn_submit_transfer" type="button" class="btn btn-primary">Xác nhận</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</form>