<?php
session_start();
if ($_SESSION['userName'] == true) {

    $conn = mysqli_connect("localhost", "root", "", "placementcell");
    if ($conn == true) {
        // echo "Connected Successfully";

    } else {
        die("Database connectivity failed" . mysqli_connect_error());
    }
    //inserting applied job

    if (isset($_REQUEST['apply'])) {
        $id = $_REQUEST['id'];
        $fetchJob = "SELECT * FROM postjob where id =" . $id;
        if ($result = mysqli_query($conn, $fetchJob)) {
            while ($total = mysqli_fetch_array($result)) {
                // echo $total['CompanyName'];
                // $companyName = $_REQUEST['companyName']
                // $userId = $_SESSION['userName'];
                $placed = "SELECT MAX(pkg) FROM student_selected where user_id=" . $_SESSION['userName'];
                $selected = mysqli_query($conn, $placed);
                $totalSelected = mysqli_fetch_array($selected);
                if (isset($totalSelected[0])) {
                    // echo $selected['pkg'];
                    if ($total['Package'] > (2.5 + $totalSelected[0])) {
                        $sql = "INSERT INTO jobapplied(EnrollmentNumber,CompanyName ,Package) VALUES ('$_SESSION[userName]','$total[CompanyName]' ,'$total[Package]')";
                        if (mysqli_query($conn, $sql)) {
                            echo "<script>alert('Your application submitted successfully')</script>";
                            break;
                        }
                    } else {
                        echo "<script>alert('Your are not eligible for this application.')</script>";
                    }
                } else {
                    $sql = "INSERT INTO jobapplied(EnrollmentNumber,CompanyName ,Package) VALUES ('$_SESSION[userName]','$total[CompanyName]' ,'$total[Package]')";
                    if (mysqli_query($conn, $sql)) {
                        echo "<script>alert('Your application submitted successfully')</script>";
                        break;
                    }

                }

                // break;
                // echo $total['id'];
            }
        }
    }

} else {
    header('location:studentlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- icon -->
     <link rel="shortcut icon" type="image/x-png" href="../Homepage/gallery/ipuIcon.png" />
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
    <title>Student Apply </title>
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
                    <a class="nav-link" href="../Student/studentProfile.php"><?php echo "Hello , " . $_SESSION['userName']; ?></a>
                </li>

                <li>
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end  -->

   <!-- Fetching Data From Databse  -->
   <?php
$conn = mysqli_connect("localhost", "root", "", "placementcell");
if ($conn == true) {
    // echo "success";
} else {
    echo "Database connectivity failed ." . mysqli_connect_error();
}

// query to fetch data from database
$sql = "SELECT * FROM postjob ";
?>

        <h3 class="text-center mt-5">Coming Drives</h3>
        <div class="row container-fluid">
        <?php

if ($data = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($data) > 0) {

        while ($result = mysqli_fetch_assoc($data)) {
            ?>
                            <div class="col-lg-4">
                                <div class="card  shadow-lg p-3 m-5 bg-white rounded" style="width:20rem;">
                                    <div class="card-body">
                                    <label ><h5>Company Name</h5></label>
                                        <input type="text" class="form-control " name="CompanyName" value="<?php echo $result['CompanyName']; ?>"  readonly  >
                                        <label ><h5>Position</h5></label>
                                        <input type="text" class="form-control " name="Position" value="<?php echo $result['position']; ?>"   readonly  >
                                        <label ><h5>Date</h5></label>
                                        <input type="text" class="form-control " name="Date" value="<?php echo $result['Date']; ?>"   readonly  >
                                        <label ><h5>Package</h5></label>
                                        <input type="text" class="form-control " name="Package" value="<?php echo $result['Package']; ?>"  readonly  >
                                        <label ><h5>Btech CGPA</h5></label>
                                        <input type="text" class="form-control " name="BtechPercentage" value="<?php echo $result['BtechPercentage']; ?>"   readonly  >
                                        <br>
                                        <link type="text" class="form-control " value="<?php echo $result['Link']; ?>"    >
                                        <br>
                                        <form action="../Student/jobApplied.php ? " method="GET">
                                        <input type="hidden" value="<?php echo $result['id']; ?>" name="id"/>
                                            <div class="text-center">
                                                <button class="btn btn-primary" name="apply">Apply</button>
                                            </div>
                                        </form>
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

} else {
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
                    <li><a href="../placement/jobProtal.com">Placement Drive</a></li>
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
