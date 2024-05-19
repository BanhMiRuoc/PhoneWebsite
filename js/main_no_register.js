$(document).ready(function() {
    // Dữ liệu sản phẩm (có thể là một mảng các đối tượng JSON)
    var products = [
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 1",
            price: "100.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        {
            imgSrc: "assets/images/op_lung_magsafe_iphone_15_pro_max_nhua_trong_apple_mt_233_thumb_600_x_6001.jpeg",
            title: "Product 2",
            price: "200.000đ"
        },
        // Thêm các sản phẩm khác vào đây
    ];

    // Số sản phẩm trên mỗi hàng
    var productsPerRow = 4;

    // Tạo container cho sản phẩm
    var productContainer = $('<div class="product-row">');

    // Tạo các thẻ sản phẩm và thêm vào container
    for (var i = 0; i < products.length; i++) {
        // Tạo thẻ sản phẩm
        var productHTML = '<div class="card" style="width: 18rem; margin: 1rem">' +
                            '<img class="card-img-top" src="' + products[i].imgSrc + '" alt="Card image cap">' +
                            '<div class="card-body">' +
                                '<h5 class="card-title">' + products[i].title + '</h5>' +
                                '<div class="test">' +
                                    '<div class="price-rating">' +
                                        '<p class="card-price" style="color:red; font-size:1.25rem;">' + products[i].price + '</p>' +
                                        '<div class="rating">' +
                                                '<input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>' +
                                                '<input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>' +
                                                '<input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>' +
                                                '<input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>' +
                                                '<input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>' +
                                        '</div>' +
                                    '</div>' +
                                    '<button class="add-cart">' +
                                        '<img src="assets/images/add-to-card.png" width="50px" height="50px" alt="">' +
                                    '</button>' +
                                '</div>' +
                            '</div>' +
                            '</div>';

        // Thêm thẻ sản phẩm vào container
        productContainer.append(productHTML);

        // Kiểm tra xem có đủ số lượng sản phẩm để tạo một hàng không
        if ((i + 1) % productsPerRow == 0 || i === products.length - 1) {
        // Thêm container sản phẩm vào #product-container
        $('#product-container').append(productContainer);

        // Reset container cho hàng mới
        productContainer = $('<div class="product-row">');
        }
    }
});