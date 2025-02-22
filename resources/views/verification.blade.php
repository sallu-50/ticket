<x-app-layout title="verification">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4 text-center" style="width: 400px;">
            <h4 class="fw-bold">Enter Verification Code</h4>
            <p class="text-muted">We have sent a 6-digit code to your email.</p>

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
