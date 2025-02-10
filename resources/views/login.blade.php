<x-layout>
    <x-slot:heading>Login</x-slot:heading>

    <x-forms action="/login">
        <x-forms.input type="email" name="email">Email</x-forms.input>

        <x-forms.input type="password" name="password">Password</x-forms.input>

        <div class="col-12">
            <x-forms.check type="checkbox" name="remember" value="remember">Remember me</x-forms.check>
            <x-forms.error name="remember" />
        </div>

        <x-forms.submit>Login</x-forms.submit>
    </x-forms>
</x-layout>