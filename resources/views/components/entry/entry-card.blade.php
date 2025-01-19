@props(['entry'])
<?php
$iso_date = $entry->created_at;
$date = new DateTime($iso_date);
$mood_level = $entry->mood_level;
?>
<div class="flex flex-col gap-4 bg-l-surface dark:bg-d-surface rounded-lg">
    <div class="bg-{{get_color($entry->mood_level)}} p-6">
        <p class="text-d-text-primary dark:text-l-primary">{{$date->format('l')}}</p>
        <p>{{$date->format('F j, Y')}}</p>
        <p>{{$date->format('g:i A')}}</p>
    </div>
    <x-entry.mood :$mood_level/>
</div>
