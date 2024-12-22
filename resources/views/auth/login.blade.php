<x-layout>
    <x-page-heading>Log In</x-page-heading>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>

        <x-button-primary>Login</x-button-primary>
    </x-forms.form>
</x-layout>
