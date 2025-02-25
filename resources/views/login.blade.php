<x-layouts.headerless title="login">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 400px;">
            <div class="text-center mb-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('storage/images/logo.svg') }}" width="100" height="32"
                        class="navbar-brand-image">
                </a>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="h4 text-center mb-4">Login to your account</h2>
                    <form action="./" method="get" autocomplete="off" novalidate>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="your@email.com" autocomplete="off">
                        </div>
                        <div class="mb-2">
                            <label class="form-label d-flex justify-content-between">
                                <span>Password</span>
                                <a href="./forgot-password.html" class="text-decoration-none">I forgot password</a>
                            </label>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Your password"
                                    autocomplete="off">
                                <span class="input-group-text">
                                    <a href="#" class="text-secondary">
                                        <!-- Eye icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                            <path
                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                            </path>
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="mb-2 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me on this device</label>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        </div>
                    </form>
                </div>
                <div class="text-center py-3">or</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn btn-dark w-100">
                                <!-- GitHub icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5">
                                    </path>
                                </svg>
                                Login with GitHub
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-dark w-100">
                                <!-- X (Twitter) icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                    <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                </svg>
                                Login with X
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center text-secondary mt-3">
                Don't have an account yet? <a href="{{ route('sign-up') }}" class="text-decoration-none">Sign up</a>
            </div>
        </div>
    </div>
















    </x-app-layout>
