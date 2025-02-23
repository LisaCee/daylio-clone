@props(['activity', 'color'])

<div class="flex flex-col gap-2 flex-wrap items-center">
    <x-dynamic-component :component="$activity->icon" class="text-{{$color}} h-3"/>
    <p class="text-d-text-primary dark:text-l-accent text-xs">{{$activity->name}}</p>
</div>
