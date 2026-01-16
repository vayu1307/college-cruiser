<?php
$showalert = false;
$showerror = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "_partials/db_connect.php";

    // include "booking.php";

    // $query = "SELECT `name`, `studid`, `busstop`, `busnum`, `seat` FROM `bookingdata` WHERE `seat` = '{$_POST['stid']}'";

    // $result = mysqli_query($conn, $query) or die("Query Faild.");

    // $row = mysqli_fetch_assoc($result);

    // print_r($row);

    // echo $row['name'] . " " . $row['studid'];


    // require('vendor/autoload.php');
    // $res = mysqli_query($conn, "SELECT `name`, `studid`, `busstop`, `busnum`, `seat` FROM `bookingdata` WHERE `seat` = '{$_POST['stid']}'");
    // if (mysqli_num_rows($res) > 0) {
    //     $html . '<table>';
    //     $html .= '<tr><td>name</td> <td>studid</td></tr>';
    //     while ($row = mysqli_fetch_assoc($res)) {
    //         $html .= '<tr><td>' . $row['name'] . '</td><td>' . $row['studid'] . '</td><td>';
    //     }
    //     $html .= '</table>';
    // } else {
    //     $html = "Data not found.";
    // }
    // $mpdf = new \Mpdf\Mpdf();
    // $mpdf->WriteHTML($html);
    // $file=time().'.pdf';
    // $mpdf->output($file,'D');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked Seat</title>

    <link rel="stylesheet" href="booked_seat_style.css">
</head>

<body>
    <nav id="navbar">
        <div class="menu" id="menu">
            <div class="logo" id="logo">
                <a href="home_page.php">
                    <img src="_gif/college_cruiser_logo_removebg.png" alt="logo">
                </a>
            </div>
            <ul id="link">
                <li><a href="home_page.php">Home</a></li>
                <li><a href="stud_signin.php">Sign in</a></li>
                <li><a href="stud_signup.php">Sign up</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="About_us.php">About Us</a></li>
            </ul>
        </div>
    </nav>

    <form method="post">

    </form>
</body>

</html>