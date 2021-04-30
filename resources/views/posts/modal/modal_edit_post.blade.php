<form id="form-edit-post" method="post">
    <div id="modal_edit_post" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Chỉnh sửa đơn</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="alert alert-danger d-none">
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input class="form-control" type="text" id="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea class="form-control" value="{{ $post->content }}" id="content">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <label for="thumbnail">Ảnh bìa</label>
                <input class="form-control" type="file" id="thumbnail">
            </div>
            <div class="form-group">
                <label for="number-order">Số lượng đơn</label>
                <input disabled class="form-control" value="{{$post->number_order}}" type="number"  name="number_order" id="number-order">
            </div>
            <div class="form-group">
                <label for="coin_pay">Coin thưởng (tối thiểu 5 coin)</label>
                <input disabled class="form-control" type="text" name="coin_pay" id="coin_pay" value="{{$post->coin_pay}}">
            </div>
            <div class="form-group">
                <label for="requirement_payment">Yêu cầu phương thức thanh toán</label>
                <?php $requirementPayment = getRequirementPayment(); ?>
                <select value="{{$post->requirement_payment}}" id="requirement_payment" class="form-control">
                  @foreach($requirementPayment as $key => $require)
                    <option value="{{$key}}">{{$require}}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="coin_pay">Áp mã freeship ?</label>
                <?php $isApplyFreeship = getIsApplyFreeship(); ?>
                <select value="{{$post->is_apply_freeship}}" id="is_apply_freeship" class="form-control">
                  @foreach($isApplyFreeship as $k => $isApply)
                    <option value="{{$k}}">{{$isApply}}</option>
                  @endforeach
                </select>
            </div>
            <input type="hidden" id="post_id" value="{{$post->id}}">
            <div class="form-group">
                <label for="coin_pay">Nhập link sản phẩm cần đặt</label>
                <div class="link-product-request">
                  @foreach($links as $link)
                  <div class="row">
                    <div class="col-sm">
                      <label>Link sản phẩm</label>
                      <input class="form-control link-product" value="{{$link->url}}" type="text" name="">
                    </div>
                    <div class="col-sm">
                      <label>Số lượng</label>
                      <input class="form-control qty" type="number" value="{{$link->number}}" name="">
                    </div>
                    <div class="col-sm">
                      <label>Thao tác</label><br>
                      <button type="button" class="btn btn-success btn-sm btn-add" style="margin-left: 10px"><span class="glyphicon glyphicon-folder-close yellow">+</span></button>
                      <button type="button" class="btn btn-danger btn-sm btn-sub" style="margin-left: 10px"><span class="glyphicon glyphicon-folder-close yellow">-</span></button>
                    </div>
                  </div>
                  @endforeach
                </div>
            </div>
            
          </div>
          <div class="modal-footer">
            <button id="btn_edit_create_new_post" type="button" class="btn btn-primary">Xác nhận</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</form>