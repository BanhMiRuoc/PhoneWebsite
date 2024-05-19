document.getElementById("customerForm1").addEventListener("submit", function(event) {
    var hoten = document.getElementById("hoten").value;
    if (!hoten) {
        alert("Vui lòng nhập họ tên!");
        event.preventDefault();
    }
    else {
        var diachi = document.getElementById("diachi").value;
        if (!diachi) {
            alert("Vui lòng nhập địa chỉ!");
            event.preventDefault();
    }
    }
});