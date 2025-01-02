@props(['error' => false])

<x-layout>
    <x-page-heading>Add an entry</x-page-heading>
    <form method="POST" action="{{route('entry.store')}}">
        @csrf
        <fieldset>
            <legend>How are you feeling?</legend>
            <div class="flex content-center gap-2">
                <div class="flex flex-col">
                    <label for="0"> 0 </label>
                    <input type="radio" id="0" value="0" name="mood_level"/>
                </div>
                <div class="flex flex-col">
                    <label for="1">1</label>
                    <input type="radio" id="1" value="1" name="mood_level"/>
                </div>
                <div class="flex flex-col">
                    <label for="2">2</label>
                    <input type="radio" id="2" value="2" name="mood_level"/>
                </div>
                <div class="flex flex-col">
                    <label for="3">3</label>
                    <input type="radio" id="3" value="3" name="mood_level"/>
                </div>
                <div class="flex flex-col">
                    <label for="4">4</label>
                    <input type="radio" id="4" value="4" name="mood_level"/>
                </div>
            </div>
        </fieldset>
        <x-buttons.primary>Submit</x-buttons.primary>
        @if ($error)
            {
            <p class="text-red-600">{{$error}}</p>
        @endif
    </form>
</x-layout>
