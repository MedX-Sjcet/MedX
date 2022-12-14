<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../addPatient/addpatient.css">

    <title>Patient Portal</title>
</head>
<body>

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
                <a class="nav-link active" aria-current="page" href="/index.html">Home</a>
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

        <!--admin portal-->
        <div class="img2">
            <img src="../img/patient.png" >
        </div>

        <!--Form-->

        <div class="row" id="nurdet">
            <div class="col-md-8 mb-4">
              <div class="card mb-4" id="doc12">
                <div class="card-header py-3">
                  <h5 class="mb-0">Patient Details</h5>
                   </div>
                   <div class="card-body">
                     <form action="patientdetails.php" method="post">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4" id="doc22">
                      <div class="col">
                        <div class="form-outline">
                          <input type="text" name="firstname" id="form7Example1" placeholder="First Name" class="form-control" style="height: 1cm;" />
                          
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-outline">
                          <input type="text" name="lastname" id="form7Example2" placeholder="Last Name" class="form-control" style="height: 1cm;" />
                          
                        </div>
                      </div>
                    </div>
  
                    <!--id-->
  
                    <div class="form-outline mb-4">
                        <input type="number" name="ID" id="form7Example4" placeholder="ID" class="form-control" style="height: 2cm;"/>
  
                      </div>
  
                      <!--Department-->
                      <div class="row">
                        <div class="col-12">
        
                          <select name="department" class="select form-control-lg">
                            <option value="1" disabled>Select Department</option>
                            <option value="2">Pediatrics</option>
                            <option value="3">Orthopaedic</option>
                            <option value="4">Cardialogy</option>
                            <option value="5">ENT</option>
                            <option value="6">Neurology</option>
                            <option value="7">Opthalmology</option>
                            <option value="8">Gyneacology</option>
                            <option value="9">Urology</option>
                            
                          </select>
                          <label class="form-label select-label">Select Department</label>
        
                        </div>

                        
                      </div>

                      <!--Doctor-->
                      <div class="row">
                        <div class="col-12">
                        <select name="doc" class="select form-control-lg">
                          <?php
                          $conn = mysqli_connect('localhost','root','','hospitalmanagementsystem') or die("connection failed");
                          $query="SELECT doctor_ID,firstname FROM doctor";
                          $result=mysqli_query($conn,$query);
                          while($row=$result->fetch_assoc()){
                            echo "
                            <option value='".$row["doctor_ID"]."'>".$row["firstname"]."</option>
                            ";
                          }
                          ?>
                          </select>
                          <label class="form-label select-label">Select Doctor</label>
        
                        </div>  
                        </div>
                    <!-- Room no. input -->
                    <div class="form-outline mb-4">
                      <input type="number" name="room" id="form7Example3" placeholder="Room no." class="form-control" style="height: 1cm;" />
                      
                    </div>

                    <!-- Age input -->
                    <div class="form-outline mb-4">
                        <input type="number" name="age" id="form7Example3" placeholder="Age" class="form-control" style="height: 1cm;" />
                        
                      </div>
          
                    <!-- Address input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="address" id="form7Example4" placeholder="Address" class="form-control" style="height: 2cm;"/>
  
                    </div>
          
                    
          
                    <!-- Number input -->
                    <div class="form-outline mb-4">
                        <div class="md-form">
                            <input type="number" name="phone" id="form1" placeholder="Phone Number" class="form-control">
                            <input type="text" id="form2"  class="form-control"  style="display: none;">
                            
                        </div>
  
                    </div>
          
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />
                    </div>
  
                    <!--Register button-->
  
                           <div class="form-outline mb-4" >
                            <input  type="submit" class="btn btn-primary btn-block mb-4" id="sign" name="register" value="REGISTER">
                            </div>
  
  


</body>
</html>