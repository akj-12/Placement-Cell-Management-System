 <?php
 session_start();
 
if ($_SESSION['userName'] == true) {
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
$enrollment = $_SESSION['userName'];
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

// inserting values into table
$sql = "INSERT INTO studentdetails(FirstName,LastName,Address,City,State,Zip,Email,EnrollmentNumber,Mobile,TenthPercentage,TenthSchool,TenthPassOutYear,TwelvePercentage,TwelveSchoolName,TwelvePassOutYear,BtechPercentage,CV) VALUES('$firstName','$lastName','$address','$city','$state','$zip','$email','$enrollment','$mobile','$tenthPercentage','$schoolName','$tenthPassOutYear','$twelvePercentage','$highSchool','$twelvePassOutYear','$btechPercentage','$fileName')";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
     
    echo "<script>window.open('studentDetails.php','_self')</script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}else{
    header('location:studentLogin.php');
}
//closing db
mysqli_close($conn);
?>