<form id="form-confirm-cancel-order" method="post">
    <div id="modal_confirm_cancel_order" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Xác nhận hủy đơn</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="member">Người đặt</label>
                <input class="form-control" readonly type="text" id="member">
            </div>
            <input type="hidden" name="transactionId" id="transaction-id">
          </div>
          <div class="modal-footer">
            <button id="btn_submit_cancel_order" type="button" class="btn btn-primary">Xác nhận</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</form>