document.getElementById("changeForm").addEventListener("submit", function(event) {
    var newpass = document.getElementById("newpass").value;
    if (!newpass) {
        alert("Vui lòng nhập mật khẩu mới!");
        event.preventDefault();
    }
    else {
        var renewpass = document.getElementById("re-newpass").value;
        if (!renewpass) {
            alert("Vui lòng nhập lại mật khẩu mới!");
            event.preventDefault();
    }
    }
});