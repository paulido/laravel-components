<div class="form-group">
    <label for="exampleFormControlSelect1">{{$label}}</label>
    <select class="form-control rounded-md shadow-sm myinput" id="exampleFormControlSelect1" name="{{$name}}">
      @foreach($d as $key => $value)
         <option {{ $isSelected($key) ? 'selected="selected"' : '' }} value="{{$key}}">{{$value}}</option>
      @endforeach
    </select>
  </div>