<?php

session_start();
if(!isset($_SESSION['solar']))
{
  ?>
  <script>
    alert("You Have not Loged in ");
    Window.Location.replace('login.php');
  </script>
    <?php
}
    else{
?>
<html lang="en" >

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <title>Sun Services Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/decor_project.css" />
  <link rel="stylesheet" href="assets/css/owl.css" />
  <link rel="stylesheet" href="assets/css/lightbox.css" />
  
</head>

<body >

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <div class="heading">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <a href="index.html" class="logo">
                Sun Services<br />
                <h4 class="slogen">One Stop Solar Solution</h4>
              </a>

              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="user_register.php">User Ragistration</a></li>
                <li>
                  <a href="service.php">Service Ragistration</a>
                </li>
                <li><a href="enquiry.php">Enquiry</a></li>
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
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="heading-page header-text" id="top">
    <div class="video-overlay header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="caption">
              <div class="container1">
                <img src="assets/images/nav_logo.png" class="img-fluid1" style="width:310px; height:280px; " />
              </div>
              <h2> Goal of Sun Services is ???</h2>
              <h3>to satisfy our customer togther. </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  <!-- <script>
alert("loged in ");
</script> -->
</body>

</html>

<?php } ?>