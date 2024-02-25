<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: loginStaff.php");
    // exit();
}
$session_id = $_SESSION['username'];
$session_id = $_SESSION["staffid"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/addgym.css">

    <title>Urban Fitness</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Urban Fitness</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="index.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="managemb.php">
                    <i class='bx bxs-group'></i>
                    <span class="text">Manage Members</span>
                </a>
                </div>
            </li>
            <li class="active">
                <a href="managegym.php">
                    <i class='bx bxs-trophy'></i>
                    <span class="text">Gym Equipment</span>
                </a>
            </li>
            <li>
                <a href="attendance.php">
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">Attendance</span>
                </a>
            </li>

            <li>
                <a href="statusmb.php">
                    <i class='bx bxs-analyse'></i>
                    <span class="text">Member Status</span>
                </a>
            </li>

            <li>
                <a href="paymentmb.php">
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">Payments</span>
                </a>
            </li>

        </ul>
        <ul class="side-menu">
            <!-- <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li> -->
            <li>

                <a href="../logout.php" class="logout">
                    <i class='bx bxs-arrow-to-left'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>

    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a class="nav-link">Welcome User!</a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Add equipment details</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="managegym.php">Gym Equipment</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="addgym.php">Add equipment details</a>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- css -->

            <div id="content">
                <div id="content-header">
                    <h1>Equipment Entry Form</h1>
                </div>
                <form role="form" action="index.php" method="POST">
                    <?php

                    if (isset($_POST['ename'])) {
                        $name = $_POST["ename"];
                        $amount = $_POST["amount"];
                        $vendor = $_POST["vendor"];
                        $description = $_POST["description"];
                        $date = $_POST["date"];
                        $quantity = $_POST["quantity"];
                        $address = $_POST["address"];
                        $contact = $_POST["contact"];

                        $totalamount = $amount * $quantity;

                        include 'dbcon.php';
                        $qry = "insert into equipment(name,description,amount,vendor,address,contact,date,quantity) values ('$name','$description','$totalamount','$vendor','$address','$contact','$date','$quantity')";
                        $result = mysqli_query($conn, $qry);

                        if (!$result) {
                            echo '<script>alert("Error occured while entering your details !")</script>';
                            echo '<script>window.location.href = "addgym.php";</script>';
                        } else {
                            echo '<script>alert("Equipment record has been added! !")</script>';
                            echo '<script>window.location.href = "managegym.php";</script>';
                        }
                    } else {
                        echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
                    }


                    ?>

                </form>
            </div>
            </div>
            </div>
            </div>


        </main>
    </section>
</body>

</html>