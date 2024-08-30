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

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <a href="index.html" class="logo">
                            Sun Services<br />
                            <h4 class="slogen">One Stop Solar Solution</h4>
                        </a>

                        <ul class="nav">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="user_register.php" >User Ragistration</a>
                            </li>
                            <li>
                                <a href="service.php" class="active">Service Ragistration</a>
                            </li>
                            <li><a href="service.php">Enquiry</a></li>
                            <li><a href="feedback.php">Feedback</a></li>
                            <li><a href="add_service.php">Add Service</a></li>
                            <li>
                                <a href="logout.php" name="logout">Logout</a>
                            </li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

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
                        <?php
                        $link = mysqli_connect("localhost", "root", "", "sun");
                        $no = $_GET['id'];
                        $str = "select * from service_registered where id='$no'";
                        $result = mysqli_query($link, $str);
                        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) { ?>
                            <div class=row>
                                <div class="column" style="padding:10px">
                                    Id: <input type="text" name="id" value='<?php echo $row[0] ?>'>
                                </div>
                                <div class="column" style="padding:10px">
                                    Service: <input type="text" name="service" value='<?php echo $row[1] ?>'>
                                </div>
                                <div class="column" style="padding:10px">
                                    Company: <input type="text" name="company" value='<?php echo $row[2] ?>'>
                                </div>
                                <div class="column" style="padding:10px">
                                    Problem: <input type="text" name="problem" value='<?php echo $row[3] ?>'>
                                </div>
                                <div class="column" style="padding:10px">
                                    <button type="submit" name="update">update</button>
                                </div>
                            <?php } ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

<?php
$msg = "";
if (isset($_POST['update'])) {

    $db = mysqli_connect("localhost", "root", "", "sun");

    $id = $_POST['id'];
    $service = $_POST['service'];
    $company = $_POST['company'];
    $problem = $_POST['problem'];

    $sql = "UPDATE users SET services='$service' , company='$company' , problem='$problem'  WHERE id='$id'";

    $qy = mysqli_query($db, $sql);

    $msg = ($qy == TRUE) ? "data updated successfully" : "Failed to upload image";
}

?>