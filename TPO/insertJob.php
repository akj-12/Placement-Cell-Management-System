<?php
    session_start();
    if ($_SESSION['user'] == true) {
        // echo "welcome".$_SESSION['userName'];
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
        $companyName = $_REQUEST['companyName'];
        $position = $_REQUEST['position'];
        $date = $_REQUEST['date'];
        $package = $_REQUEST['package'];
        $criteria = $_REQUEST['criteria'];
        $link = $_REQUEST['Link'];

        if (isset($_POST['search'])) {
                $sql = "INSERT INTO PostJob (CompanyName,position,Date,Package,BtechPercentage,Link) VALUES ('$companyName','$position','$date','$package','$criteria','$link')";

                if (mysqli_query($conn,$sql)) {
                        // echo "Successful insertion";
                        header('location:../Placement/jobProtal.php');
                }else{
                        echo "Error in insertion . ".$sql."<br>".mysqli_error();
                }
        }
    }else{
        header('location:tpoLogin.php');
    }

    mysqli_close($conn);
    
?>