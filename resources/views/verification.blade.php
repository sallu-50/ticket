<x-layouts.main title="verification">

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
                    <h2 class="fw-bold text-center">Enter Verification Code</h2>
                    <h3 class="text-muted text-center">We have sent a 6-digit code to your email.</h3>
                    <form>

                        <div class="d-flex justify-content-between mb-3">
                            <input type="text" class="otp-input form-control text-center mx-1" maxlength="1"
                                style="width: 50px; height: 50px; font-size: 24px;">
                            <input type="text" class="otp-input form-control text-center mx-1" maxlength="1"
                                style="width: 50px; height: 50px; font-size: 24px;">
                            <input type="text" class="otp-input form-control text-center mx-1" maxlength="1"
                                style="width: 50px; height: 50px; font-size: 24px;">
                            <input type="text" class="otp-input form-control text-center mx-1" maxlength="1"
                                style="width: 50px; height: 50px; font-size: 24px;">
                            <input type="text" class="otp-input form-control text-center mx-1" maxlength="1"
                                style="width: 50px; height: 50px; font-size: 24px;">
                            <input type="text" class="otp-input form-control text-center mx-1" maxlength="1"
                                style="width: 50px; height: 50px; font-size: 24px;">
                        </div>

                        <button type="submit" class="btn btn-primary w-100 fw-bold">Verify</button>
                    </form>
                    <div class="text-center mt-3">
                        <small>Didn't receive a code? <a href="#" class="fw-bold">Resend</a></small>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll(".otp-input");

            inputs.forEach((input, index) => {
                input.addEventListener("input", function() {
                    this.value = this.value.replace(/[^0-9]/g, ''); // শুধুমাত্র সংখ্যা অনুমোদিত
                    if (this.value.length === 1 && index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                });

                input.addEventListener("keydown", function(event) {
                    if (event.key === "Backspace" && this.value === "" && index > 0) {
                        inputs[index - 1].focus();
                    }
                });

                input.addEventListener("paste", function(event) {
                    event.preventDefault();
                    const pasteData = (event.clipboardData || window.clipboardData).getData("text");
                    const digits = pasteData.replace(/[^0-9]/g, '').split("");

                    if (digits.length === inputs.length) {
                        inputs.forEach((inp, i) => inp.value = digits[i] || "");
                        inputs[inputs.length - 1].focus();
                    }
                });
            });
        });
    </script>
    </x-app-layout>
