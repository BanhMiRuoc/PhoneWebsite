document.getElementById("forgotForm").addEventListener("submit", function(event) {
    var email = document.getElementById("email-f").value;
    if (!email) {
        alert("Vui lòng nhập email!");
        event.preventDefault();
    }
});