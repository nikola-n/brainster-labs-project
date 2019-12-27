<?php
$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company_name'];
$phone = $_POST['phone_number'];
$type = $_POST['type'];
if (!empty($name) || !empty($email) || !empty($phone) || !empty($company) || !empty($type)) {
$host = "localhost";
   $dbUsername = "nikola";
   $dbPassword = "nick7!";
   $dbname = "courses";
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
   if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   } else {
    $INSERT = "INSERT Into courses (name, email, company_name, phone_number, type) values(?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($INSERT);
    $rnum = $stmt->num_rows;
    if ($rnum==0) {
     $stmt->close();
     $stmt = $conn->prepare($INSERT);
     $stmt->bind_param("sssss", $name, $email, $company, $phone, $type);
     $stmt->execute();
    
     header("Location:result.php");
     die();
    };
    $stmt->close();
    $conn->close();
   }
} else {
echo "All field are required";
die();
}

?>