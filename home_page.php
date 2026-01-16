<?php
$showalert = false;
$showerror = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "_partials/db_connect.php";

    $name = $_POST['fbn'];
    $mail = $_POST['fbe'];
    $feedback = $_POST['fbt'];

    if (isset($_POST['fbtn'])) {
        $ins_que = "INSERT INTO `feedback`(`name`, `email`, `feedback`) VALUES ('$name','$mail','$feedback')";

        $result = mysqli_query($conn, $ins_que);
        if ($result) {
            $showalert = "Thank You so much for your feedback!!";
        } else {
            $showerror = "Feedback not submitted please try again!!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home page</title>
    <link rel="stylesheet" href="home_style.css">
    <link href="navbar.css" rel="stylesheet">
</head>

<body>
    <?php
    if ($showalert) {
        echo 'Thank You so much for your feedback!!';
    }

    if ($showerror) {
        echo 'Feedback not submitted please try again!!';
    }
    ?>
    <div class="main" id="main">
        <nav id="navbar">
            <div class="menu" id="menu">
                <div class="logo" id="logo">
                    <a href="home_page.php">
                        <img src="_gif/college_cruiser_logo_removebg.png" alt="logo">
                    </a>
                </div>
                <ul id="link">
                    <li><a href="home_page.php">Home</a></li>
                    <!-- <li><a href="stud_signin.php">Sign in</a></li> -->
                    <li><a href="stud_signup.php">Sign up</a></li>
                    <!-- <li><a href="Admin_login.php">Admin Login</a></li> -->
                    <li><a href="About_us.php">About Us</a></li>
                    
                </ul>
            </div>
        </nav>
        <form method="post">
            <div class="img" id="img">
                <div class="center">
                    <div class="sub_title">Welcome To School & College Bus Management</div>
                </div>
            </div>

            <div class="content">

                <div class="cont">
                    <marquee behavior="scroll" direction="left" scrollamount="20">DRVRGCET AT A GLANCE</marquee>
                    <img src="_gif/Bus_stop.jpg" class="busstop" alt="bus stop">
                    <h3>
                        <p class="para1"> "Imagination is more important than knowledge." - Albert Einstein.
                            Dr. V. R. Godhania College of Engineering and Technology (DRVRGCET) was set up as a self-financed institution in the year 2017, under the aegis of Shri Maldevji Odedra Smarak Trust to cater the demands of technical education in saurashtra region. We are committed to nurture the new order of society based on the principles of 3R's: "Rise, Raise and Race". i.e., Rise higher and higher in knowledge and skills with right understanding, Raise thy neighbor and Race to the limits of imagination.The institute is approved by All India Council for Technical Education (A.I.C.T.E.) and affiliated to Gujarat Technological University (G.T.U.), Ahmedabad.
                            DRVRGCET is an Institute which offers undergraduate programs in Bachelor of Technology (B.E.). At DRVRGCET, teaching and research goes hand in hand with focus on emerging technologies and providing high-tech solutions to the industrial problems. We integrate science, technology and society with holistic prospective in cross cultural environment and shape students to be innovative, enterpreneurial, supportive, assured and capable enough to meet global standards. To achieve all this, we have well defined vision and mission and the progress is regularly monitored with the standards laid down in quality policy. </p>
                    </h3>
                    <div class="btn">
                        <a href="https://drvrgit.ac.in/index.php" id="LM" class="read-more-btn">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <div class="fimg">
                <img src="_gif/Feedback_image.jpg" class="fdb" alt="feedback">
                <div class="feedback">
                    <h4>Feedback</h4>
                    <input type="text" id="fb" name="fbn" placeholder="Enter Your Name">

                    <input type="text" id="fb" name="fbe" placeholder="Enter Your E-mail">

                    <textarea id="fbt" name="fbt" rows="10" cols="25" placeholder="Enter Your Feedback Here"></textarea>
                    <div class="fbtn">
                        <button type="submit" id="subbtn" name="fbtn">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
    </div>
    </form>
</body>

</html>