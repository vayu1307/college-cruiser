<?php
$showalert = false;
$showerror = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "_partials/db_connect.php";

    $name = $_POST['name'];
    $studid = $_POST['stid'];
    $busstop = $_POST['busstop'];
    $busnum = $_POST['busnum'];
    $busseat = $_POST['seatnum'];

    $chk_que = "SELECT `seat` FROM `bookingdata` where `seat` = '$busseat'";
    $chkresult = mysqli_query($conn, $chk_que);
    $num_row = mysqli_num_rows($chkresult);

    if ($num_row == 1) {
        $showerror = "Seat has been already booked. Try another one!!";
    } else {
        $ins_que = "INSERT INTO `bookingdata`(`name`,`studid`,`busstop`,`busnum`,`seat`) VALUES ('$name','$studid','$busstop','$busnum','$busseat')";

        $result = mysqli_query($conn, $ins_que);
        if ($result) {
            $showalert = "Your seat has been successfully booked.";

            // if (isset($_POST['bookseat'])) {
            //     // header('Location:booked_seat.php');
            // }
        } else {
            $showerror = "Your seat has not been successfully booked.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <link href="booking_style.css" rel="stylesheet">
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
                    <!-- <li><a href="stud_signin.php">Sign in</a></li> -->
                    <li><a href="About_us.php">About Us</a></li>
                </ul>
            </div>
        </nav>

        <?php
        if ($showalert) {
            echo '<strong>Success!</strong>Seat Book Successfull.';
        }

        if ($showerror) {
            echo '<strong>Error!</strong> ' . $showerror;
        }
        ?>

        <img src="_gif/Booking_page_img.png" alt="bus" class="imgbooking">
        <form method="post" action="booking.php" class="form">
            <div class="main">
                <div class="form-group">
                    <h1>Book Your Seat Here</h1>

                    <input type="name" required name="name" class="form-control" id="name" placeholder="Enter Your Name">
                </div>

                <div class="form-group">

                    <input type="stid" required name="stid" class="form-control" id="stid" maxlength="9" placeholder="Enter Student id No.">

                </div>

                <div class="form-group">
                    <select required name="busstop" class="drop-down" id="busstop">
                        <option>-----------Choose Your Bus Stop-----------</option>
                        <option>Old campus</option>
                        <option>S. T. Bus stand</option>
                        <option>Kamlabag</option>
                        <option>Hotel kaveri</option>
                        <option>Narsang tekri</option>
                        <option>Mer samaj</option>
                        <option>Gayatri heights</option>
                    </select>
                </div>

                <div class="form-group">
                    <select required name="busnum" class="drop-down" id="busnum">
                        <option>------------Choose Bus Number-----------</option>
                        <option>1</option>
                    </select>
                </div>

                <div class='form-group'>
                    <select required name='seatnum' class='drop-down' id='seatnum'>
                        <option>------------Choose Seat Number----------</option>
                        <option>1LW</option>
                        <option>2R</option>
                        <option>3RW</option>
                        <option>4LW</option>
                        <option>5R</option>
                        <option>6RW</option>
                        <option>7LW</option>
                        <option>8R</option>
                        <option>9RW</option>
                        <option>10LW</option>
                        <option>11R</option>
                        <option>12RW</option>
                        <option>13LW</option>
                        <option>14R</option>
                        <option>15RW</option>
                        <option>16LW</option>
                        <option>17R</option>
                        <option>18RW</option>
                        <option>19LW</option>
                        <option>20R</option>
                        <option>21RW</option>
                        <option>22LW</option>
                        <option>23R</option>
                        <option>24RW</option>
                    </select>
                </div>
                <small>R : Right side &nbsp; L : Left side &nbsp; W : Window seat</small>
                <button type="submit" class="btn" name="bookseat">Book Seat</button>
            </div>
        </form>
    </div>
</body>
</html>