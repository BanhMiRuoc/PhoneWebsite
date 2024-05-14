document.getElementById("customerForm").addEventListener("submit", function(event) {
    var sdt = document.getElementById("sdt").value;
    if (!sdt) {
        alert("Vui lòng nhập số điện thoại!");
        event.preventDefault();
    }
});

document.getElementById("customerForm1").addEventListener("submit", function(event) {
    var sdt = document.getElementById("hoten").value;
    if (!sdt) {
        alert("Vui lòng nhập họ tên!");
        event.preventDefault();
    }
    else {
        var sdt = document.getElementById("diachi").value;
        if (!sdt) {
            alert("Vui lòng nhập địa chỉ!");
            event.preventDefault();
    }
    }
});

