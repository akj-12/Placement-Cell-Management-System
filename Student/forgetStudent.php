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

    <title>Student Create Account </title>
</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-md bg-color navbar-dark">
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
                    <a class="nav-link" href="../Student/studentLogin.php">Student Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../TPO/tpoLogin.php">TPO Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Placement Drives</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end  -->

    <!-- form start -->
    <div class="signup-form">
        <form action="#" method="post">
            <h2>Account Recovery</h2>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                    <input type="tel" pattern="[0-9]{10}" class="form-control" name="username" placeholder="Mobile Number" required="required">
                </div>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" id="getOTP">Get OTP</button>
            </div>
            <div class="form-group" id="otp">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <input type="number" class="form-control" placeholder="OTP number" required="required">
                </div>
            </div>
            <div class="form-group " id="varify">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Verify</button>
            </div>
            <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
        </form>
        <div class="text-center">Don't have an account? <a href="otpLogin.php">Create Account</a>.</div>
        <div class="text-center mt-2">Already have an account ? <a href="studentLogin.php">Login In</a>.</div>
    </div>

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

    <!-- hide and show  -->
    <script src="./javascript/validation.js"></script>
    <!-- hide and show end -->
</body>

</html>
