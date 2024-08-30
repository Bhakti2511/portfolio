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

    <title>Sun Services</title>

    <!-- Bootstrap core CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
                <a href="https://www.facebook.com"
                  ><i class="fa fa-facebook"></i
                ></a>
              </li>
              <li>
                <a href="https://www.instagram.com"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li>
                <a href="https://www.linkedin.com"
                  ><i class="fa fa-linkedin"></i
                ></a>
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
                <img
                  src="assets/images/nav_logo.png"
                  class="img-fluid"
                />
              </div>

              <a href="index.php" class="logo">
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
                  <a href="register.php" class="active"
                    >Service Ragistration</a
                  >
                </li>
                <li><a href="service2.php">Service</a></li>
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

    <section class="section main-banner1" id="top" data-section="section1">
      <div class="video-overlay1 header-text">
        <div class="container">
          <div class="row">
            <div class="caption col-lg-4">
              <div class="row">
                <form id="register2">
                  <div class="col-lg-12">
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <h3>Service Registration</h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="dropdown col" style="padding-bottom: 20px">
                        <lable class="form-lable" style="color: cornsilk"
                          >Select Services</lable
                        >
                        <select
                          class="dropdown"
                          id="service"
                          name="service"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                          required
                        >
                          <option disabled selected>-- select option--</option>
                          <option value="waterheater">
                            Solar Water heater
                          </option>
                          <option value="rooftop">Solar Rofftop Panel</option>
                          <option value="cooker">Solar Cooker</option>
                          <option value="insecttrap">Solar Insect Trap</option>
                          <option value="waterpump">Solar Water Pump</option>
                          <option value="cleaning">Solar Cleaning</option>
                          <option value="install/uninstall">Installation / Uninstallation</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="dropdown col" style="padding-bottom: 20px">
                        <lable class="form-lable" style="color: cornsilk"
                          >Company of the Repairing Product</lable
                        >0
                        <select
                          class="dropdown"
                          id="company"
                          name="company"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                          required
                        >
                          <option disabled selected>-- select option--</option>
                          <option value="tata">
                            Tata Power Solar Syatems Ltd.
                          </option>
                          <option value="adani">Adani Group</option>
                          <option value="waree">Waaree energies Ltd</option>
                          <option value="vikram">Vikram Solar</option>
                          <option value="microtek">
                            Microtek Solar Solutions
                          </option>
                          <option value="loom">Loom Solar Pvt. Ltd.</option>
                          <option value="moser">Moser Baer Solar Ltd</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col" style="padding-bottom: 20px">
                        <lable class="form-lable" style="color: cornsilk"
                          >Mention Your Problem here</lable
                        >
                        <textarea
                          class="form-control"
                          placeholder="Mention Your Problem here"
                          aria-label="problem"
                          id="problem"
                          name="problem"
                          aria-describedby="addon-wrapping"
                          required
                        ></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col" style="padding-bottom: 20px">
                        <input
                          type="submit"
                          name="submit"
                          id="submit"
                          class="btn btn-primary"
                          value="submit"
                        />
                      </div>
                      <div class="col">
                        <input
                          type="reset"
                          class="btn btn-primary"
                          value="reset"
                        />
                      </div>
                      <div class="col">
                        <input
                          type="submit"
                          class="btn btn-primary"
                          value="personal details"
                          style="width: 200px"
                          onclick="window.location.href='register.php';"
                        />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <section class="more-queries1" id="about">
      <div class="footer" style="margin-top: 50px" >
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

    <script>
      $(document).ready(function(){
      $("#submit").on("click" , function(){
        let service =$("#service").val();
        let company = $("#company").val();
        let problem = $("#problem").val();

       // alert("entered name is " + name +"\n"+ phoneno +"\n"+ email +"\n"+ address +"\n"+ date +"\n"+ slot +"\n"+ time);

        $.ajax({
          url: "http://localhost/solar1/php/insert.php",
          method:"POST",
          data :JSON.stringify({
            action: "insertdata_service",
            services:service ,
            company: company,
            problem: problem,
          }),
          success: function (resp) {
          console.log("data add.");
        },
        error:  function (jqXHR, textStatus, errorThrown) {
          // alert(errorThrown);
          console.log(errorThrown);
        },
        });
      });
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
