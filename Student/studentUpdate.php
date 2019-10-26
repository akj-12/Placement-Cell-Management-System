<?php 
session_start();
 if ($_SESSION['id'] == true) {
        // connecting db
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "placementcell";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        
    }

//     fetching values for autofill form
    $query = "SELECT * FROM STUDENTDETAILS WHERE id='$_SESSION[id]'";
    $data = mysqli_query($conn , $query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
    
    
if (isset($_REQUEST['update'])) {
        // fetching data from form
        $address = $_REQUEST['address'];
        $city = $_REQUEST['city'];
        $state = $_REQUEST['state'];
        $zip = $_REQUEST['zip'];
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['mobile'];
        $tenthPercentage = $_REQUEST['tenthPercentage'];
        $schoolName = $_REQUEST['schoolName'];
        $tenthPassOutYear = $_REQUEST['tenthPassOutYear'];
        $twelvePercentage = $_REQUEST['twelvePercentage'];
        $highSchool = $_REQUEST['highSchool'];
        $twelvePassOutYear = $_REQUEST['twelvePassOutYear'];
        $btechPercentage = $_REQUEST['btechPercentage'];
        // inserting file 

        // retriving from form
        $file = $_FILES['cv'];
        // storing into temp var
        $fileName = $_FILES['cv']['name'];
        $file_temp = $_FILES['cv']['tmp_name'];

        move_uploaded_file($file_temp,"FileUpload/".$fileName);
        $sql = "UPDATE studentdetails SET Address = '$address',City='$city',State='$state',Zip='$zip',Email='$email' , Mobile='$mobile' ,TenthPercentage='$tenthPercentage',TenthSchool='$schoolName',
        TenthPassOutYear='$tenthPassOutYear' ,TwelvePercentage='$twelvePercentage',TwelveSchoolName='$highSchool',TwelvePassOutYear='$twelvePassOutYear',BtechPercentage='$btechPercentage',CV='$fileName' where id = $_SESSION[id]";

        if (mysqli_query($conn,$sql)) {
            // echo "Success";
           header('location:studentProfile.php');
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
}

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
                    <a class="nav-link" href="studentProfile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log out</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end  -->

    <!-- Form for registration -->
    <div class=" signup-form container">
        <form method="post"  enctype="multipart/form-data">
        <h2>Update Personal Information</h2>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" class="form-control " name="firstName" value="<?php echo $result['FirstName']; ?>" id="firstName" placeholder="First Name" readonly  >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last Name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="lastName" value="<?php echo $result['LastName']; ?>" readonly >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">House Number</label>
                    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St Delhi" value="<?php echo $result['Address']; ?>" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" name="city" id="inputCity" value="<?php echo $result['City']; ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control" name="state" required>
                        <option value="<?php echo $result['State']; ?>" selected><?php echo $result['State']; ?></option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telagana">Telagana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option value="New Delhi">New Delhi</option>
                        <option value="Others">Others</option>
                    </select>
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" name="zip" id="inputZip" value="<?php echo $result['Zip']; ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $result['Email']; ?>" required>
                    </div>
                   
                    <div class="form-group col-md-4">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $result['Mobile']; ?>"required>
                    </div>
                </div>
                <h2>Update Academic Information</h2>
                <div class="form-row">
                    <div class="form-froup col-md-4">
                        <label for="tenth">10th Percentage</label>
                        <input type="text" class="form-control" id="tenth" name="tenthPercentage" value="<?php echo $result['TenthPercentage']; ?>" required>
                    </div>
                    <div class="form-froup col-md-4">
                        <label for="schoolName">School Name</label>
                        <input type="text" class="form-control" id="schoolName" name="schoolName" value="<?php echo $result['TenthSchool']; ?>" required>
                    </div>
                    <div class="form-froup col-md-4">
                        <label for="schoolName">Passout Year(10th)</label>
                        <input type="text" class="form-control" name="tenthPassOutYear" id="schoolName" value="<?php echo $result['TenthPassOutYear']; ?>"required>
                    </div>
                <div class="form-froup col-md-4">
                    <label for="twelveth">12th Percentage</label>
                    <input type="text" class="form-control" id="twelveth" name="twelvePercentage" value="<?php echo $result['TwelvePercentage']; ?>"required>
                </div>
                <div class="form-froup col-md-4">
                    <label for="highSchool">High School Name</label>
                    <input type="text" class="form-control" id="highSchool" name="highSchool" value="<?php echo $result['TwelveSchoolName']; ?>" required>
                </div>
                <div class="form-froup col-md-4">
                    <label for="twelveth">Passout Year (12th)</label>
                    <input type="text" class="form-control" name="twelvePassOutYear" id="twelveth" value="<?php echo $result['TwelvePassOutYear']; ?>" required>
                </div>
                <div class="form-froup col-md-4">
                    <label for="btech">B.TECH CGPA</label>
                    <input type="text" class="form-control" name="btechPercentage" id="btech" value="<?php echo $result['BtechPercentage']; ?>" required>
                </div>
                </div>
                <div class="form-group">
                    <label for="CV">Upload your CV:</label>
                    <input type="file" class="form-control-file" name="cv" value="<?php echo $result['CV']; ?>" id="CV" >
                </div>
                <div class="text-center">
                <button type="submit" name="update" class="btn btn-primary ">Update</button>
                </div>
    </form>
    </div>
    <!-- Form for registration end -->

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
