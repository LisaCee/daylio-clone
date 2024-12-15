<x-layout>
    <h1>Register</h1>
    <x-form method="POST" action="/register">
        @csrf
        <p class="dark:text-white">Name</p>
        <input label="Name" name="name"/>
        <p>Email</p>
        <input label="Email" name="email" type="email"/>
        <p>Password</p>
        <input label="Password" name="password" type="password"/>
        <p>Confirm</p>
        <input label="Password Confirmation" name="password_confirmation" type="password"/>

        <x-button-primary>Create Account</x-button-primary>
    </x-form>
</x-layout>
