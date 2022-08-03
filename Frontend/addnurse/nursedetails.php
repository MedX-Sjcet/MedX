<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$ID = $_POST['ID'];
$dep_name = $_POST['department'];
$specialization = $_POST['specialization'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost','root','','hospitalmanagementsystem') or die("connection failed");
if(!empty($_POST['register'])){ 
    
    $query="INSERT INTO nurse (`nurse_ID`, `firstname`, `lastname`, `dep_ID`, `specialization`, `address`, `phone`, `password`) VALUES(?,?,?,?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"ississis",$ID,$firstname,$lastname,$dep_name,$specialization,$address,$phone,$password);
    mysqli_stmt_execute($stmt);
    echo "registration successfull";
    header("Location: ../adminportal/admin.html");

}
else{
    header("Location: addnurse.html");
}


?>