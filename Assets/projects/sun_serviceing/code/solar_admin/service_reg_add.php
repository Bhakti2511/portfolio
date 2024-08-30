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
                            <a href="service.php" class="active">Service Ragistration</a>
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
                    <div class=row>
                        <div class="column" style="padding:10px">
                            Service: <select name="service" value=''>
                                <option disabled selected> select any option</option>
                                <option>Solar Water Heater</option>
                                <option>Solar Rooftop Panel </option>
                                <option>Solar Cooker</option>
                                <option>Solar Insect trap </option>
                                <option>Solar water pump</option>
                                <option>Solar cleaning</option>
                                <option>Installation / Uninstallation</option>
                            </select>
                        </div>
                        <div class="column" style="padding:10px">
                            Company: <select name="company" value=''>
                                <option disabled selected> select any option</option>
                                <option>Tata power solar system</option>
                                <option>Adani Group</option>
                                <option>Waaree Energies ltd.</option>
                                <option>Vikram Solar</option>
                                <option>Microtek Solar Solution</option>
                                <option>Loom Solar PVT LTD.</option>
                                <option>Moser Baer Solar LTD.</option>
                            </select>
                        </div>
                        <div class="column" style="padding:10px">
                            Problem: <input type="text" name="problem" value=''>
                        </div>
                        <div class="column" style="padding:10px">
                            <button type="submit" name="insertdata">insert</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $(function () {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();
        var maxDate = year + '-' + month + '-' + day;
        $('#date').attr('min', maxDate);
    });
</script>

</body>

</html>

<?php
if (isset($_POST['insertdata'])) {

    $db = mysqli_connect("localhost", "root", "", "sun");

    $service = $_POST['service'];
    $company = $_POST['company'];
    $problem = $_POST['problem'];

    $sql = "INSERT INTO service_registered (services,company,problem) VALUES ('$service','$company','$problem')";

    $qy = mysqli_query($db, $sql);

    $msg = ($qy == TRUE) ? "data added successfully" : "Failed to add data";
}
?>
