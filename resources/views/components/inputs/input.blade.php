
<div class="input-group mb-3">
@isset($label)<label for="{{$name}}">{{$name}} @if($must)<span style="color:red;position:relative; top:5px">*</span>@endif</label>@endisset
    <input type="{{$type}}" name="{{$name}}" class="form-control shadow-sm rounded-md myinput @error($name) is-invalid @enderror" placeholder="{{{$placeholder == isset($label) ? '': $placeholder}}">
    <div class="input-group-append">
    <div class="input-group-text">
        <span class="fas fa-{{$icon}}"></span>
    </div>
    </div>
    @error($name)
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>