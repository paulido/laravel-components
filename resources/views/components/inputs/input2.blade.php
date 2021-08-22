<div class="main">
  <div class="form-group has-search">
    @isset($label)<label for="{{$name}}">{{$name}} @if($must)<span style="color:red;position:relative; top:5px">*</span>@endif</label>@endisset
    <span class="fa fa-{{$icon}} form-control-feedback"></span>
    <input type="{{$type}}" name="{{$name}}" id="{{$id}}" class="form-control rounded-md shadow-sm myinput @error($name) is-invalid @enderror" value="{{old($name)}}"  placeholder="{{$placeholder == isset($label) ? '': __($placeholder)}}" @if($required == 'true'){{'required'}}@endif>
    @error($name)
       <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
</div>