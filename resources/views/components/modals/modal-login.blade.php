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
        <form method="POST" action="{{route('login')}}" id="login-form">
            @csrf
            <x-input2 name="email" icon="user"></x-input2>
            <x-input2 type="password" name="password" icon="key"></x-input2>
          </div>
          <div class="modal-footer">
           @if (Route::has('password.request'))
              <a class="float-left theme-color" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
            @endif
            <button type="submit" {{ $attributes->merge(['class' => 'btn btn-success btn-modal-login']) }} id="btn-modal-confirm">{{__($textright)}}</button>
          </div>
       </form>
    </div>
  </div>
</div>