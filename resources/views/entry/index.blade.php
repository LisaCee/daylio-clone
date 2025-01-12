@props(['entries'])
<?php dump($entries); ?>
<x-layout>
    <div class="flex gap-4">
        {{--        @todo Group entries by date--}}
        @if (count($entries) > 0)
            @foreach($entries as $entry)
                <x-entry-card :$entry/>
            @endforeach
        @endif
    </div>

    {{--   Add entry button--}}
    {{--    --}}
    {{--    If no entries, show image to encourage adding an entry--}}
    {{--    Else, loop through entries--}}
</x-layout>
