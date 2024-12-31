@props([
    'href' => null,
    'type' => 'button'
])

@if ($href)
    <a {{$attributes->class(['bg-accent-purple hover:bg-accent-purple-dark text-d-text-primary rounded px-5 py-2'])->merge(['href' => $href])}}>{{$slot}}</a>
@else
    <x-buttons.base>{{$slot}}</x-buttons.base>
@endif
