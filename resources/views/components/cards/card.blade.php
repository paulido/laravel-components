<div class="card mycard">
    <div class="card-header mycard-header">{{$title}}</div>
    <div class="card-body">
      {{$slot}}
    </div>
    <div class="card-footer mycard-footer">
        <!-- <button class="btn btn-primary float-right {{$btn ?? ''}}" type="submit" onclick='$(this).closest("form").submit();'>Enregistrer</button> -->
    </div>
</div>