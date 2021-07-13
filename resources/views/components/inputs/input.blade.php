
<div class="input-group mb-3">
    <input type="{{$type}}" name="{{$name}}" {{ $attributes->merge(['class' => 'form-control']) }} placeholder="{{$placeholder ?? ''}}">
    <div class="input-group-append">
    <div class="input-group-text">
        <span class="fas fa-{{$icon}}"></span>
    </div>
    </div>
</div>