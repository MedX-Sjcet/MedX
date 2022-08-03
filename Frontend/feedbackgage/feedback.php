<?php

$email= $_POST['email'];
$feedback = $_POST['feedback'];

$conn = mysqli_connect('localhost','root','','hospitalmanagementsystem') or die("connection failed");
if(!empty($_POST['submit'])){ 
    
    $query="INSERT INTO feedback ( `email`,`feedback`) VALUES(?,?)";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$query);
    mysqli_stmt_bind_param($stmt,"ss",$email,$feedback);
    mysqli_stmt_execute($stmt);
    header("Location: feed.html");

}
else{
    header("Location: feed.html");
}


?>