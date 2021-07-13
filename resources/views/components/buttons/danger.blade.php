

@props(['size' => 'sm', 'texte' => 'Button'])

<button type="button" {{ $attributes->merge(['class' => 'btn btn-block btn-danger btn-'.$size]) }} >{{$texte}}</button>
