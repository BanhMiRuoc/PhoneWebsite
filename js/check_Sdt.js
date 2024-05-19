document.getElementById("customerForm").addEventListener("submit", function(event) {
    var sdt = document.getElementById("sdt").value;
    if (!sdt) {

        alert("Vui lòng nhập số điện thoại!");
        event.preventDefault();
    }else if (sdt.length !== 10 || !/^\d{10}$/.test(sdt)) {
        alert("Số điện thoại phải có 10 chữ số!");
        event.preventDefault();
    }
});