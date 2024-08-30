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
                            <a href="user_register.php" class="active">User Ragistration</a>
                        </li>
                        <li>
                            <a href="service.php">Service Ragistration</a>
                        </li>
                        <li><a href="service.php">Enquiry</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="Service.php">Service</a></li>
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
                    <?php
                    $link = mysqli_connect("localhost", "root", "", "sun");
                    $no = $_GET['id'];
                    $str = "select * from users where id='$no'";
                    $result = mysqli_query($link, $str);
                    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) { ?>
                        <div class=row>
                            <div class="column" style="padding:10px">
                                Id: <input type="text" name="id" value='<?php echo $row[0] ?>'>
                            </div>
                            <div class="column" style="padding:10px">
                                Name: <input type="text" name="name" value='<?php echo $row[1] ?>'>
                            </div>
                            <div class="column" style="padding:10px">
                                Number: <input type="text" name="number" value='<?php echo $row[2] ?>'>
                            </div>
                            <div class="column" style="padding:10px">
                                Email: <input type="text" name="email" value='<?php echo $row[3] ?>'>
                            </div>
                            <div class="column" style="padding:10px">
                                Address: <input type="text" name="address" value='<?php echo $row[4] ?>'>
                            </div>
                            <div class="column" style="padding:10px">
                                Date: <input type="text" name="date" value='<?php echo $row[5] ?>'>
                            </div>
                            <div class="column" style="padding:10px">
                                Slot :<select name="slot" value='<?php echo $row[6] ?>'>
                                    <option name="morning" >Morning</option>
                                    <option name="afternoon">Afternoon</option>
                                </select>
                            </div>
                            <div class="column" style="padding:10px">
                                Time :<select name="time" value='<?php echo $row[7] ?>'>
                                    <option>9:00</option>
                                    <option>11:00</option>
                                    <option>3:00</option>
                                    <option>5:00</option>
                                    <option>7:00</option>
                                </select>
                            </div>
                            <div class="column" style="padding:10px">
                                <button type="submit" name="uploadfile">update</button>
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
if (isset($_POST['uploadfile'])) {

    $db = mysqli_connect("localhost", "root", "", "sun");

    $id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $slot = $_POST['slot'];
    $time = $_POST['time'];

    $sql = "UPDATE users SET name='$name' , number='$number' , email='$email' , address='$address' , date='$date' , slot='$slot' , time='$time'  WHERE id='$id'";

    $qy = mysqli_query($db, $sql);

    $msg = ($qy == TRUE) ? "data updated successfully" : "Failed to upload image";
}

?>



