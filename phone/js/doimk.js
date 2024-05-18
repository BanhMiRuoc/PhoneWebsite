// Lắng nghe sự kiện submit của form đổi mật khẩu
document.getElementById("changePasswordForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Ngăn chặn form được gửi đi

    // Lấy giá trị của các trường
    var currentPassword = document.getElementById("mkcu").value;
    var newPassword = document.getElementById("mkmoi").value;
    var confirmPassword = document.getElementById("mknhaplai").value;

    // Kiểm tra điều kiện đổi mật khẩu
    if (!currentPassword) {
        alert("Vui lòng nhập mật khẩu hiện tại!");
        return;
    }

    if (!newPassword) {
        alert("Vui lòng nhập mật khẩu mới!");
        return;
    }

    if (newPassword !== confirmPassword) {
        alert("Mật khẩu mới và xác nhận mật khẩu không khớp!");
        return;
    }

    // Ở đây bạn sẽ cần gửi yêu cầu đổi mật khẩu lên server
    // Ví dụ bằng cách sử dụng AJAX hoặc Fetch API
    // Sau khi nhận được phản hồi từ server, hiển thị thông báo thành công hoặc thất bại

    // Ví dụ:
    fetch('/change-password', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            currentPassword: currentPassword,
            newPassword: newPassword
        })
    })
    .then(response => {
        if (response.ok) {
            alert('Đổi mật khẩu thành công!');
        } else {
            alert('Đổi mật khẩu thất bại. Vui lòng thử lại!');
        }
    })
    .catch(error => {
        console.error('Lỗi khi đổi mật khẩu:', error);
        alert('Đã xảy ra lỗi khi đổi mật khẩu. Vui lòng thử lại sau!');
    });
});