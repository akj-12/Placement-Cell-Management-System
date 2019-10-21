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
$enrollMent = $_REQUEST['enrollmentNumber'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$branch = $_REQUEST['branch'];

$sql = "INSERT INTO studentregistration(enrollment_no,email,password,branch) VALUES('$enrollMent','$email','$password','$branch')";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    echo "<script>window.open('studentLogin.php','_self')</script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>