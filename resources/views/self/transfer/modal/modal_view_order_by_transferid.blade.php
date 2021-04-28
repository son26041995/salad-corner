<form method="post">
    <div id="modal_view_order_by_transfer_id" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Danh sách mã vận đơn</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group" style="overflow: scroll;">
                <label for="table-list-transaction">Danh sách </label>
                <table class="table table-bordered" id="table-list-transaction-by-transferid">
                    <thead class="thead-light ">
                      <tr>
                        <th scope="col">#</th>
                          <th scope="col">Người đặt</th>
                          <th scope="col">Trạng thái đơn</th>
                          <th scope="col">Tiền đơn</th>
                          <th scope="col">Mã vận đơn</th>
                          <th scope="col">Mã đơn hàng</th>
                          <th scope="col">Nick đặt</th>
                          <th scope="col">Ngày đặt đơn</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
            </div>
            <div class="pull-right"><span style="background-color: antiquewhite;" id="total"></span></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</form>