<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Template Mo" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <title>Sun Services Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/decor_project.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
</head>

<body>
</body>

<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->

                    <!-- <img src="assets/images/logo4.png" class="img-fluid" style="height: 70px; width: 70px; text-align: left;"></img> -->

                    <a href="index.html" class="logo">
                        Sun Services<br />
                        <h4 class="slogen">One Stop Solar Solution</h4>
                    </a>

                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="user_register.php" >User Ragistration</a>
                        </li>
                        <li>
                            <a href="service.php">Service Ragistration</a>
                        </li>
                        <li><a href="service.php" class="active">Enquiry</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="add_service.php">Add Service</a></li>
                        <li>
                            <a href="logout.php" name="logout">Logout</a>
                        </li>
                    </ul>
                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col">
                <form enctype="multipart/form-data" method="POST">
                    <div class="row" style="padding-top: 50px">
                        <div class="col">
                            <h3>Add New Services</h3>
                        </div>
                    </div>
                    <div class=row>
                        <div class="column" style="padding:10px">
                            Name: <input type="text" name="name" value=''>
                        </div>
                        <div class="column" style="padding:10px">
                            Email: <input type="text" name="email" value=''>
                        </div>
                        <div class="column" style="padding:10px">
                            Number: <input type="text" name="number" value=''>
                        </div>
                        <div class="column" style="padding:10px">
                            Quiry: <input type="text" name="quiry" value=''>
                        </div>
                        <div class="column" style="padding:10px">
                            <button type="submit" name="uploadfile">insert</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>

</html>

<?php
if (isset($_POST['uploadfile'])) {

    $db = mysqli_connect("localhost", "root", "", "sun");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $quiry = $_POST['quiry'];


    $sql = "INSERT INTO enquiry (name,email,number,problem) VALUES ('$name','$number','$email','$quiry')";

    $qy = mysqli_query($db, $sql);

    $msg = ($qy == TRUE) ? "data added successfully" : "Failed to add data";
}
?>