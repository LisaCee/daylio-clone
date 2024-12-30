<?php
?>
<x-layout>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <x-page-heading>Profile</x-page-heading>
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
    <x-button-link href="/profile/edit">Edit</x-button-link>
</x-layout>
