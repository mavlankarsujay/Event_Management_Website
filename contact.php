<?php

if (isset($_POST['Contact'])) {

    header("Location:index.html");

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Messege = $_POST['Messege'];


if ( !empty($Name) || !empty($Email) || !empty($Phone) || !empty($Messege) )
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
        $SELECT = "SELECT email from register_contact Where email = ? Limit 1";
        $INSERT = "INSERT Into register_Reg (Name, Email, Phone, Messege)
                    values(?,?,?,?)";
        
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssss", $Name, $Email, $Phone, $Messege);
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