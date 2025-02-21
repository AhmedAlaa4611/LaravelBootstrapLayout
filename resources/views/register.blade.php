<x-layout>
    <x-slot:heading>Register</x-slot:heading>

    <x-forms :action="route('register.create')">
        <x-forms.input type="text" name="name">Name</x-forms.input>

        <x-forms.input type="email" name="email">Email</x-forms.input>

        <x-forms.input type="password" name="password">Password</x-forms.input>

        <x-forms.input type="password" name="password_confirmation">Password Confirmation</x-forms.input>

        <div class="col-12">
            @foreach ($roles as $role)
                <x-forms.check type="radio" name="role" :value="$role">{{ Str::title($role) }}</x-forms.check>
            @endforeach
            <x-forms.error name="role" />
        </div>

        {{-- <div class="col-12">
            <x-forms.check type="radio" name="gender" value="male">Male</x-forms.check>
            <x-forms.check type="radio" name="gender" value="female">Female</x-forms.check>
            <x-forms.error name="gender" />
        </div> --}}

        <x-forms.submit>Register</x-forms.submit>
    </x-forms>
</x-layout>