<?php
$conn = mysqli_connect('localhost','root','','hospitalmanagementsystem') or die("connection failed");
if(isset($_GET['patient_ID'])){
  $patient_ID=$_GET['patient_ID'];
  $query="DELETE FROM patient WHERE patient_ID=$patient_ID";
  $result=mysqli_query($conn,$query);
  header("Location:infra.php");
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
    <link rel="stylesheet" href="../infra/infra.css">


    <title>Infrastructure</title>
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

<!--Infrasructure-->
<div class="img2">
    <img src="../img/infra.png" >
</div>

<!--Cards-->

<div class="card" id="ccard" style="background-color: rgb(75, 115, 165);">
    <div class="card-header">
        <div class="climg">
            <img src="../img/Clinical Departments.png" >
        </div>
    </div>
    <div class="card-body">
        <div class="climg1">
            <img src="../img/clinic1.png" >
        </div>
        <div class="climg2" id="climg2">
            <img src="../img/clinic2.png" >
        </div>
  </div>


  <div class="card" id="scard" style="background-color: rgb(75, 115, 165);">
    <div class="card-header">
        <div class="simg">
            <img src="../img/Supportive Departments.png" >
        </div>
    </div>
    <div class="card-body">
        <div class="simg1">
            <img src="../img/simg.png" >
        </div>


        <div class="card" id="acard" style="background-color: rgb(75, 115, 165);">
            <div class="card-header">
                <div class="aimg">
                    <img src="../img/Administrative Departments.png" >
                </div>
            </div>
            <div class="card-body">
                <div class="simg1">
                    <img src="../img/Administrative1.png" >
                </div>

        


                <!--Room cards-->

                <div class="card" id="cc">
                    <center>
                    <img class="card-img-top" src="../img/ss.png" id="rm2">
            
                    <div class="card-img-overlay card-inverse" style="background-color: rgb(75, 115, 165);">
                        <img src=""  id="docc" alt="">
                         
                        
                    </div>

                    <div class="card-img-overlay card-inverse">
                        <img src="../img/rooms.png" alt="">
                    </div>
                     
                    <div class="card-img-overlay card-inverse">
                        <center>
                        <div class="container">
                        <div class="row" id="rcard">

                        <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Department ID</th>
                                <th>Doctor ID</th>
                                <th>Nurse ID</th>
                                <th>Room number</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Password</th>
                                <th>Action</th>
                  </tr>
                  </thead>
                  
                  <?php
                  $conn = mysqli_connect('localhost','root','','hospitalmanagementsystem') or die("connection failed");
                  $query="SELECT * FROM patient";
                  $result=mysqli_query($conn,$query);
                  while($row=$result->fetch_assoc()){
                    echo "
                        <tr>
                            <td>".$row["patient_ID"]."</td>
                            <td>".$row["firstname"]."</td>
                            <td>".$row["lastname"]."</td>
                            <td>".$row["dep_ID"]."</td>
                            <td>".$row["doctor_ID"]."</td>
                            <td>".$row["nurse_ID"]."</td>
                            <td>".$row["room_ID"]."</td>
                            <td>".$row["age"]."</td>
                            <td>".$row["address"]."</td>
                            <td>".$row["phone"]."</td>
                            <td>".$row["password"]."</td>
                            <td><a class='btn btn-primary btn-sm' href='infra.php?ID=".$row["patient_ID"]."'>Delete</a>
                            </td>
                        </tr>
                    ";
                  }
                  ?>
                  </table>
                                </div>
                              </div>
                             </center>
                              </div>
                          </div>
                         
                          </div>


                          

            </center>
                         
                        
                    


        

    
</body>
</html>