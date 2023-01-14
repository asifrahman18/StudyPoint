<?php
session_start();
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Recover</title>

    <style>
    @import url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background-image: url("img/reg-background.jpg");
        background-color: linear-gradient(120deg, #feffff, #70d6ff);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        margin: 0;
        padding: 0;
        height: 100vh;
        overflow: hidden;
    }

    .center {
        display: block;

        transition: transform 0.2s;
        width: 400px;
        border: 1px solid rgb(255, 255, 255);

        margin: auto;
        margin-left: auto;
        margin-right: auto;
        margin-top: 100px;
        padding: 20px;


        background-color: linear-gradient(120deg, #feffff, #70d6ff);
        opacity: 0.8;
        border-radius: 10px;
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.05);


        background: rgba(240, 243, 67, 0.3);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10.2px);
        -webkit-backdrop-filter: blur(10.2px);

    }

    .center h1 {
        text-align: center;
        padding: 20px 0;
        border-bottom: 1px solid rgb(0, 0, 0);
    }

    .center form {
        padding: 0 40px;
        box-sizing: border-box;
    }

    .center:hover {
        opacity: 1;
        border: 1px solid rgb(0, 0, 0);
        transition: 0.5s;
        box-shadow: 0 4px 30px rgba(227, 230, 44, 0.651);

    }

    form .txt_field {
        position: relative;
        border-bottom: 2px solid #000000;
        margin: 30px 0;
    }

    .txt_field input {
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
    }

    .txt_field label {
        position: absolute;
        top: 50%;
        left: 5px;
        color: #000000;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: 0.5s;
    }

    .txt_field span::before {
        content: "";
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        background: #2691d9;
        transition: 0.5s;
    }

    .txt_field2 {
        display: flex;
        flex-direction: row;
    }

    .txt_field input:focus~label,
    .txt_field input:valid~label {
        top: -5px;
        color: #4126d9;
    }

    .txt_field input:focus~span::before,
    .txt_field input:valid~span::before {
        width: 100%;
    }

    .pass {
        margin: -5px 0 20px 5px;
        color: #a6a6a6;
        cursor: pointer;
    }

    .pass:hover {
        text-decoration: underline;
    }


    .home_link {
        margin: 10px 0;
        text-align: center;
        font-size: 16px;
        color: #000000;
    }

    .home_link a {
        color: #0099ff;
        text-decoration: none;
    }

    .admin_link a {
        color: #0099ff;
        text-decoration: none;
    }

    .admin_link {
        margin: 30px 0;
        text-align: center;
        font-size: 16px;
        color: #000000;
    }

    #llnk:hover {
        color: white;
        background-color: #00aeff85;
        transition: 0.5s
    }

    #lnk {
        color: #0044ff;
        text-decoration: none;
        padding: 5px;
    }

    #lnk:hover {
        color: white;
        background-color: #0044ff85;
        transition: 0.5s
    }

    .home_link a:hover {
        text-decoration: underline;
    }



    input[type="submit"] {
        width: 100%;
        height: 50px;
        border: 1px solid;
        background: #2691d9;
        border-radius: 25px;
        font-size: 18px;
        color: #e9f4fb;
        font-weight: 700;
        cursor: pointer;
        outline: none;
    }

    input[type="submit"]:hover {
        border-color: #000000;
        background: #1b7cbd;
        transition: 0.5s;
    }
    </style>
</head>

<body>
    <?php

                $rec = $_GET['value'];

                if ($rec == 'uid')

                {
                    ?>
    <div class="center">
        <h1>Login</h1>
        <form name="f2" action="recover2.php" method="POST">
            <div class="txt_field">
                <input type="email" name="sid" required />
                <span></span>
                <label>Enter Email</label>
            </div>
            <div class="txt_field">
                <input type="text" name="user" required />
                <span></span>
                <label>Enter New User ID</label>
            </div>
            <input type="submit" name="submit" value="Recover" />
        </form>
    </div>
    <?php
        $_SESSION['rec']= 'uid';
            }

            if ($rec == 'pass')

                {

                    ?>
    <div class="center">
        <h1>Login</h1>
        <form name="f2" action="recover2.php" method="POST">
            <div class="txt_field">
                <input type="email" name="sid" required />
                <span></span>
                <label>Enter Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="user" required />
                <span></span>
                <label>Enter New Password</label>
            </div>
            <input type="submit" name="submit" value="Recover" />
        </form>
    </div>
    <?php

        $_SESSION['rec']= 'pass';

            }



        
    ?>
</body>

</html>