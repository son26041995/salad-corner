<form id="form-confirm-received-coin" method="post">
    <div id="modal-confirm-received-coin" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Xác nhận đã nhận tiền ck</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="member">Người mua coin</label>
                <input class="form-control" readonly type="text" id="member">
            </div>
            <div class="form-group">
                <label for="coin-number">Số coin</label>
                <input class="form-control" readonly type="text" id="coin-number">
            </div>
            <div class="form-group">
                <label for="money">Số tiền mua coin</label>
                <input class="form-control" readonly type="text" id="money">
            </div>
            <input type="hidden" name="coinHistory" id="coin-history-id">
          </div>
          <div class="modal-footer">
            <button id="btn_submit_received_coin" type="button" class="btn btn-primary">Xác nhận</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</form>