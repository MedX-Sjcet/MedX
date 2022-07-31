<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$ID = $_POST['ID'];
$department = $_POST['department'];
$specialization = $_POST['specialization'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost','root','','hospitalmanagementsystem') or die("connection failed");
if(!empty($_POST['register'])){ 
    $query="INSERT INTO doctor (`doctor_ID`, `firstname`, `lastname`, `dep_ID`, `specialization`, `address`, `phone`, `password`) VALUES(?,?,?,?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"ississis",$ID,$firstname,$lastname,$department,$specialization,$address,$phone,$password);
    mysqli_stmt_execute($stmt);
    echo "registration successfull";
    

}
else{
    header("Location: addDoctor.html");
}


?>