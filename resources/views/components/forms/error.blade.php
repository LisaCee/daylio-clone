@props(['error' => false])

@if ($error)
    <p class="text-red-600">{{$error}}</p>
@endif
