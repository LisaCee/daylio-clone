<x-layout>
    <x-page-heading>Register</x-page-heading>
    <x-forms.form method="POST" action="/register">
        @csrf
        <div class="flex gap-4">
            <x-forms.input label="First Name" name="first_name"/>

            <x-forms.input label="Last Name" name="last_name"/>
        </div>

        <x-forms.input label=" Email
            " name="email" type="email"/>

        <x-forms.input label="Password" name="password" type="password"/>

        <x-forms.input label="Confirm Password" name="password_confirmation" type="password"/>

        <x-buttons.primary>Create Account</x-buttons.primary>
    </x-forms.form>
</x-layout>
