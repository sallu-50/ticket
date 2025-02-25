<x-layouts.main title="register">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 400px;">
            <div class="text-center mb-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('storage/images/logo.svg') }}" width="100" height="32"
                        class="navbar-brand-image">
                </a>
            </div>
            <div>
                <form class="card card-md" action="./" method="get" autocomplete="off" novalidate="">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Create new account</h2>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control" placeholder="Password" autocomplete="off">
                                <span class="input-group-text">
                                    <a href="#" class="link-secondary" data-bs-toggle="tooltip"
                                        aria-label="Show password" data-bs-original-title="Show password">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                            <path
                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                            </path>
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label">Agree the <a href="./terms-of-service.html"
                                        tabindex="-1">terms
                                        and policy</a>.</span>
                            </label>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Create new account</button>
                        </div>
                    </div>
                </form>
                <div class="text-center text-secondary mt-3">
                    Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            event.preventDefault();
            window.location.href = "{{ route('verification') }}";
        });
    </script>
    </x-app-layout>
