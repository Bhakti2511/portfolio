<html data-bs-theme="dark">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="TemplateMo" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <title>Sun Services Admin</title>

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/decor_project.css" />
  <link rel="stylesheet" href="assets/css/owl.css" />
  <link rel="stylesheet" href="assets/css/lightbox.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />

  <!-- fontawesome -->
  <link
  rel="stylesheet"
  href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css" />
  
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
                <a href="user_register.php">User Ragistration</a>
              </li>
              <li>
                <a href="service.php" class="active">Service Ragistration</a>
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
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

 <section class="heading-page header-text" id="top">
    <div class="row">
      <div class="col">
        <h2 >Serviceing Details</h2>
        <table class="table2" id="service_details">
          <?php
          $db = mysqli_connect("localhost", "root", "", "sun");
          $str = "select * from service_registered";
          $result = mysqli_query($db, $str);
          ?>
          <tr>
            <th>Id</th>
            <th>Service</th>
            <th>Comapny</th>
            <th>Problem</th>
            <th style="text-align: center" colspan="2"><a href="service_reg_add.php"><span class="fa-regular fa-plus"></span></a></th>
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
              <td><a href="service_reg_upd.php?id=<?php echo $row[0] ?>"><span class="fa-regular fa-edit" ></span></a></td>
              <td><a href="service_reg_del.php?id=<?php echo $row[0] ?>"><span class="fa-regular fa-trash"></span></a></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </section>

</body>

</html>
