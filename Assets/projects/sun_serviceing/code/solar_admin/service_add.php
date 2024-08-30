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
<!-- ***** Header Area start ***** -->
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
              <a href="service.php" >Service Ragistration</a>
            </li>
            <li><a href="service.php">Enquiry</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="add_service.php" class="active">Add Service</a></li>
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
              Insert Photo <input type="file" name="photo">
            </div>
            <div class="column" style="padding:10px">
              What is Photo About<input type="text" name="photoname">
            </div>
            <div class="column" style="padding:10px">
              Description Of Photo <input type="text" name="description">
            </div>
            <div class="column" style="padding:10px">
              <button type="submit" name="uploadfile">UPLOAD</button>
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
$msg = "";
if (isset($_POST['uploadfile'])) {

  $photo = $_FILES["photo"]["name"];
  $tempname = $_FILES["photo"]["tmp_name"];
  $photosname = $_POST['photoname'];
  $description = $_POST['description'];

  $folder = "assets/images/" . $photo;

  $db = mysqli_connect("localhost", "root", "", "sun");

  $sql = "INSERT INTO services (photos,name,description) VALUES ( '$photo' , '$photosname' , '$description')";

  mysqli_query($db, $sql);

  if (move_uploaded_file($tempname, $folder)) {
    $msg = "Image uploaded successfully";
  } else {
    $msg = "Failed to upload image";
  }
}
?>