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
    <title>Update</title>

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

        margin: auto;
        margin-left: auto;
        margin-right: auto;
        margin-top: 80px;
        padding: 1px;

        opacity: 0.85;
        border-radius: 10px;
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.05);


        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10.2px);
        -webkit-backdrop-filter: blur(10.2px);


        --c: #ff0000;
        /* the border color */
        --b: 3px;
        /* the border thickness*/
        --g: 1px;
        /* the gap on hover */

        padding: calc(var(--g) + var(--b));
        --_g: #0000 25%, var(--c) 0;
        background:
            conic-gradient(from 180deg at top var(--b) right var(--b), var(--_g)) var(--_i, 200%) 0 /200% var(--_i, var(--b)) no-repeat,
            conic-gradient(at bottom var(--b) left var(--b), var(--_g)) 0 var(--_i, 200%)/var(--_i, var(--b)) 200% no-repeat;
        transition: .3s, background-position .3s .3s;
        cursor: pointer;
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
        /* border: 1px solid rgb(0, 0, 0);
		transition: 0.5s; */

        --_i: 100%;
        transition: .3s, background-size .3s .3s;

        box-shadow: 0 4px 30px rgba(255, 0, 0, 0.651);
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


    .signup_link {
        margin: 30px 0;
        text-align: center;
        font-size: 16px;
        color: #ffffff;
    }

    .signup_link a {
        color: #2691d9;
        text-decoration: none;
    }

    .signup_link a:hover {
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
            if(isset($_POST['submit']))
            {

                if ($_SESSION['rec'] == 'uid')
                {
                    $eml= $_POST['sid'];
                    $uid= $_POST['user'];

                    $sql = "select *from student where Mail = '$eml'";

                    $result = mysqli_query($conn , $sql);
                    $count = mysqli_num_rows($result);
                    $row = $result->fetch_assoc();
                    if($count==1)
                    {
                        $sql2 = "UPDATE student SET S_ID = $uid WHERE Mail = '$eml'";
                        $result2 = mysqli_query($conn , $sql2);
                        echo "<script>window.location.href='login.php'</script>";
                    }
                    else
                    {
                        echo "<h1><center></center>Invalid username.</h1>";
                    }
                }

                else if ($_SESSION['rec'] == 'pass')
                {
                    $eml= $_POST['sid'];
                    $uid= $_POST['user'];

                    $sql = "select *from student where Mail = '$eml'";

                    $result = mysqli_query($conn , $sql);
                    $count = mysqli_num_rows($result);
                    $row = $result->fetch_assoc();
                    if($count==1)
                    {
                        $sql3 = "UPDATE student SET Pass = '$uid' WHERE Mail = '$eml'";
                        $result3 = mysqli_query($conn , $sql3);
                        echo "<script>window.location.href='login.php'</script>";
                    }
                    else
                    {
                        echo "<h1><center></center>Invalid username.</h1>";
                    }
                }
            }

    ?>


</body>

</html>