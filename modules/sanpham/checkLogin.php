<?php
    include('config/connect.php');

    if(isset($_POST['btn-login'])) {
        $username = $_POST['username'];
        $password =$_POST['password'];

        $sql = "SELECT * FROM TAIKHOAN WHERE TENTK = '".$username."' AND MK= '".$password."'";

        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);
        if ($count > 0) {
            $_SESSION['dangnhap'] = $taikhoan;
            header('Location:pages/index.php?user=login&action=admmin');
        }
        else {
            echo '<script>alert("Your usename or password is incorrect, please enter again.")</script>';
            header('Location:../../index.php?user=login');
        }
    }
?>
