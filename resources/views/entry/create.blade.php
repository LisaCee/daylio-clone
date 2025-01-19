@props(['error' => false])

<x-layout>
    <x-page-heading>Add an entry</x-page-heading>
    <form method="POST" action="{{route('entry.store')}}" class="flex flex-col gap-4 w-full">
        @csrf
        <fieldset>
            <legend>How are you feeling?</legend>
            <x-entry.moods/>
        </fieldset>
        <x-buttons.primary>Submit</x-buttons.primary>
        @if ($error)
            {
            <p class="text-red-600">{{$error}}</p>
        @endif
    </form>
</x-layout>
