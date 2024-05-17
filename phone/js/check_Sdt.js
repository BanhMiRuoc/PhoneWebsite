document.getElementById("customerForm").addEventListener("submit", function(event) {
    var sdt = document.getElementById("sdt").value;
    if (!sdt) {
        
        alert("Vui lòng nhập số điện thoại!");
        event.preventDefault();
    }
});