<form id="form-add-coin" method="post">
    <div id="modal_add_coin" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nạp thêm coin</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="money-cod">Thông tin chuyển khoản</label>
                <p></p>
            </div>
            <div class="form-group">
                <label for="money-cod">Số coin cần nạp (1 coin tương đương 1k VNĐ)  <span id="money-coin"></span></label>
                <input class="form-control" type="number" name="coin" id="coin-recharged">
            </div>
            <div class="form-group">
                <label for="money-cod">Ảnh màn hình giao dịch</label>
                <input type='file' id="capture_transfer" />
                <img id="img_capture_transfer_preview" src="#" alt="your image" />
            </div>
          </div>
          <div class="modal-footer">
            <button id="btn_submit_add_coin" type="button" class="btn btn-primary">Xác nhận</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</form>