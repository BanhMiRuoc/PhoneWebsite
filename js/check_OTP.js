document.getElementById("otpForm").addEventListener("submit", function(event) {
    var email = document.getElementById("otp").value;
    if (!email) {
        alert("Vui lòng nhập OTP!");
        event.preventDefault();
    }
});