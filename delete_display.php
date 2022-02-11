<?php
include("connn.php");
$id = $_GET[punit];
error_reporting(0);
$query ="DELETE FROM form WHERE id ='$id'";
$data= mysqli_query($conn,$query);
if($data)
{
    echo"<script>alert('Order Deleted.')</script>";
    ?>
 <meta http-equiv = "refresh" content = "0; url = http://localhost/test/display.php" />
<?php
}
else{
    echo"<script>alert('Order Not Deleted.')</script>";
}
?>