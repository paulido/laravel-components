<div class="form-group">
    <label for="exampleFormControlSelect1">{{$label}}</label>
    <select class="form-control rounded-md shadow-sm myinput" id="exampleFormControlSelect1" name="{{$name}}">
      @foreach($d as $model)
         <option {{ $isSelected($model->id) ? 'selected="selected"' : '' }} value="{{$model->id}}">{{$model->name}}</option>
      @endforeach
    </select>
  </div>