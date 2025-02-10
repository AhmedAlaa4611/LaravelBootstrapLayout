<form method="POST" {{ $attributes }} class="row g-3">
    @csrf
    {{ $slot }}
</form>