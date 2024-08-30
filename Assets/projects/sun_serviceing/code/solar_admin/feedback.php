<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="TemplateMo" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />

    <title>Sun Services Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/decor_project.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />

    <!-- fontawesome -->
  <link
  rel="stylesheet"
  href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css" />
  
  </head>
  <body>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
      <div class="heading">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav class="main-nav">
                <!-- ***** Logo Start ***** -->

                <!-- <img src="assets/images/logo_bg.png" class="img-fluid" style="height: 70px; width: 70px;" /> -->

                <a href="index.html" class="logo">
                  Sun Services<br />
                  <h4 class="slogen">One Stop Solar Solution</h4>
                </a>

                <!-- ***** Logo End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class="nav">
                  <li><a href="index.php">Home</a></li>
                    <li>
                <a href="user_register.php">User Ragistration</a>
              </li>
              <li>
                <a href="service.php">Service Ragistration</a>
              </li>
                  <li><a href="enquiry.php">Enquiry</a></li>
                  <li><a href="feedback.php" class="active">Feedback</a></li>
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

    <section class="heading-page header-text" id="top">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 >Feedback Submission</h2>
            <table class="table1" id="feedback">
              <?php
              $db = mysqli_connect("localhost", "root", "", "sun");
              $str = "select * from feedback";
              $result = mysqli_query($db, $str);
              ?>
              <tr>
                <th> Id </th>
                <th>Improvement</th>
                <th>Dislike</th>
                <th>Like</th>
                <th>Suggestion</th>
                <th style="text-align: center" ><a href="feedback_add.php"><span class="fa-regular fa-plus"></span></a></th>
              </tr>
              <?php while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                ?>
                <tr>
                  <td>
                    <?php echo $row[0] ?>
                    </td>
                    <td>
                    <?php echo $row[1] ?>
                  </td>
                  <td>
                    <?php echo $row[2] ?>
                  </td>
                  <td>
                    <?php echo $row[3] ?>
                  </td>
                  <td>
                    <?php echo $row[4] ?>
                  </td>
                  <td><a href="feedback_del.php?id=<?php echo $row[0] ?>"><span class="fa-regular fa-trash"></span></a></td>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
