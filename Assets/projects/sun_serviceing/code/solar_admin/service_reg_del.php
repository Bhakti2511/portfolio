<?php
session_start();
if (isset($_SESSION['solar'])) {

    $db = mysqli_connect("localhost", "root", "", "sun");
    $no = $_GET['id'];
    $str1 = "delete from service_registered where id='$no'";
    $result = mysqli_query($db,$str1);

    if ($result)
    {
        echo "<script> alert('data deleted'); </script>";
        echo "<script>window.location='register.php';</script>";
    }
    else
        echo "record not Deleted plz check query.." .$str1;
}
else{
    echo "<script> alert('rechek'); </script>";
}

?>