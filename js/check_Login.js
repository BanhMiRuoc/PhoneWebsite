document.getElementById("login-form").addEventListener("submit", function(event) {
    var username = document.getElementById("username").value;
    if (!username) {
        alert("Vui lòng nhập tên đăng nhập!");
        event.preventDefault();
    } else {
        var password = document.getElementById("password").value;
        if (!password) {
            alert("Vui lòng nhập mật khẩu!");
            event.preventDefault();
        }
    }
});





