<form action="{{route('member-submit-order', ['id' => $post->id])}}" method="get">
<div id="modal_view_link_order" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Chi tiết sản phẩm cần đặt</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Zalo chủ shop: {{ $post->zalo }}</h5>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Chọn nick đặt</label>
          <select class="form-control" name="shopee_link">
            @foreach ($shopeeNickList as $key => $value)
            <option value="{{$value->id}}">{{ $value->link_shopee }}</option>
            @endforeach
          </select>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Link Sản Phẩm</th>
              <th scope="col">Số lượng cần đặt</th>
            </tr>
          </thead>
          <tbody>
            @foreach($links as $k => $link)
              <tr>
                <th scope="row">{{++$k}}</th>
                <td><a href="{{$link->url}}"></a>{{$link->url}}</td>
                <td>{{$link->number}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        @if (Auth::id() !== $post->user_id)
        <button id="btn_member_submit_order" type="submit" class="btn btn-primary">Chốt đặt</button>
        @endif
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
</form>