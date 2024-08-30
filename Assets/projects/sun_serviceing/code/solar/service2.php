<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Template Mo" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <title>Sun Services</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/decor_project.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />

</head>

<body>
    <!-- Sub Header -->
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
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li><a href="register.php">Service Ragistration</a></li>
                            <li><a href="service.php" class="active">Service</a></li>
                            <li class="scroll-to-section">
                                <a href="#about">About us</a>
                            </li>
                            <li><a href="feedback.php">Feedback</a></li>
                            <li><a href="testimonial.php">Testimonial</a></li>
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
    <!-- ***** Header Area End ***** -->

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h6>Take a Look at Our Serviceing Products</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filters">
                                <ul>
                                    <li data-filter="*" class="active">All Solar Services</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row grid">
                                <?php
                                $db = mysqli_connect("localhost", "root", "", "sun");
                                $sql2 = "SELECT * FROM services";
                                if ($result = mysqli_query($db, $sql2)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {

                                            echo "<div class='col-lg-4 templatemo-item-col all ' >";
                                            echo "<div class='meeting-item'>";
                                            echo "<div class='down-content'>";
                                            echo "<div class='date'>";
                                            echo "<a href='register2.php'><img src = 'assets/images/" . $row['photos'] . "' class='img-fluid' style='height: 300px; width: 300px' /></a>";
                                            echo "</div>";
                                            echo "<h4> " . $row['name'] . "</h4>";
                                            echo "<p>" . $row['description'] . "</p>";
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
                            <div class="col-lg-12">
                                <div class="pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $(".nav li:first").addClass("active");

        var showSection = function showSection(section, isAnimate) {
            var direction = section.replace(/#/, ""),
                reqSection = $(".section").filter(
                    '[data-section="' + direction + '"]'
                ),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $("body, html").animate(
                    {
                        scrollTop: reqSectionPos,
                    },
                    800
                );
            } else {
                $("body, html").scrollTop(reqSectionPos);
            }
        };

        var checkSection = function checkSection() {
            $(".section").each(function () {
                var $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var currentId = $this.data("section"),
                        reqLink = $("a").filter("[href*=\\#" + currentId + "]");
                    reqLink
                        .closest("li")
                        .addClass("active")
                        .siblings()
                        .removeClass("active");
                }
            });
        };

        $(".main-menu, .responsive-menu, .scroll-to-section").on(
            "click",
            "a",
            function (e) {
                e.preventDefault();
                showSection($(this).trapr("href"), true);
            }
        );

        $(window).scroll(function () {
            checkSection();
        });

        function submit1() {
            let name = $("#name").val();
            let email = $("#email").val();
            let number = $("#number").val();
            let problem = $("#problem").val();

            $.ajax({
                url: "http://localhost/solar/php/insert.php",
                method: "POST",
                data: JSON.stringify({
                    action: "enquiry",
                    name: name,
                    email: email,
                    number: number,
                    problem: problem,
                }),
                success: function (resp) {
                    alert("data add.");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                },
            });
        }

        function validateform() {
            let n = $("#number").val();

            if (isNaN(n)) {
                alert("Please enter Numeric value");
                return false;
            } else {
                submit1();
            }
        }
    </script>
</body>

</html>