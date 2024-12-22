@props(['label', 'name'])

<div>
    @if ($label)
        <x-forms.label class="label" :$name :$label/>
    @endif

    <div class="mt-2">
        {{$slot}}
        <x-forms.error :error="$errors->first($name)"/>
    </div>
</div>
