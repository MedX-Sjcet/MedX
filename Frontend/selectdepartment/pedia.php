<?php
$conn = mysqli_connect('localhost','root','','hospitalmanagementsystem') or die("connection failed");
if(isset($_GET['doctor_ID'])){
  $id=$_GET['doctor_ID'];
  $query="DELETE FROM doctor WHERE doctor_ID=$id";
  $result=mysqli_query($conn,$query);
  header("Location:pedia.php");
  die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pediatrics</title>

    <link rel="stylesheet" href="../pedia/pedia.css">

</head>
<body style="margin:50px;">

     <!--Navbar-->>
     <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid ">
          <a class="navbar-brand" href="#"></a>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav ">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../adminportal/admin.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../adminportal/admin.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../feedbackgage/feed.html">about Us</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

      <!--Medx image-->
      <div class="img1">
        <img src="../img/medx1.png" >
    </div>
    
    <!--card-->

<center>
    
  <h1>Pediatric department</h1>
  <table class="table">
      <thead>
          <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Department ID</th>
              <th>Specialization</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Password</th>
              <th>Action</th>
</tr>
</thead>

<?php
$conn = mysqli_connect('localhost','root','','hospitalmanagementsystem') or die("connection failed");
$query="SELECT * FROM doctor WHERE dep_id=2";
$result=mysqli_query($conn,$query);
while($row=$result->fetch_assoc()){
  echo "
      <tr>
          <td>".$row["doctor_ID"]."</td>
          <td>".$row["firstname"]."</td>
          <td>".$row["lastname"]."</td>
          <td>".$row["dep_ID"]."</td>
          <td>".$row["specialization"]."</td>
          <td>".$row["address"]."</td>
          <td>".$row["phone"]."</td>
          <td>".$row["password"]."</td>
          <td><a class='btn btn-primary btn-sm' href='pedia.php?doctor_ID=".$row["doctor_ID"]."'>Delete</a>
          </td>
      </tr>
  ";
}
?>
</table>
      

             
            <div class="card-block pt-5">
                <a href="#" class="card-link text-white">
                </a>
                 
            </div>
        
         
     
    

</body>
</html>