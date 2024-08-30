<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="TemplateMo" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <title>Sun Services</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
      /> -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/decor_project.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
</head>

<body>
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="right-icons align-self-right">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="heading">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->

                            <div class="nav1">
                                <img src="assets/images/nav_logo.png" class="img-fluid" />
                            </div>

                            <a href="index.html" class="logo">
                                Sun Services<br />
                                <h4 class="slogen">One Stop Solar Solution</h4>
                            </a>

                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="register.php">Service Ragistration</a></li>
                                <li><a href="service2.php">Service</a></li>
                                <li class="scroll-to-section">
                                    <a href="#about">About us</a>
                                </li>
                                <li><a href="feedback.php">Feedback</a></li>
                                <li><a href="testimonial.php" class="active">Testimonial</a></li>
                            </ul>
                            <a class="menu-trigger">
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="section main-banner2" id="top">
        <div class="video-overlay1 header-text">
            <div class="row">
                <div class="caption col-lg-4">
                    <!-- testimonail same as apply now of index.php -->
                    <?php
                    $db = mysqli_connect("localhost", "root", "", "sun");
                    $sql2 = "SELECT * FROM feedback";
                    if ($result = mysqli_query($db, $sql2)) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {

                                echo "<div class='row'>";
                                echo "<div class='col-lg-6'>";
                                echo "<div class='item'>";
                                echo "<div class='date'>";
                                echo "<h3 style='font-size:14px;'> $row[1] </h3>";
                                echo "<p style='color:whitesmoke; font-size:20px;'> $row[3] </p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo "No records found";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql2. " . mysqli_error($connect);
                    }
                    ?>
                </div>
                <div class='main-button-red'>
                    <div class='page'>
                        <a href='feedback.php'>CLick here to add your feedback</a>
                    </div>
                </div>
                <section class="more-queries1" id="about">
                    <div class="footer" style="margin-top: 50px">
                        <div class="col-lg-3" style="padding-bottom: -10px">
                            <div class="right-info">
                                <ul>
                                    <li>
                                        <h6>Phone Number</h6>
                                        <span>+91 1234567890</span>
                                    </li>
                                    <li>
                                        <h6>Email Address</h6>
                                        <span>sunservices@gmail.com</span>
                                    </li>
                                    <li>
                                        <h6>Street Address</h6>
                                        <span>any where in rajkot</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
    </section>

</body>

</html>