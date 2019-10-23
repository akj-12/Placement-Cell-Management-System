<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- fonts google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <!-- style main css  -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- font awesome -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Student Details </title>
</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-md bg-color navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="http://www.ipu.ac.in"><img src="../Homepage/gallery/ipulogo.png" alt="ipu logo" height="80vh" width="100%"></a>

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
                    <a class="nav-link" href="#">Placement Drives</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="studentDetails.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Log out</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end  -->

    <!-- table start -->
    <h3 class="text-center">Student Details</h3>
    <table class="table table-bordered container table-hover">
  <thead>
    <tr>
      <th scope="col">Details</th>
      <th scope="col">Value</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row">First Name</th>
        <td>Mark</td>
    </tr>
    <tr>
        <th scope="row">Last Name</th>
        <td>Jacob</td>    
    </tr>
    <tr>
        <th scope="row">Address</th>
        <td >Larry the Bird</td>
    </tr>
    <tr>
        <th scope="row">City</th>
        <td >New  Delhi</td>
    </tr>
    <tr>
        <th scope="row">State</th>
        <td >Delhi</td>
    </tr>
    <tr>
        <th scope="row">ZIP</th>
        <td >110035</td>
    </tr>
    <tr>
        <th scope="row">E-mail</th>
        <td >a.gmail.com</td>
    </tr>
    <tr>
        <th scope="row">Enrollment Number</th>
        <td >110035</td>
    </tr>
    <tr>
        <th scope="row">Mobile Number</th>
        <td >7859999353</td>
    </tr>
    <tr>
        <th scope="row">10th percentage</th>
        <td >78</td>
    </tr>
    <tr>
        <th scope="row">10th school name</th>
        <td >Veena Vidya Mandir</td>
    </tr>
    <tr>
        <th scope="row">10th passout year</th>
        <td >2012</td>
    </tr>
    <tr>
        <th scope="row">12th percentage</th>
        <td >78</td>
    </tr>
    <tr>
        <th scope="row">12th school name</th>
        <td >Ram Niranjan</td>
    </tr>
    <tr>
        <th scope="row">12th passout year</th>
        <td >2014</td>
    </tr>
    <tr>
        <th scope="row">BTECH CGPA</th>
        <td >7</td>
    </tr>
    <tr>
        <th scope="row">CV</th>
        <td >a.pdf</td>
    </tr>
    
  </tbody>
</table>
    <!-- table end -->

    <!-- navigation start -->
    <div class="container-fluid text-center nav-margin">
        <div class="row">
            <div class="col-md-6 text-center text-design">
                <h3>Navigation</h3>
                <ul class="list-unstyled p-4">
                    <li><a href="studentlogin.php">Student Login</a></li>
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
</body>

</html>
