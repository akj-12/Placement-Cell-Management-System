function registerStudent() {
    //enrollment validation
    var enrollmentNumber = document.getElementById("enrollmentNumber").value;
    if (enrollmentNumber == "") {
        document.getElementById("message").innerHTML = "Enrollment number should not be blank.";
        return false;
    } else if (isNaN(enrollmentNumber)) {
        document.getElementById("message").innerHTML = "Enrollment number must be number.";
        return false;
    } else if (enrollmentNumber.length > 1 && enrollmentNumber.length <= 10) {
        document.getElementById("message").innerHTML = "Enrollment number must be 10 digit.";
        return false;
    } else {
        return true;
    }
}
//recheck password validation student register
var password = document.getElementById("password"),
    confirm_password = document.getElementById("confirm_password");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

