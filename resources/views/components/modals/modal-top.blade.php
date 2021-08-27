<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         {{$slot}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn-close" data-dismiss="modal">{{__($textleft)}}</button>
        <button type="{{$type}}" {{ $attributes->merge(['class' => 'btn btn-danger btn-modal-confirm']) }} id="btn-modal-confirm">{{__($textright)}}</button>
      </div>
    </div>
  </div>
</div>