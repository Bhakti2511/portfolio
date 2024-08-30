<?php
session_start();

if (isset($_POST["login"])) {
  $db = mysqli_connect("localhost", "root", "", "sun");
  $str = mysqli_query($db, "select * from admins where username='" . $_POST["username"] . "' AND password='" . $_POST["password"] . "'");
  $res = mysqli_fetch_row($str);
  $nores = mysqli_num_rows($str);
  if ($nores > 0) {
    $_SESSION["solar"] = $res[1];
    echo "<script>window.location='index.php';</script>";
  } else
    echo "<h3>Enter Valid Password or Username</h3>";
  // echo "<script>window.location='Login.php';</script>";
} else
  echo "<script>window.location='Login.php';</script>";
?>

<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Sun Services Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body style="background-color: lightblue">
   
  
  <div class="pt-5">
      <div class="container">
        <div class="row">
          <div
            class="col-md-5 mx-auto"
            style="
              font-size: 25;
              padding-left: 70px;
              text-align: center;
              padding-top: 200px;
            ">
            <h1 class="text-center" style="color: rgb(44, 44, 44)">Login</h1>
            <div class="card card-body">
              <form
                id="submitForm"
              
                method="post">
                <input
                  type="hidden"
                  name="_csrf"
                  value="7635eb83-1f95-4b32-8788-abec2724a9a4" />
                <div class="form-group required">
                  <lSabel for="username" style="padding: 20px">Username</lSabel>
                  <input
                    type="text"
                    class="form-control text-lowercase"
                    id="username"
                    required
                    name="username"
                    value="" />
                </div>
                <div class="form-group required">
                  <label
                    class="d-flex flex-row align-items-center"
                    for="password"
                    style="padding: 20px">
                    Password
                  </label>
                  <input
                    type="password"
                    class="form-control"
                    required
                    id="password"
                    name="password"
                    value="" />
                </div>
                <div class="form-group pt-1">
                  <button
                    class="btn btn-primary"
                    type="submit"
                    name="login"
                    style="
                      margin: 20px;
                      padding: 8px;
                      background-color: cornflowerblue;
                    ">
                    Log In
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

