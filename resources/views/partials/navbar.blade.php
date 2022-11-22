<div class="brand-container">
    <h1 data-text="GiantBookSupplier">
        GiantBookSupplier
    </h1>
</div>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid col-lg-11 d-flex justify-content-center">

        <ul class="navbar-nav col-lg-6 d-flex justify-content-around">

            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">HOME</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CATEGORY
                </a>
                <ul class="dropdown-menu">
                    @foreach($categories as $c)
                        <li>
                            <a class="dropdown-item" href="/category/{{ $c->id }}">
                                {{ $c->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="/publishers">PUBLISHER</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/contact">CONTACT</a>
            </li>

        </ul>

    </div>
</nav>