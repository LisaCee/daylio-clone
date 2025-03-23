@props(['report'])

<?php
$mood_level = $report['average_mood_level'];
$color = get_color($mood_level);
//$activities = $entry->activities;
?>
<x-layout>
    <x-page-heading>Average Weekly Mood</x-page-heading>
    <x-entry.mood :$mood_level/>
    <p>{{$mood_level}}</p>
</x-layout>
