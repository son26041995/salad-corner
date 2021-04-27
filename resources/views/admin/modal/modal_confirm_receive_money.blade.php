<form id="form-confirm-receive-money" method="post">
    <div id="modal_confirm_receive_money" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Xác nhận đã nhận được tiền</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="member">Người chuyển</label>
                <input class="form-control" readonly type="text" id="member">
            </div>
            <div class="form-group">
                <label for="member">Số tiền</label>
                <input class="form-control" readonly type="text" id="money">
            </div>
            <input type="hidden" name="transferId" id="transfer-id">
          </div>
          <div class="modal-footer">
            <button id="btn_submit_transfer_money" type="button" class="btn btn-primary">Xác nhận</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</form>