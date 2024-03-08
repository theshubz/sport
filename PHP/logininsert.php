<?php
session_start();

if (isset($_POST['btn_login'])) {
    $uemail = $_POST['name'];
    $upass = $_POST['pass'];

    include("./connection_db.php");

    // Using prepared statement to prevent SQL injection
    $sql = "SELECT user_id, user_password FROM users WHERE user_email = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $uemail);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        // Verify password
        if (password_verify($upass, $row['user_password'])) {
            $_SESSION['id'] = $row['user_id'];
            header('Location: ../index1.php');
            exit();
        } else {
            // Invalid password
            echo '<script type="text/javascript">'; 
            echo 'alert("Invalid username or password");'; 
            echo 'window.location.href = "../login.php";';
            echo '</script>'; 
        }
    } else {
        // No user found
        echo '<script type="text/javascript">'; 
        echo 'alert("Invalid username or password");'; 
        echo 'window.location.href = "../login.php";';
        echo '</script>'; 
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>
