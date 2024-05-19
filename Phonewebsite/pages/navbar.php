<body>
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i class="lni lni-grid-alt"></i>
                <span>Menu</span>
            </button>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <img src="assets/images/orders.png" width="20" alt="">
                    <span>Create order</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <img src="assets/images/product.png" width="17" alt="">
                    <span>Product manager</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                    data-bs-target="#staff-manager" aria-expanded="false" aria-controls="staff-manager">
                    <img src="assets/images/staff.png" width="20" alt="">
                    <span>Staff manager</span>
                </a>
                <ul id="staff-manager" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Create account</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">List staff</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                    data-bs-target="#customer-manager" aria-expanded="false" aria-controls="customer-manager">
                    <img src="assets/images/customer.png" width="20" alt="">
                    <span>Customer manager</span>
                </a>
                <ul id="customer-manager" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Create account</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">List staff</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <img src="assets/images/report.png" width="20" alt="">
                    <span>Report</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                    data-bs-target="#account-manager" aria-expanded="false" aria-controls="account-manager">
                    <img src="assets/images/user.png" width="20" alt="">
                    <span>Account manager</span>
                </a>
                <ul id="account-manager" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">View infomation</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Change password</a>
                    </li>
                </ul>
            </li>
    </aside>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="js/navbar.js"></script>
</body>

</html>