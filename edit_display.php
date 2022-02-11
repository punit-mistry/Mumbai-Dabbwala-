<?php include("connn.php");
error_reporting(0);
$id = $_GET[punit];
$query = "SELECT * FROM form where id ='$id' ";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data)
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
          <meta name="viewport"content="width=device-width , initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Order Form </title>
    </head>
    <body>
        
        <div class="container">
            <form action="#" method="POST">
        <div class="title">
            Edit Order 
            </div>
            
            <div class="form">
            <div class="input_field">
                <label> First Name</label>
                <input type="text" value="<?php echo $result['fname']; ?>" class="input" name="fname">
                </div>
                
                 <div class="input_field">
                <label> Last Name</label>
                <input type="text" value="<?php echo $result['lname']; ?>" class="input" name="lname">
                </div>
                
                 <div class="input_field">
                <label> Password </label>
                <input type="password" value="<?php echo $result['password']; ?>"class="input" name="password">
                </div>
                
                 <div class="input_field">
                <label> Confirm Password</label>
                <input type="password" value="<?php echo $result['cpassword']; ?>" class="input" name="conpassword">
                </div>
                
                 <div class="input_field">
                <label> Dabba </label>
                     <div class="custom_select"></div>
                <select name="dabba"  required>
                     <option value="dabba1">Dabba 1 </option>
                     <option value="dabba2">Dabba 2 </option>
                     <option value="dabba3">Dabba 3 </option>
                     <option value="dabba4">Dabba 4 </option>
                     <option value="dabba5">Dabba 5 </option>
                     <option value="dabba6">Dabba 6 </option></select>
                </div>
                
                 <div class="input_field">
                <label> Email Address </label>
                <input type="text" value="<?php echo $result['email']; ?>"class="input" name="email">
                </div>
                
                 <div class="input_field">
                <label> Phone Number </label>
                <input type="text" value="<?php echo $result['phone']; ?>" class="input" name="phone">
                </div>
                
                 <div class="input_field">
                <label> Address </label>
                <textarea class="textarea" name="address"><?php echo $result['address']; ?></textarea>
                </div>
                
                <div class="input_field terms ">
            <label class="check"> 
                    <input type="checkbox" required>
                    <span class="checkmark"></span></label>
                    <p>Agree to Terms and Conditions</p>
                </div>
                <div class="input_field">
                <input type="submit" value=" Update Order" class="btn" name="update">
                </div>
                 </div>
            

<?php

if($_POST['update'])
{
    $fname   = $_POST['fname'];
    $lname   = $_POST['lname'];
    $pwd     = $_POST['password'];
    $cpwd    = $_POST['conpassword'];
    $dabba   = $_POST['dabba'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $address = $_POST['address'];
    
   
    
    $query = "UPDATE form set fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',dabba='$dabba',email='$email',phone='$phone',address='$address' WHERE id ='$id'";
        
    $data = mysqli_query($conn,$query);
    
    if($data)
    {
        echo"<script>alert('Order Updated')</script>";
        
        ?>
                <meta http-equiv = "refresh" content = "0; url = http://localhost/test/display.php" />
                 <?php
    }
   
              
    else
    {
        echo"failed to update ";
    }
    
    
}
?>
                </form>
        </div>
    </body>
</html>