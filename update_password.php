<?php
$showalert = false;
$showerror = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "_partials/db_connect.php";

    $oldpass = $_POST['oldpass'];
    $npass = $_POST['uppass'];
    $ncpass = $_POST['cuppass'];

    $chk_que = "SELECT `upass` FROM `stud` where `upass` = '$oldpass'";

    $result = mysqli_query($conn, $chk_que);
    $num_row = mysqli_num_rows($result);

    if ($num_row == 1) {
        echo "Old Password is not Exist!";
    } else {
        if ($npass == $ncpass) {
            $update_que = "UPDATE `stud` SET `upass` = '$ncpass' WHERE `upass` = '$oldpass'";

            $result = mysqli_query($conn, $update_que);
            if ($result) {
                $showalert = "You've successfully changed your password.";
            }

            if (isset($_POST['uppass'])) {
                header('Location:stud_signin.php');
            }
        } else {
            $showerror = "New Password & Confirm New Password Doesn't match.";
        }
        $showerror = "Password can't change! Please try again!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Passowrd</title>

    <link rel="stylesheet" href="update_pass_style.css">
</head>

<body>
    <div class="fullmain">
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

        <img src="_gif/Reset_password.png" alt="Reset Password" class="imguppass">
        <form method="post">
            <div class="main">

                <div class="form-group">
                    <h1>Reset Your Password</h1>

                    <input type="password" required name="oldpass" class="form-control" id="oldpass" placeholder="Enter Your Old Password">
                </div>

                <img src="_gif/eye_close_icon.png" id="eci1">

                <script>
                    let eci2 = document.getElementById("eci1");

                    let oldpass = document.getElementById("oldpass");

                    eci2.onclick = function() {
                        if (oldpass.type == "password") {
                            oldpass.type = "text";
                            eci2.src = "_gif/eye_open_icon.png";
                        } else {
                            oldpass.type = "password";
                            eci2.src = "_gif/eye_close_icon.png";
                        }
                    }
                </script>

                <div class="form-group">

                    <input type="password" required name="uppass" class="form-control" id="uppass" placeholder="Enter Your New Password">
                </div>

                <img src="_gif/eye_close_icon.png" id="eci2">

                <script>
                    let eci2 = document.getElementById("eci1");

                    let passw = document.getElementById("uppass");

                    eci2.onclick = function() {
                        if (uppass.type == "password") {
                            uppass.type = "text";
                            eci2.src = "_gif/eye_open_icon.png";
                        } else {
                            uppass.type = "password";
                            eci2.src = "_gif/eye_close_icon.png";
                        }
                    }
                </script>

                <div class="form-group">

                    <input type="password" required name="cuppass" class="form-control" id="cuppass" placeholder="Confirm Your New Password">

                </div>

                <img src="_gif/eye_close_icon.png" id="eci3">

                <script>
                    let eci3 = document.getElementById("eci3");

                    let repassw = document.getElementById("cuppass");

                    eci3.onclick = function() {
                        if (cuppass.type == "password") {
                            cuppass.type = "text";
                            eci3.src = "_gif/eye_open_icon.png";
                        } else {
                            cuppass.type = "password";
                            eci3.src = "_gif/eye_close_icon.png";
                        }
                    }
                </script>

                <button type="submit" class="btn" name="uppass">Change Password</button>
            </div>
        </form>
    </div>
</body>

</html>