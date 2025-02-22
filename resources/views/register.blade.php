<x-app-layout title="register">

    <div class="modal d-block" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Sign In</h5>

                </div>
                <div class="modal-body">
                    <form action="{{ route('verification') }}" method="POST" class="mt-4">
                        <div class="mb-3">
                            <label class="form-label fw-bold">First Name</label>
                            <input type="text" class="form-control" id="fname" aria-describedby="emailHelp"
                                name="fname" placeholder="Enter first name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Last Name</label>
                            <input type="text" class="form-control" id="lname" aria-describedby="emailHelp"
                                name="lname" placeholder="Enter last name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                name="email" placeholder="Enter email address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter password">
                                <button class="btn btn-outline-secondary toggle-password" type="button"
                                    data-target="password">
                                    <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"
                                    placeholder="Enter confirm password">
                                <button class="btn btn-outline-secondary toggle-password" type="button"
                                    data-target="confirmpassword">
                                    <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                            <label class="form-check-label">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 fw-bold">Register</button>
                    </form>

                    <hr>

                    <button class="btn btn-light border w-100">
                        <i class="fab fa-google me-2 fw-bold"></i> Continue with Google
                    </button>

                    <div class="text-center mt-3">
                        <a class="text-decoration-none px-2 fw-bold" href ="#">Forgot Password?</a> | <a
                            class="text-decoration-none px-2 fw-bold" href="{{ route('login') }}"> allready have an
                            account? Login</a>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.querySelectorAll(".toggle-password").forEach(button => {
            button.addEventListener("click", function() {
                const targetId = this.getAttribute("data-target");
                const passwordInput = document.getElementById(targetId);
                const eyeIcon = this.querySelector(
                    "svg"); // শুধুমাত্র বাটনের মধ্যে থাকা SVG আইকন টার্গেট করবে

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    eyeIcon.innerHTML = `
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                    <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                    <path d="M3 3l18 18" />
                `;
                } else {
                    passwordInput.type = "password";
                    eyeIcon.innerHTML = `
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                `;
                }
            });
        });

        document.querySelector("form").addEventListener("submit", function(event) {
            event.preventDefault();
            window.location.href = "{{ route('verification') }}";
        });
    </script>
</x-app-layout>
