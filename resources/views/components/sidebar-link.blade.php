@props(['currentPage'])

<li>
    <a {{ $attributes->merge(['class' => $currentPage ? 'nav-link active' : 'nav-link link-body-emphasis' ]) }} @if ($currentPage) aria-current="page" @endif>{{ $slot }}</a>
</li>