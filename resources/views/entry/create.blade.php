@props(['error' => false, 'activities'])

<x-layout>

    <x-page-heading>Add an entry</x-page-heading>
    <form method="POST" action="{{route('entry.store')}}" class="flex flex-col gap-4 w-full">
        @csrf
        <div class="flex flex-col gap-10">
            <x-entry.moods/>
            <x-activity.activities :$activities/>
        </div>
        <x-buttons.primary>Submit</x-buttons.primary>
        @if ($error)
            {
            <p class="text-red-600">{{$error}}</p>
        @endif
    </form>
</x-layout>
