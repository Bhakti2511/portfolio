
<?php
session_start();
unset($_SESSION['solar']);

$db = mysqli_connect("localhost", "root", "", "sun");
$no = $_GET['id'];
$str1 = "delete from feedback where id='$no'";
$result = mysqli_query($db, $str1);

if ($result) {
    echo "<script> alert('data deleted'); </script>";
    echo "<script>window.location='feedback.php';</script>";
} 
else
{
    echo "record not Deleted plz check query.." . $str1;
}

?>