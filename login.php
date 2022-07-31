<?php
    $conn = mysqli_connect('localhost','root','','hospitalmanagementsystem') or die("connection failed");
if(!empty($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from admin where email='$username' and password='$password' ";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        header("Location: Frontend/adminportal/admin.html");
    }
    else{
        header("Location: index.html");
    }
}
$conn->close();
?>