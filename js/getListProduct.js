function filterProducts() {
    var category = document.getElementById('filterCategory').value;
    window.location.href = 'index.php?quanly=homeadmin&category=' + category;
}