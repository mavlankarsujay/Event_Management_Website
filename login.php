<?php
include "config.php";

if (isset($_POST['Login'])) {

    header("Location:index.html");

    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);

    if ($Email != "" && $Password != "") {

        $sql_query = "select count(*) as cntUser from register_login where username='" . $Email . "' and password='" . $Password . "'";
        $result = mysqli_query($con, $sql_query);
        $row =  $result->fetch_assoc() ; //mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['username'] = $Email;
            echo "login succesfull";
            
        } else {
            echo "Invalid username or password";
        }
    }

}