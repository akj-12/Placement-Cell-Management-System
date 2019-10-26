<?php
    session_start();
    if ($_SESSION['userName'] == true) {
        
    }else{
        header('location:studentLogin.php');
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
                    <a class="nav-link" href="logout.php">Log out</a>
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
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>

  <?php
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "placementcell";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM STUDENTDETAILS WHERE EnrollmentNumber='$_SESSION[userName]'";
    $data = mysqli_query($conn , $query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
    // echo $result['FirstName'];

    if ($total != 0 ) {
       // echo "TAble has records";
    }else{
        echo "Table has no records";
    }
  ?>
  <tbody>
    <tr>
        <th scope="row">First Name</th>
        <td><?php echo $result['FirstName']; ?></td>
    </tr>
    <tr>
        <th scope="row">Last Name</th>
        <td><?php echo $result['LastName']; ?></td>    
    </tr>
    <tr>
        <th scope="row">Address</th>
        <td ><?php echo $result['Address']; ?></td>
    </tr>
    <tr>
        <th scope="row">City</th>
        <td ><?php echo $result['City']; ?></td>
    </tr>
    <tr>
        <th scope="row">State</th>
        <td ><?php echo $result['State']; ?></td>
    </tr>
    <tr>
        <th scope="row">ZIP</th>
        <td ><?php echo $result['Zip']; ?></td>
    </tr>
    <tr>
        <th scope="row">E-mail</th>
        <td ><?php echo $result['Email']; ?></td>
    </tr>
    <tr>
        <th scope="row">Enrollment Number</th>
        <td ><?php echo $result['EnrollmentNumber']; ?></td>
    </tr>
    <tr>
        <th scope="row">Mobile Number</th>
        <td ><?php echo $result['Mobile']; ?></td>
    </tr>
    <tr>
        <th scope="row">10th percentage</th>
        <td ><?php echo $result['TenthPercentage']; ?></td>
    </tr>
    <tr>
        <th scope="row">10th school name</th>
        <td ><?php echo $result['TenthSchool']; ?></td>
    </tr>
    <tr>
        <th scope="row">10th passout year</th>
        <td ><?php echo $result['TenthPassOutYear']; ?></td>
    </tr>
    <tr>
        <th scope="row">12th percentage</th>
        <td ><?php echo $result['TwelvePercentage']; ?></td>
    </tr>
    <tr>
        <th scope="row">12th school name</th>
        <td ><?php echo $result['TwelveSchoolName']; ?></td>
    </tr>
    <tr>
        <th scope="row">12th passout year</th>
        <td ><?php echo $result['TwelvePassOutYear']; ?></td>
    </tr>
    <tr>
        <th scope="row">BTECH CGPA</th>
        <td ><?php echo $result['BtechPercentage']; ?></td>
    </tr>
    <tr>
        <th scope="row">CV</th>
        <td ><?php echo $result['CV']; ?></td>
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
