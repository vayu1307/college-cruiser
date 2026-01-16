<?php
$showalert = false;
$showerror = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "_partials/db_connect.php";

    // $amail = $_POST['amail'];
    // $apass = $_POST['apass'];

    // $query = "SELECT * FROM `admin` Where `amail` = $amail";

    // $result = mysqli_query($conn,$query);
    // $num_row = mysqli_num_rows($result);
    // if ($num_row == 1) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         if ($row['apass'] == $apass) {

    //             $_SESSION['alogin'] = true;
    //             $_SESSION['Adminmail'] = $row['amail'];
    //             $_SESSION['Apass'] = $apass;

    //             if (isset($_POST['alogin'])) {
    //                 header('Location:admin_side.php');
    //             }
    //         }
    //     }
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>

    <link href="Admin_login_style.css" rel="stylesheet">
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
                <!-- <li><a href="#">Booking</a></li> -->
            </ul>
        </div>
    </nav>

    <!-- <div class="adminlogin">
        <h3>Username</h3>
        <input type="text" placeholder="Enter username" required name="uname" id="uname">

        <h3>Password</h3>
        <input type="password" placeholder="Enter password" required name="upass" id="upass"> -->

    <br><br>
    <div class="container">
        <h1>Login</h1>
        <form method="post">
            <div class="form-control">
                <h3>E - mail</h3>
                <input type="text" name="amail" id="amail" required>
            </div>

            <div class="form-control">
                <h3>Password</h3>
                <input type="password" id="apass" name="apass" required>

                <img src="_gif/eye_close_icon.png" id="eci">
            </div>


            <button class="btn" name="alogin">Login</button>
            <p class="text">Don't have an account ?
                <a href="Register"></a>
            </p>
        </form>
    </div>

    <script>
        let eci = document.getElementById("eci");

        let apass = document.getElementById("apass");

        eci.onclick = function() {
            if (apass.type == "password") {
                apass.type = "text";
                eci.src = "_gif/eye_open_icon.png";
            } else {
                apass.type = "password";
                eci.src = "_gif/eye_close_icon.png";
            }
        }
    </script>
    </div>
</body>

</html>