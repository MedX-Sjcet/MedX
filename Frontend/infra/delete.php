<?php
$conn = mysqli_connect('localhost','root','','hospitalmanagementsystem') or die("connection failed");
if(isset($_POST['delete'])){
  $id=$_POST['patient_ID'];
  $query="DELETE FROM patient WHERE patient_ID=$id";
  $result=mysqli_query($conn,$query);
  header("Location:pedia.php");
  die();
}

?>