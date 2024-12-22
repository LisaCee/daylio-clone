<x-layout>
    <x-page-heading>Register</x-page-heading>
    <x-forms.form method="POST" action="/register">
        @csrf
        <x-forms.input label="Name" name="name"/>

        <x-forms.input label="Email" name="email" type="email"/>

        <x-forms.input label="Password" name="password" type="password"/>

        <x-forms.input label="Confirm Password" name="password_confirmation" type="password"/>

        <x-button-primary>Create Account</x-button-primary>
    </x-forms.form>
</x-layout>
