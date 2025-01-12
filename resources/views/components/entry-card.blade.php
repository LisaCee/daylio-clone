@props(['entry'])
<?php
$iso_date = $entry->created_at;
$date = new DateTime($iso_date);
?>
<div class="flex flex-col gap-4 bg-l-surface dark:bg-d-surface rounded">
    <div class="bg-{{get_color($entry->mood_level)}} p-4">
        <p class="text-d-text-primary dark:text-l-primary">{{$date->format('l')}}</p>
        <p>{{$date->format('F j, Y')}}</p>
        <p>{{$date->format('g:i A')}}</p>
    </div>
    <div class="p-4">
        {{--        @todo Refactor to be reusable component--}}
        @if ($entry->mood_level === 0)
            <div class="flex flex-row">
                <label for="bad">
                    <x-far-face-tired alt="bad" class="h-8 text-accent-gray"/>
                </label>
                <p class="text-{{get_color($entry->mood_level)}}">Bad</p>
            </div>
        @elseif($entry->mood_level === 1)
            <div class="flex">
                <label for="poor">
                    <x-far-face-frown alt="poor" class="h-8 text-accent-blue"/>
                </label>
                <p class="text-{{get_color($entry->mood_level)}}">Poor</p>
            </div>
        @elseif($entry->mood_level === 2)
            <div class="flex">
                <label for="meh">
                    <x-far-face-meh alt="meh" class="h-8 text-accent-purple"/>
                </label>
                <p class="text-{{get_color($entry->mood_level)}}">Meh</p>
            </div>
        @elseif($entry->mood_level === 3)
            <label for="good">
                <x-far-face-smile alt="good" class="h-8 text-accent-green"/>
            </label>
            <p class="text-{{get_color($entry->mood_level)}}">Good</p>
        @elseif($entry->mood_level === 4)
            <div class="flex">
                <label for="4">
                    <x-far-face-laugh-beam alt="great" class="h-8 text-accent-orange"/>
                </label>
                <p class="text-{{get_color($entry->mood_level)}}">Great</p>
            </div>
        @endif
    </div>
</div>
