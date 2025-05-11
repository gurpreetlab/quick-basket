<nav>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <a href="/">
                <img class="brand object-fit-contain" src="{{ asset('quick-basket-logo.png') }}" alt="logo"
                    width="80" height="70">
            </a>

            <ul class="d-flex align-items-center gap-4">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>

                <li>
                    <div class="dropdown">
                        <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </div>
                        <ul class="dropdown-menu nav-dropdown">
                            @forelse ($categories as $category)
                                <li>
                                    <a class="dropdown-item" href="/">{{ $category['name'] }}</a>
                                </li>
                            @empty
                                <li>
                                    <a class="dropdown-item" href="/">No category found!</a>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </li>

                {{-- show links only for unauthorized users --}}
                @guest
                    <li>
                        <a href="{{ route('login') }}" class="d-flex align-items-center gap-2">
                            Login
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('register') }}" class="d-flex align-items-center gap-2 btn btn-outline-dark">
                            Register
                        </a>
                    </li>
                @endguest

                {{-- show links only for authorized users --}}
                @auth
                    <li class="dropdown">
                        <div class="dropdown">
                            <span class="dropdown-toggle cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://avatar.iran.liara.run/public/32" width="32" height="32" class="object-fit-cover rounded-circle me-2" alt="{{ auth()->user()->name }}">
                                {{ auth()->user()->name }}
                            </span>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/profile" class="dropdown-item">Profile</a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
