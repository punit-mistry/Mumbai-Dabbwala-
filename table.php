<?php
include_once 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM registration");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>firstName	</td>
    <td>lastName </td>
    <td>gender</td>
    <td>Email id</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["firstName"]; ?></td>
    <td><?php echo $row["lastName"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>