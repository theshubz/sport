<?php
if(isset($_POST['btn_login'])){
    // Obtain user input
    $uemail = $_POST['name'];
    $upass = $_POST['pass'];

    // Include the database connection script
    require_once("connection_db.php");

    // Prepare the SQL query using a prepared statement
    $sql = "SELECT user_id FROM users WHERE user_email=? AND user_password=?";
    $stmt = $con->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("ss", $uemail, $upass);
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    // Get the number of rows returned
    $data = $result->num_rows;

    // If user exists, start session and redirect
    if($data > 0) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        session_start();
        //echo "user  id =".$_row['user_id'];

        $_SESSION['id'] = $row['user_id'];
        //echo "session  id =".$_SESSION['id'];
        header('Location: ../index1.php?session_id=' . $_SESSION['id']);
                //header('Location: ../index1.php');
        //exit(); // Ensure script stops executing after redirection
    } else {
        // If user doesn't exist, display error message
        echo '<script type="text/javascript">'; 
        echo 'alert("Invalid username or password");'; 
        echo 'window.location.href = "../login.php";';
        echo '</script>'; 
        exit(); // Ensure script stops executing after displaying error
    }

    // Close the statement
    $stmt->close();
}
?>
