@props(['entry'])
<?php
$iso_date = $entry->created_at;
$date = new DateTime($iso_date);
$mood_level = $entry->mood_level;
$color = get_color($mood_level);
$activities = $entry->activities;
?>
<div class="flex flex-col bg-l-surface dark:bg-d-surface rounded-lg">
    <div class="bg-{{$color}}/40 bg-opacity-100 px-6 py-2 rounded-t-lg">
        <p class="dark:text-{{$color}}-dark text-xs">{{Str::upper($date->format('D, M j'))}}</p>
    </div>
    <div class="flex gap-4 items-center px-6 py-4">
        <x-entry.mood :$mood_level/>
        <p class="text-d-text-primary dark:text-l-accent text-xs">{{$date->format('g:i A')}}</p>
    </div>
    <div class="flex flex-wrap gap-2 px-6 py-2">
        @if (count($activities) > 0)
            @foreach($activities as $activity)
                <x-activity.activity :$activity :$color/>
            @endforeach
        @endif
    </div>
</div>
