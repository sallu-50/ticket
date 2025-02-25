<div class="sticky-top">
    <header class="navbar navbar-expand-md sticky-top d-print-none py-2">
        <div class="container-xl d-flex justify-content-between align-items-center">
            <!-- Logo (Left Side) -->
            <div class="navbar-brand navbar-brand-autodark">
                <a href="">
                    <img src="{{ asset('storage/images/logo.svg') }}" width="100" height="32"
                        class="navbar-brand-image">
                </a>
            </div>

            <!-- Navbar Toggle Button (Right Side in Mobile) -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Items (Hidden in Mobile, Visible in MD+) -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link active" style="font-size: 16px">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" style="font-size: 16px">Explore Events</a>
                    </li>
                    <li class="nav-item d-md-flex mx-2">
                        <!-- Dark Mode Button -->
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-1">
                                <path
                                    d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </a>
                        <!-- Light Mode Button -->
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-1">
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path
                                    d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </a>
                    </li>
                    <!-- Sign In Button -->
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn px-4 py-2 rounded-lg text-white font-bold"
                            style="background-color: rgb(91, 209, 215); font-size: 16px">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</div>
