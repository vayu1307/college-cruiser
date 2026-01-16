<?php
$showalert = false;
$showerror = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "_partials/db_connect.php";

    $mail = $_POST['email'];
    $pass = $_POST['pass'];

    $data = "SELECT * FROM `stud` Where `umail` = '$mail'";

    $result = mysqli_query($conn, $data);
    $num_row = mysqli_num_rows($result);
    if ($num_row == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['upass'] == $pass) {
                $showalert = true;

                $_SESSION['login'] = true;
                $_SESSION['Username'] = $row['uname'];
                $_SESSION['email'] = $mail;
                if (isset($_POST['login'])) {
                    header('Location:booking.php');
                }
            } else {
                $showerror = "Incorrect Password!";
            }
        }
    } else {
        $showerror = "Email Doesn't Exist!";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Here</title>
    <link href="signin_style.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
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
                <li><a href="About_us.php">About Us</a></li>
                <li><a href="stud_signup.php">Sign Up</a></li>
            </ul>
    </nav>
    </div>

    <?php
    if ($showalert) {
        session_start();
        echo '<strong>Login Successfull!</strong> Now you can book your seat.';
    }

    if ($showerror) {
        echo '<strong>Warning!</strong> ' . $showerror;
    }
    ?>

    <img src="_gif/Sign_in.gif" alt="sign_in image">
    <div class="container">
        <h1 class="mt-1">SIGN IN</h1>
        <hr style="height: 2px;border-width: 0px;border-radius: 20px;margin-left: 0px;color:gray;background-color: #274b76;">
        <form method="post" name="login">
            <div class="mail">
                <label for="email" class="form-label">
                    <h3 id="mail"> E-mail </h3>
                    <input type="email" placeholder="Enter Your Email" name="email" class="form-control" id="emaili" aria-describedby="emailHelp">
                </label>
            </div>

            <div class="password">
                <label for="pass" class="form-label">
                    <h3 id="pass"> Password </h3>
                </label>

                <input type="password" placeholder="Enter Your Password" class="form-control" name="pass" id="passi">
                </br>

                <img src="_gif/eye_close_icon.png" id="eci">

                <!-- <input type="checkbox" class="checkbox" id="chkb">
                <h5>Remember Me</h5> -->
                <p>Don't have account ?<a href="stud_signup.php">Sign up</a></p>
            </div>

            <script>
                let eci = document.getElementById("eci");

                let passi = document.getElementById("passi");

                eci.onclick = function() {
                    if (passi.type == "password") {
                        passi.type = "text";
                        eci.src = "_gif/eye_open_icon.png";
                    } else {
                        passi.type = "password";
                        eci.src = "_gif/eye_close_icon.png";
                    }
                }
            </script>

            <div class="mt-5">
                <button type="submit" class="signin" name="login">Login</button>
            </div>

            <div id="fpass">
                <a href="forget_pass.php" class="fpass"> Forget Password ? </a>
            </div>
        </form>
    </div>
</body>
</html>