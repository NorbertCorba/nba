<header>

<div class="col-4 d-flex justify-content-end align-items-center">

    @if (auth()->check())
    <h3>Welcome, {{ auth()->user()->name }}</h3>
    <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>

    @else 

    <a class="btn btn-sm btn-outline-secondary" href="/register">Register</a>
    @endif

  </div>
</div>
</header>