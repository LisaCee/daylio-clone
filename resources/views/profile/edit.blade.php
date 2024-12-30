<x-layout>
    <x-page-heading>Profile</x-page-heading>
    <x-forms.form method="POST" :action="route('profile.update')">
        @csrf
        @method('PUT')
        <x-forms.input label="Email" name="email" type="email" value="{{old('email', $user->email)}}"/>

        <x-forms.input label="New Password" name="password" type="password"/>

        <x-forms.input label="Confirm New Password" name="password_confirmation" type="password"/>

        <x-buttons.primary>Update Account</x-buttons.primary>
    </x-forms.form>
</x-layout>
