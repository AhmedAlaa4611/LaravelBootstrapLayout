<aside class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary h-100" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <span class="fs-5">{{ config('app.name') }}</span>
    </a>
    <hr class="my-2">
    <ul class="nav nav-pills flex-column mb-auto">
        <x-sidebar-link href="/" :current-page="request()->is('/')">Home</x-sidebar-link>
        <x-sidebar-link href="/books" :current-page="request()->is('books')">Books</x-sidebar-link>
    </ul>
    <hr class="my-2">
    <button class="btn btn-primary" id="theme" aria-label="Toggle theme">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
    </button>
    <hr class="my-2">
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>User Name</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <form method="POST" action="/logout" class="text-center">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </ul>
    </div>
</aside>