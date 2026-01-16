<?php
$showalert = false;
$showerror = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "_partials/db_connect.php";

    $name = $_POST['name'];
    $mob = $_POST['mobno'];
    $mail = $_POST['email'];
    $pass = $_POST['passw'];
    $cpass = $_POST['repassw'];
    $place = $_POST['place'];

    $chk_que = "SELECT `umail` FROM `stud` where `umail` = '$mail'";

    $result = mysqli_query($conn, $chk_que);
    $num_row = mysqli_num_rows($result);

    if ($num_row == 1) {
        $showerror = "E-mail is already exist.";
    } else {
        if ($pass == $cpass) {
            $ins_que = "INSERT INTO `stud`(`uname`,`umobno`,`umail`,`upass`,`uplace`) VALUES ('$name','$mob','$mail','$pass','$place')";

            $result = mysqli_query($conn, $ins_que);
            if ($result) {
                $showalert = "You've successfully registered.";
            }

            if (isset($_POST['submit'])) {
                header('Location:stud_signin.php');
            }
        } else {
            $showerror = "Password & Confirm Password Doesn't match.";
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register Here</title>
    <link href="signup_style.css" rel="stylesheet">
</head>

<body>

    <?php
    if ($showalert) {
        echo '<strong>Success!</strong> Registration Successfull';
    }

    if ($showerror) {
        echo '<strong>Error!</strong> ' . $showerror;
    }
    ?>
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
                <li><a href="stud_signin.php">Sign In</a></li>
            </ul>
        </div>
    </nav>

    <img class="imgsignup" src="_gif/Sign up.gif" alt="sign up">
    <form method="post" action="stud_signup.php" class="form">
        <div class="container">
            <div class="form-group">
                <!-- <label for="name">
                    <h3>User Name</h3>
                </label> -->
                <h1>Sign up</h1>
                <input type="name" required name="name" class="form-control" id="name" placeholder="Enter User Name">
            </div>

            <div class="form-group">
                <!-- <label for="mobno">
                    <h3 id="mobno">Mobile Number</h3>
                </label> -->
                <input type="mobno" required name="mobno" class="form-control" id="mobno" placeholder="Enter Mobile No.">
            </div>

            <div class="form-group">
                <!-- <label for="email">
                    <h3>E-mail</h3>
                </label> -->
                <input type="email" required class="form-control" id="email" placeholder="Enter Your Email Address" name="email" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <!-- <label for="password">
                    <h3>Password</h3>
                </label> -->
                <input type="password" required name="passw" class="form-control" id="passw" placeholder="Enter Your Password">
            </div>
            <img src="_gif/eye_close_icon.png" id="eci1">

            <script>
                let eci1 = document.getElementById("eci1");

                let passw = document.getElementById("passw");

                eci1.onclick = function() {
                    if (passw.type == "password") {
                        passw.type = "text";
                        eci1.src = "_gif/eye_open_icon.png";
                    } else {
                        passw.type = "password";
                        eci1.src = "_gif/eye_close_icon.png";
                    }
                }
            </script>

            <div class="form-group">
                <!-- <label for="repass">
                    <h3>Confirm Password</h3>
                </label> -->
                <input type="password" required name="repassw" class="form-control" id="repassw" placeholder="Confirm Your Password">

            </div>
            <img src="_gif/eye_close_icon.png" id="eci2">

            <script>
                let eci2 = document.getElementById("eci2");

                let repassw = document.getElementById("repassw");

                eci2.onclick = function() {
                    if (repassw.type == "password") {
                        repassw.type = "text";
                        eci2.src = "_gif/eye_open_icon.png";
                    } else {
                        repassw.type = "password";
                        eci2.src = "_gif/eye_close_icon.png";
                    }
                }
            </script>

            <div class="form-group">
                <!-- <label for="place">
                    <h3>Choose a place</h3>
                </label> -->
                <select required name="place" class="drop-down" id="place">
                    <option>------------Choose Your Bus Stop-----------</option>
                    <option>Old campus</option>
                    <option>S. T. Bus stand</option>
                    <option>Kamlabag</option>
                    <option>Hotel kaveri</option>
                    <option>Narsang tekri</option>
                    <option>Mer samaj</option>
                    <option>Gayatri heights</option>

                </select>
                <!-- </div> -->
                <p>Already have an account ?<a href="stud_signin.php">Sign in</a></p>
                <button type="submit" class="btn" name="submit">Submit</button>
            </div>
        </div>
    </form>

</body>
</html>