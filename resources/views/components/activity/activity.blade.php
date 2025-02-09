@props(['activity', 'color'])

<div class="flex items-center">
    <x-dynamic-component :component="$activity->icon" class="text-{{$color}} h-3"/>
    <p class="text-d-text-primary dark:text-l-accent text-xs">{{$activity->name}}</p>
</div>
