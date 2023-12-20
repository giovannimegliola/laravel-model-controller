<header>

    <div>

        <nav class="navbar-nav container navbar-light">
            <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">

                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link {{ Route::currentRouteName() == 'movies.index' ? 'active' : '' }}"
                        href="{{ route('movies.index') }}">
                        Movies
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'books.index' ? 'active' : '' }}"
                        href="{{ route('books.index') }}">
                        Books
                    </a>
                </li>

            </ul>
        </nav>

    </div>

</header>


