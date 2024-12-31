@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/00 dark:bg-d-surface border border-d-border px-5 py-4 w-full focus:outline-accent-purple',
        'value' => old($name)
    ]
@endphp

<x-forms.field :$label :$name>
    <input {{$attributes->merge($defaults)}}>
</x-forms.field>
