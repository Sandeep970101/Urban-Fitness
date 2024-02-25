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
                <div class="contact">

                    <ul class="list">
                        <li>
                            <a href="1Admin\loginAdmin.php">
                                <button class="submit1">Admin</button>
                            </a>
                        </li>
                        <li>
                            <a href="2Staff\loginStaff.php">
                                <button class="submit1">Staff</button>
                            </a>
                        </li>
                        <a href="3Member\loginMember.php">
                            <button class="submit1">Member</button>
                        </a>
                        <li>

                        </li>
                    </ul>

                </div>
            </div>
            <div class="right">
                <div class="right-text">
                    <h2>Urban Fitness</h2>
                    <div class="right-inductor"><img src="logo1.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<style>
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

.left .contact {
    display: flex;
    align-items: center;
    justify-content: center;
    align-self: center;
    height: 100%;
    width: 73%;
    margin: auto;
}

.left {
    background: linear-gradient(-45deg, #dcd7e0, #fff);
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

.right .right-inductor {
    position: absolute;
    width: 70px;
    height: 7px;
    background: #fff0;
    left: 50%;
    bottom: 70px;
    transform: translate(-50%, 0%);
}

.submit1 {
    border: none;
    padding: 15px 70px;
    border-radius: 8px;
    display: block;
    width: 260px;
    margin: auto;
    margin-top: 80px;
    margin-bottom: 60px;
    background: #1a1a47;
    color: #fff;
    font-weight: bold;
    font-size: large;
    -webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
    -moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
    box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
}

.list {
    list-style: none;
}
</style>