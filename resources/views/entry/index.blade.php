@props(['entries'])

<x-layout>
    <div
        class="grid sm:grid-cols-2 md:grid-cols-3 grid-rows[auto] auto-rows-fr items-stretch gap-3 flex-wrap justify-center mx-auto">
        {{--        @todo Group entries by date--}}
        @if (count($entries) > 0)
            @foreach($entries as $entry)
                <x-entry.entry-card :$entry/>
            @endforeach
        @endif
    </div>

    {{--   Add entry button--}}
    {{--    --}}
    {{--    If no entries, show image to encourage adding an entry--}}
    {{--    Else, loop through entries--}}
</x-layout>
