$(document).ready(function() {
    
    // Tạo các thẻ sản phẩm và thêm vào container
    for (var i = 0; i < products.length; i++) {
        // Tạo thẻ sản phẩm
        var productHTML = '<div class="col-md-3 mb-4">' +
                            '<div class="card" style="width: 100%;">' +
                                '<img class="card-img-top" src="' + products[i].imgSrc + '" alt="Card image cap">' +
                                '<div class="card-body">' +
                                    '<h5 class="card-title">' + products[i].title + '</h5>' +
                                    '<div class="test">' +
                                        '<div class="price-rating">' +
                                            '<p class="card-price" style="color:red; font-size:1.25rem;">' + products[i].price + '</p>' +
                                            '<div class="rating">' +
                                                '<input type="radio" name="rating' + i + '" value="1" id="1-' + i + '"><label for="1-' + i + '">☆</label>' +
                                                '<input type="radio" name="rating' + i + '" value="2" id="2-' + i + '"><label for="2-' + i + '">☆</label>' +
                                                '<input type="radio" name="rating' + i + '" value="3" id="3-' + i + '"><label for="3-' + i + '">☆</label>' +
                                                '<input type="radio" name="rating' + i + '" value="4" id="4-' + i + '"><label for="4-' + i + '">☆</label>' +
                                                '<input type="radio" name="rating' + i + '" value="5" id="5-' + i + '"><label for="5-' + i + '">☆</label>' +
                                            '</div>' +
                                        '</div>' +
                                        '<button class="add-cart">' +
                                            '<img src="assets/images/add-to-card.png" width="50px" height="50px" alt="">' +
                                        '</button>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                          '</div>';

        // Thêm thẻ sản phẩm vào container
        $('#product-container').append(productHTML);
    }
});
