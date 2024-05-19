document.getElementById("changeForm").addEventListener("submit", function(event) {
    var newpass = document.getElementById("newpass").value;
    if (!newpass) {
        alert("Vui lòng nhập mật khẩu mới!");
        event.preventDefault();
    }
    else {
        var specialCharPattern = /[!@#$%^&*(),.?":{}|<>]/;
        if (!specialCharPattern.test(newpass)) {
            alert("Mật khẩu mới phải chứa ít nhất một ký tự đặc biệt!");
            event.preventDefault();
            return;
        }
        else{
            var renewpass = document.getElementById("re-newpass").value;
            if (!renewpass) {
                alert("Vui lòng nhập lại mật khẩu mới!");
                event.preventDefault();
        }
    }
    }
});