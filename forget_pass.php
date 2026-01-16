<?php
$showalert = false;
$showerror = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "_partials/db_connect.php";

    $mail = $_POST['fpmail'];

    $chk_que = "SELECT `umail` FROM `stud` where `umail` = '$mail'";

    $result = mysqli_query($conn, $chk_que);
    $num_row = mysqli_num_rows($result);

    if ($num_row == 1) {
        if (isset($_POST['continue'])) {
            header('Location:update_password.php');
        }
    } else {
        $showerror = "Email Doesn't Exist!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Forget Passowrd</title>

    <link rel="stylesheet" href="forget_pass_style.css">
</head>

<body>
    <nav>
        <div class="menu">
            <div class="logo">
                <a href="home_page.php">
                    <img src="_gif/college_cruiser_logo_removebg.png" alt="logo">
                </a>
            </div>
            <ul>
                <li><a href="home_page.php">Home</a></li>
                <li><a href="stud_signin.php">Sign in</a></li>
                <li><a href="About_us.php">About Us</a></li>
                <!-- <li><a href="#">Admin Login</a></li> -->
            </ul>
        </div>
    </nav>

    <form name="fpass" method="POST" action="">

        <div class="fp">
            </br>

            <h2 id="mainhead">Ohh! Forget Your Password ?</h2>
            <small>No worries! Enter your email and you can reset your password.</small>
            </br></br>

            <h3 id="inputhead">E-mail</h3>
            </br>

            <input type="email" id="fpmail" name="fpmail" placeholder="Enter Your Email Address" class="email_id" aria-describedby="emailHelp" required>
            </br></br>

            <a href="update_password.php">
                <button type="submit" id="sotp" name="continue">Continue</button>
            </a>
            <script>
                var email = document.getElementById("fpmail");
                var checkemail = document.getElementById("email_check");

                function validateemail() {
                    if (!email.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
                        email_check.innerHTML = "Please enter a valid email.";
                    }
                    email_check.innerHTML = "";
                    return true;
                }
            </script>
    </form>
</body>

</html>