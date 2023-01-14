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

    .zigzag {
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;

        margin-left: auto;
        margin-right: auto;
        border: 1px solid black;
    }

    .zigzag tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .zigzag th,
    .zigzag td {
        padding: 12px 15px;
        border: 1px solid rgb(255, 255, 255);
    }

    .zigzag td {
        background-color: rgb(9, 54, 232);
        color: #ffffff;
    }
    </style>

    <title>Teachers</title>
</head>

<body>
    <header>
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">STUDY POINT</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="home.php">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="teachers.php">Teachers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="courses.php">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="s-out" href="index.php">Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <table class="zigzag" id="tabl">
                <thead>
                    <tr>
                        <th class="headr"><b>Teacher ID</b></th>
                        <th class="headr"><b>Teacher Name</b></th>
                        <th class="headr"><b>Subject</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
 
                      $query = "SELECT T_ID, Name, Specialization FROM teacher WHERE 1";
                      $data = mysqli_query($conn,$query);
                      $row = mysqli_fetch_array($data, MYSQLI_ASSOC); 
                      $total = mysqli_num_rows($data);
      
      
                      $result = $conn->query($query); 
                      if ($result->num_rows > 0) 
                      {
                      while($row = $result->fetch_assoc()) { ?>

                    <tr>
                        <td><?php echo  $row["T_ID"]; ?></td>
                        <td><?php echo  $row["Name"]; ?></td>
                        <td><?php echo  $row["Specialization"]; ?></td>
                    </tr>

                    <?php
                          
                      }
                      } else {
                      echo "No Teacher available";
                      }
      
                      exit();
  
  
          ?>
                </tbody>
            </table>
        </div>
    </header>
</body>

</html>