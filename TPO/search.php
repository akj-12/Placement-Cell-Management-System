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
                    <a class="nav-link" href="postJob.php">Post Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end  -->

  <!-- Searched data fetched from database  -->

        <!-- search php form start -->
    <?php
        $serverName = "localhost";
        $userName  = "root";
        $password = "";
        $databaseName = "placementcell";

        $conn = mysqli_connect($serverName,$userName,$password,$databaseName);

        if ($conn == true) {
            // success
                //     echo "Success";
        }else{
            echo "Database connection error ".mysqli_connect_error();
        }

        // search query
        if (isset($_POST['search'])) {
            $firstName = $_POST['FirstName'];
            $lastName = $_POST['LastName'];
            $enrollmentNumber = $_POST['EnrollmentNumber'];
            $Mobile = $_POST['Mobile'];

         // Attempt select query execution
        $sql = "SELECT * FROM studentdetails WHERE FirstName LIKE '%".$firstName."%' AND LastName LIKE '%".$lastName."%' AND  EnrollmentNumber LIKE '%".$enrollmentNumber."%' AND Mobile LIKE '%".$Mobile."%'";
        if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
        ?>

        <table class="table table-bordered">
                <h3 class="text-center p-3">Personal Details</h3>
                <thead class="thead-dark p-4">
                        <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                <th scope="col">State</th>
                                <th scope="col">ZIP</th>
                                <th scope="col">Enrollment Number</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                                while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['FirstName'] . "</td>";
                                                echo "<td>" . $row['LastName'] . "</td>";
                                                echo "<td>" . $row['Email'] . "</td>";
                                                echo "<td>" . $row['Address'] . "</td>";
                                                echo "<td>" . $row['City'] . "</td>";
                                                echo "<td>" . $row['State'] . "</td>";
                                                echo "<td>" . $row['Zip'] . "</td>";
                                                echo "<td>" . $row['EnrollmentNumber'] . "</td>";
                                        echo "</tr>";
                                }
                              
                                } else{
                                echo "No records matching your query were found.";
                                }
                                } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
        
        }
    
    ?>
                </tbody>
        </table>

        <!-- academic details -->
        <?php
        if ($result = mysqli_query($conn,$sql)) {
                if (mysqli_num_rows($result) > 0) {
                ?>

                <table class="table table-bordered">
                        <h3 class="text-center p-3">Academic Details</h3>
                        <thead class="thead-dark p-4">
                                <tr>
                                        <th scope="col">Tenth Percentage</th>
                                        <th scope="col">Tenth School Name</th>
                                        <th scope="col">Tenth Passout Year</th>
                                        <th scope="col">Twelve Percentage</th>
                                        <th scope="col">Twelve School Name</th>
                                        <th scope="col">Twelve Passout Year</th>
                                        <th scope="col">Btech CGPA</th>
                                </tr>
                        </thead>

                        <tbody>
                                <?php
                                      while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                                echo "<td>" . $row['TenthPercentage'] . "</td>";
                                                echo "<td>" . $row['TenthSchool'] . "</td>";
                                                echo "<td>" . $row['TenthPassOutYear'] . "</td>";
                                                echo "<td>" . $row['TwelvePercentage'] . "</td>";
                                                echo "<td>" . $row['TwelveSchoolName'] . "</td>";
                                                echo "<td>" . $row['TwelvePassOutYear'] . "</td>";
                                                echo "<td>" . $row['BtechPercentage'] . "</td>";
                                        echo "</tr>";
                                }  
                                ?>
                        </tbody>
                
                </table>        
                <?php
                
                }
        }
        // Close result set
         mysqli_free_result($result);

        // Close connection
        mysqli_close($conn);
        ?>

        

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


