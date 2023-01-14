<?php
session_start();
include('connect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- font awesome cdn -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />

    <!-- custom css file link up -->
    <link rel="stylesheet" type="text/css" href="style2.css" />

    <style>
    .headr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
        border: 1px solid black;
    }
    </style>

    <title>Confirmation</title>
</head>

<body>
    <?php

                  if(isset($_POST['bking'])){

                    $username = $_SESSION['userID'];
                    $cours = $_POST['bid'];
                    
                    $sql = "SELECT * FROM `course` WHERE C_ID = $cours";
                    
                    $result = mysqli_query($conn , $sql);
                    $count = mysqli_num_rows($result);
                    $row = $result->fetch_assoc();
                    if($count==1)
                    {


                    $sql2 = "INSERT INTO enrolls (S_ID, C_ID, Status) VALUES ($username, $cours, 'Enrolled')";
                    $result2 = mysqli_query($conn , $sql2);
                    
                    echo "<script>window.location.href='home.php?enroll_confirm'</script>";
                    }
                    else
                    {
                    echo "No";
                    }
                    
                    
                    }
  

          ?>
</body>

</html>