<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <style>
        /* Style cho gợi ý */
        .autocomplete-suggestions {
            border: 1px solid #ccc;
            max-height: 150px;
            overflow-y: auto;
            position: absolute;
            z-index: 9999;
            background: #fff;
        }
        .autocomplete-suggestion {
            padding: 10px;
            cursor: pointer;
        }
        .autocomplete-suggestion:hover {
            background: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="container-home">
        <div class="content">
            <h1>CREATE ORDER</h1>
            <div class="container">
                <section class="chi-tiet-don-hang">
                    <h2>Detail Order</h2>
                    <div class="danh-sach-san-pham">
                        <div class="them-san-pham">
                            <input type="text" id="ma-san-pham" placeholder="Enter ID Product">
                            <div id="suggestions" class="autocomplete-suggestions"></div>
                            <button id="btn-them-san-pham">Add product</button>
                        </div>
                        <table id="bang-san-pham">
                            <thead>
                                <tr>
                                    <th>Name product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody id="san-pham-body">
                            </tbody>
                        </table>
                    </div>
                    <div class="tong-tien">
                        <p>Final total: <span id="tong-tien-thanh-toan">0đ</span></p>
                    </div>
                    <button type="submit" class="btn btn-submit">CREATE ORDER</button>
                </section>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const input = document.getElementById('ma-san-pham');
            const suggestionsBox = document.getElementById('suggestions');
            const addButton = document.getElementById('btn-them-san-pham');
            const tableBody = document.getElementById('san-pham-body');
            const finalTotalElement = document.getElementById('tong-tien-thanh-toan');

            let products = [];
            let finalTotal = 0;

            // Fetch products from the server
            fetch('modules/sanpham/searchProduct.php')
                .then(response => response.json())
                .then(data => {
                    products = data;
                })
                .catch(error => console.error('Error fetching products:', error));

            input.addEventListener('input', () => {
                const query = input.value.toLowerCase();
                suggestionsBox.innerHTML = '';

                if (query.length > 0) {
                    const filteredProducts = products.filter(product =>
                        product.tensp.toLowerCase().includes(query) || product.mavach.toLowerCase().includes(query)
                    );

                    filteredProducts.forEach(product => {
                        const suggestion = document.createElement('div');
                        suggestion.classList.add('autocomplete-suggestion');
                        suggestion.textContent = `${product.mavach} - ${product.tensp}`;
                        suggestion.addEventListener('click', () => {
                            input.value = product.mavach;
                            suggestionsBox.innerHTML = '';
                        });
                        suggestionsBox.appendChild(suggestion);
                    });
                }
            });

            addButton.addEventListener('click', () => {
                const productCode = input.value.trim();
                const product = products.find(p => p.mavach === productCode);

                if (product) {
                    if (product.giaban === undefined || product.giaban === null) {
                        alert('Product price is not available.');
                        return;
                    }

                    const row = document.createElement('tr');
                    const total = product.giaban; // Assuming giaban is the price

                    row.innerHTML = `
                        <td>${product.tensp}</td>
                        <td><input type="number" value="1" min="1" class="quantity" data-price="${product.giaban}"></td>
                        <td>${product.giaban.toLocaleString()}đ</td>
                        <td class="total">${total.toLocaleString()}đ</td>
                        <td><button class="btn btn-danger btn-delete">Delete</button></td>
                    `;

                    tableBody.appendChild(row);
                    updateFinalTotal();

                    // Add event listener to delete button
                    row.querySelector('.btn-delete').addEventListener('click', () => {
                        row.remove();
                        updateFinalTotal();
                    });

                    // Add event listener to quantity input
                    row.querySelector('.quantity').addEventListener('input', (e) => {
                        const quantity = e.target.value;
                        const price = e.target.getAttribute('data-price');
                        const totalCell = row.querySelector('.total');

                        const newTotal = quantity * price;
                        totalCell.textContent = `${newTotal.toLocaleString()}đ`;
                        updateFinalTotal();
                    });

                    input.value = '';
                } else {
                    alert('Product not found');
                }
            });

            document.addEventListener('click', (event) => {
                if (!suggestionsBox.contains(event.target) && event.target !== input) {
                    suggestionsBox.innerHTML = '';
                }
            });

            function updateFinalTotal() {
                finalTotal = Array.from(document.querySelectorAll('#san-pham-body .total'))
                    .reduce((sum, cell) => sum + parseInt(cell.textContent.replace(/\D/g, '')), 0);
                finalTotalElement.textContent = `${finalTotal.toLocaleString()}đ`;
            }
        });
    </script>
</body>
</html>
