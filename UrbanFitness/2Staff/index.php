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
    <link rel="stylesheet" href="css\style.css">

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
            <li class="active">
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
            <li>
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
            <!-- <li>
				<a href="#">
					<i class='bx bx-trending-up' ></i>
					<span class="text">Member progress</span>
				</a>
			</li> -->

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

            <!-- <li>
				<a href="#">
					<i class='bx bxs-bell' ></i>
					<span class="text">Announcement</span>
				</a>
			</li>

			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Staff Management</span>
				</a>
			</li>

			<li>
				<a href="#">
					<i class='bx bxs-report' ></i>
					<span class="text">Reports</span>
				</a>
			</li> -->
        </ul>
        <ul class="side-menu">
            <!-- <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li> -->
            <li>
                <a href="logOut.php" class="logout">
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
            <a class="nav-link">Welcome!</a>
        </nav>
        <!-- NAVBAR -->
        <section id="content">

            <!-- MAIN -->
            <main>
                <div class="head-title">
                    <div class="left">
                        <h1>Dashboard</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li><i class='bx bx-chevron-right'></i></li>
                            <li>
                                <a class="active" href="index.php">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="box-info">
                    <li>
                        <i class='bx bxs-calendar-check'></i>
                        <span class="text">
                            <!-- <h3>1020</h3> -->
                            <p>Active Members</p>
                            <h3><?php include '\xampp\htdocs\Final Project\Final Project\UrbanFitness\1Admin/ActiveMemCount.php' ?>
                            </h3>
                        </span>
                    </li>
                    <li>
                        <i class='bx bxs-group'></i>
                        <span class="text">
                            <p>Active trainers</p>
                            <h3><?php include '\xampp\htdocs\Final Project\Final Project\UrbanFitness\1Admin/countTrainers.php' ?>
                            </h3>
                        </span>
                    </li>
                    <li>
                        <i class='bx bxs-trophy'></i>
                        <span class="text">
                            <p>Gym equipment</p>
                            <h3><?php include '\xampp\htdocs\Final Project\Final Project\UrbanFitness\1Admin/countEquipment.php' ?>
                            </h3>
                        </span>
                    </li>

                </ul>


                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Announcements</h3>
                            <!-- <i class='bx bx-search'></i>
                            <i class='bx bx-filter'></i> -->



                        </div>

                        <table>
                            <li>

                                <?php

                                include "dbcon.php";
                                $qry = "SELECT * FROM announcements";
                                $result = mysqli_query($conn, $qry);

                                while ($row = mysqli_fetch_array($result)) {
                                    // echo "<div class='user-thumb'> <img width='70' height='40' alt='User' src='../img/demo/av1.jpg'> </div>";
                                    echo "<div class='article-post'>";
                                    echo "<br>";
                                    echo "<span class='user-info'> By: System Administrator &emsp;|&emsp; Date: " . $row['date'] . " </span>";
                                    echo "<h3>" . $row['message'] . " </h3>";
                                }

                                echo "</div>";
                                echo "</li>";
                                ?>

                                <!-- <a href="announcementManage.php"><button
                        class="btn btn-warning btn-mini">View All</button></a> -->
                            </li>
                        </table>

                    </div>
                </div>
            </main>
            <!-- MAIN -->
        </section>
        <!-- CONTENT -->


        <script src="js/script.js"></script>
</body>

</html>