<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- fonts google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <!-- style main css  -->
    <link rel="stylesheet" href="../Student/css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- font awesome -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Create Account </title>
</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-md bg-color navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="http://www.ipu.ac.in"><img src="../Homepage/gallery/ipulogo.png" alt="ipu logo" height="80vh" width="auto"></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon">
                <i class="fa fa-navicon"></i>
            </span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../Student/studentLogin.php">Student Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../TPO/tpoLogin.php">TPO Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Placement Drives</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end  -->

   <!-- Fetching Data From Databse  -->
   <?php
        $conn = mysqli_connect("localhost","root","","placementcell");
        if ($conn == true) {
            // echo "success";
        }else{
            echo "Database connectivity failed .".mysqli_connect_error();
        }

        // query to fetch data from database 
        $sql = "SELECT * FROM postjob ";
        ?>

        <h3 class="text-center mt-5">Coming Drives</h3>
        <div class="row">
        <?php
        
        if ($data = mysqli_query($conn , $sql)) {
            if (mysqli_num_rows($data) > 0) {
                
                while($result = mysqli_fetch_assoc($data) ){
                    ?>                     
                            <div class="col-lg-4">
                                <div class="card  shadow-lg p-3 m-5 bg-white rounded" style="width:20rem;">
                                    <div class="card-body">
                                        <h5 class="card-title ">Company Name :<?php echo $result['CompanyName'] ?>  </h5>
                                        <p class="card-subtitle"><b>Position</b> :<?php echo $result['position']?> </p>
                                        <p class="card-text"><b>Date : <?php echo $result['Date'];?></b></p>
                                        <p><b>Package: <?php echo $result['Package']; ?> </b></p>
                                        <p><b>CGPA Required:<?php echo $result['BtechPercentage']; ?> </b></p>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-primary text-center">Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                          
                    <?php 
                    // echo "<h5>".$result['CompanyName']."</h5>";
                    // echo "<p>".$result['position']."</p>";
                    // echo $result['Date'];
                    // echo $result['Package'];
                    // echo $result['BtechPercentage'];
                }
        }   
           
        }else{
            echo "No Current Drives";
        }
        
   ?>
   
        </div>
        
   <!-- Fetching Data From Databse End -->


    <!-- navigation start -->
    <div class="container-fluid text-center nav-margin">
        <div class="row">
            <div class="col-md-6 text-center text-design">
                <h3>Navigation</h3>
                <ul class="list-unstyled p-4">
                    <li><a href="../Student/studentLogin.php">Student Login</a></li>
                    <li><a href="tpologin.php">TPO Login</a></li>
                    <li><a href="#">Placement Drive</a></li>
                </ul>
            </div>
            <div class="col-md-6 ">
                <h3>Contact Us</h3>
                <p class="p-4">
                    Prof. B.V.R. Reddy (Chairperson)
                    <br>
                    Prof. A. K. Saini (Convenor)
                    <br>
                    Phone: 011-25302739
                    <br>
                    E-Mail: cpc@ipu.ac.in, ccgpc.ggsipu@gmail.com
                </p>
            </div>
        </div>
    </div>
    <!-- navigation end -->
</body>

</html>
