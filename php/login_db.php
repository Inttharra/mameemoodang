<?php

    include 'server.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login_query = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password'";
    $login_result = mysqli_query($connect, $login_query);

    while($user = mysqli_fetch_assoc($login_result)) {
        $_SESSION['title'] = $user['title_name'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['id'] = $user['id'];
    }
    
    if (mysqli_num_rows($login_result)) {
        echo "<script>alert('ยินดีต้อนรับเข้าสู่ระบบ'); window.location = '../index.php'</script>";
    } else {
        echo "<script>alert('ชื่อบัญชีหรือรหัสผ่านผิด กรุณาลองใหม่อีกครั้ง'); window.location = '../login.php'</script>";
    }

?>