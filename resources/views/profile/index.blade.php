<?php
?>
<x-layout>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <x-page-heading>Profile</x-page-heading>
    <div class="flex flex-col gap-2 p-5 my-5 border dark:border-d-border rounded-md dark:bg-d-surface">
        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
    </div>
    <div class="flex justify-between">
        <x-buttons.primary href="/profile/edit">Edit</x-buttons.primary>

        <form method="POST" action="{{route('profile.destroy')}}">
            @csrf
            @method('DELETE')
            <x-buttons.destructive>Delete Account</x-buttons.destructive>
        </form>
    </div>
</x-layout>
