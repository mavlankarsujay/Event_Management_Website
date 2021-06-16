<?php

if (isset($_POST['Register'])) {

    header("Location:index.html");

$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];



if ( !empty($Username) || !empty($Email) || !empty($Password) )
{
    $host = "localhost:3307";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "typroject";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        $SELECT = "SELECT email from register_Reg Where email = ? Limit 1";
        $INSERT = "INSERT Into register_Reg (Username, Email, Password)
                    values(?,?,?)";
        
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $Username, $Email, $Password);
            $stmt->execute();
            echo "";
        }
        else{
            echo "already reg";
        }
        $stmt->close();
        $conn->close();
    }
}else{
        echo "all fields are required";
        die();
    }

}
?>