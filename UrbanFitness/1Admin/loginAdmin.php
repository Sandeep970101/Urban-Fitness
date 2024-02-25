<?php
include('dbcon.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Urban Fitness</title>
</head>


<body>
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="top_link"><a href="../index.php"><img
                            src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download"
                            alt="">Return home</a></div>
                <div class="contact">
                    <form action="loginAdminFunction.php" method="POST">
                        <h3>Login - Admin</h3>
                        <input type="text" name="username" placeholder="Username" id="txtUser" required>
                        <input type="password" name="password" placeholder="Password" id="txtPassword" required>
                        <button class="submit" type="submit" title="Log In" name="btnLogin" onclick="getInfo()"
                            type="submit">Sign in</button>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="right-text">
                    <h2>Urban Fitness</h2>
                    <h5></h5>
                </div>
                <div class="right-inductor"><img src="logo1.png" alt=""></div>
            </div>
        </div>
    </section>
</body>

</html>



<body>





    <script>
    var objPeople = [{
            username: "admin",
            password: "1234"
        }, {
            username: "admin2",
            password: "1234"
        }, {
            username: "admin3",
            password: "1234"
        }

    ]

    // function login(url) {
    //     window.open("index.php");
    // }

    // function getInfo() {
    //     var username = document.getElementById('txtUser').value
    //     var password = document.getElementById('txtPassword').value

    //     for (var i = 0; i < objPeople.length; i++) {

    //         if (username == objPeople[i].username && password == objPeople[i].password) {
    //             console.log(username + " is logged in!!!")
    //             login();
    //             return
    //         }
    //     }
    //     // console.log("incorrect username or password")
    //     alert("incorrect username or password !")

    // }
    </script>
</body>


<style>
img {
    width: 100%;
}

.login {
    height: 1000px;
    width: 100%;
    background: #1a1a47;
    position: relative;
}

.login_box {
    width: 1050px;
    height: 600px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    border-radius: 10px;
    box-shadow: 1px 4px 22px -8px #0004;
    display: flex;
    overflow: hidden;
}

.login_box .left {
    width: 41%;
    height: 100%;
    padding: 25px 25px;

}

.login_box .right {
    width: 59%;
    height: 100%
}

.left .top_link a {
    color: #452A5A;
    font-weight: 400;
}

.left .top_link {
    height: 20px
}

.left .contact {
    display: flex;
    align-items: center;
    justify-content: center;
    align-self: center;
    height: 100%;
    width: 73%;
    margin: auto;
}

.left h3 {
    text-align: center;
    margin-bottom: 40px;
}

.left input {
    border: none;
    width: 80%;
    margin: 15px 0px;
    border-bottom: 1px solid #4f30677d;
    padding: 7px 9px;
    width: 100%;
    overflow: hidden;
    background: transparent;
    font-weight: 600;
    font-size: 14px;
}

.left {
    background: linear-gradient(-45deg, #dcd7e0, #fff);
}

.submit {
    border: none;
    padding: 15px 70px;
    border-radius: 8px;
    display: block;
    margin: auto;
    margin-top: 120px;
    background: #1a1a47;
    color: #fff;
    font-weight: bold;
    -webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
    -moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
    box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
}



.right {
    background: linear-gradient(212.38deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.71) 100%), url('img/logo1.png');
    color: #fff;
    position: relative;
}

.right .right-text {
    height: 100%;
    position: relative;
    transform: translate(0%, 45%);
}

.right-text h2 {
    display: block;
    width: 100%;
    text-align: center;
    font-size: 50px;
    font-weight: 500;
}

.right-text h5 {
    display: block;
    width: 100%;
    text-align: center;
    font-size: 19px;
    font-weight: 400;
}

.right .right-inductor {
    position: absolute;
    width: 70px;
    height: 7px;
    background: #fff0;
    left: 50%;
    bottom: 70px;
    transform: translate(-50%, 0%);
}

.top_link img {
    width: 28px;
    padding-right: 7px;
    margin-top: -3px;
}
</style>