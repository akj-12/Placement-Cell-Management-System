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
// taking input from form
$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zip = $_REQUEST['zip'];
$email = $_REQUEST['email'];
$enrollment = $_REQUEST['enrollment'];
$mobile = $_REQUEST['mobile'];
$tenthPercentage = $_REQUEST['tenthPercentage'];
$schoolName = $_REQUEST['schoolName'];
$tenthPassOutYear = $_REQUEST['tenthPassOutYear'];
$twelvePercentage = $_REQUEST['twelvePercentage'];
$highSchool = $_REQUEST['highSchool'];
$twelvePassOutYear = $_REQUEST['twelvePassOutYear'];
$btechPercentage = $_REQUEST['btechPercentage'];
$cv = $_REQUEST['cv'];

// inserting values into table
$sql = "INSERT INTO studentdetails(enrollment_no,email,password,branch) VALUES('$enrollMent','$email','$password','$branch')";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    echo "<script>window.open('studentLogin.php','_self')</script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//closing db
mysqli_close($conn);
?>