<section class="report">
    <div class="container">
        <h1>Sales Report</h1>
        <div>
            <form id="dateForm">
                <label for="dateRange">Select Date Range:</label>
                <select id="dateRange">
                    <option value="today">Today</option>
                    <option value="yesterday">Yesterday</option>
                    <option value="this-week">This Week</option>
                    <option value="custom">Custom</option>
                </select>
                <input type="date" id="startDate" style="display: none;">
                <input type="date" id="endDate" style="display: none;">
                <button type="submit">Generate Report</button>
            </form>
        </div>
        <table id="salesTable">
            <tr>
                <th>Total Money</th>
                <th>Quantity Orders</th>
                <th>Quantity Products</th>
                <th>Detail</th>
            </tr>
            <tr>
                <td>$1000</td>
                <td>10</td>
                <td>50</td>
                <td><button class="detail-btn" onclick="showOrderList('2024-05-20')">View Detail</button></td>
            </tr>
            <!-- More rows here -->
        </table>
        <table id="orderTable" style="display: none;">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</section>
<script>
    const dateForm = document.getElementById('dateForm');
    const dateRangeSelect = document.getElementById('dateRange');
    const startDateInput = document.getElementById('startDate');
    const endDateInput = document.getElementById('endDate');
    const orderTable = document.getElementById('orderTable');

    dateRangeSelect.addEventListener('change', function() {
        if (this.value === 'custom') {
            startDateInput.style.display = 'inline-block';
            endDateInput.style.display = 'inline-block';
        } else {
            startDateInput.style.display = 'none';
            endDateInput.style.display = 'none';
        }
    });

    dateForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const selectedDate = dateRangeSelect.value === 'custom' ? startDateInput.value : getCurrentDate();
        showOrderList(selectedDate);
    });

    function showOrderList(date) {
        const orders = getOrdersForDate(date);
        const orderTableBody = orderTable.querySelector('tbody');
        orderTableBody.innerHTML = '';

        if (orders.length > 0) {
            orders.forEach(order => {
                const row = orderTableBody.insertRow();
                row.innerHTML = `
                    <td>${order.id}</td>
                    <td>${order.date}</td>
                    <td>${order.total}</td>
                    <td><button>View detail</button></td>
                `;
            });
            orderTable.style.display = 'block';
        } else {
            orderTable.style.display = 'none';
        }
    }

    function getCurrentDate() {
        const today = new Date();
        const year = today.getFullYear();
        let month = today.getMonth() + 1;
        let day = today.getDate();

        if (month < 10) {
            month = '0' + month;
        }
        if (day < 10) {
            day = '0' + day;
        }

        return `${year}-${month}-${day}`;
    }

    function getOrdersForDate(date) {
        // Mock function to return orders for the selected date
        return [
            { id: 1, date: '2024-05-20', total: '$100' },
            { id: 2, date: '2024-05-20', total: '$150' },
        ];
    }
</script>

