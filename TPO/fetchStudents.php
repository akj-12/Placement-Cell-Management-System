<?php
        session_start();
       
        if ($_SESSION['user'] == true) {
            //    header('fetchStudents.php'); 
        }else{
                header('location:tpoLogin.php');
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- fonts google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <!-- style main css  -->
    <link rel="stylesheet" href="../Student/css/style.css" type="text/css">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- fontawesome -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>TPO Fetch Details </title>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-md bg-color navbar-fixed-top navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="http://www.ipu.ac.in"><img src="../Homepage/gallery/ipulogo.png" alt="ipu logo" height="80vh" width="auto"></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon">
                <!-- <i class="fa fa-navicon"></i> -->
            </span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../TPO/tpoLogin.php">Fetch Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../TPO/postJob.php">Post Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end  -->

    <!-- search php form end -->

      <!-- search from data base form -->
        <div class="signup-form container">
           <form action="search.php" method="POST">
                <h4 class="text-center">Please Enter the value to  search.</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="FirstName">FirstName</label>
                        <input type="text" class="form-control" placeholder="First name" name="FirstName">
                    </div>
                <div class="form-group col-md-6">
                    <label for="LastName">LastName</label>
                    <input type="text" class="form-control" placeholder="Last name" name="LastName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Enrollment Number">Enrollment Number</label>
                    <input type="text" class="form-control" placeholder="Enrollment number" name="EnrollmentNumber">
                </div>
                <div class="form-group col-md-6">
                    <label for="Mobile Number">Btech Percentage</label>
                    <input type="text" class="form-control" placeholder="Mobile Number" name="Mobile">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary " name="search">Search</button>
            </div>
           </form>
        </div>
      <!-- search from data base form end -->

    <!-- navigation start -->
    <div class="container-fluid text-center nav-margin">
        <div class="row">
            <div class="col-md-6 text-center text-design">
                <h3>Navigation</h3>
                <ul class="list-unstyled p-4">
                    <li><a href="../TPO/tpoLogin.php">TPO Login</a></li>
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

    <!-- script  -->
    <script src="../Student/javascript/validation.js">

    </script>

    <!-- script end  -->

</body>

</html>
