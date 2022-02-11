<?php include("connn.php"); ?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
          <meta name="viewport"content="width=device-width , initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Order Form </title>
    </head>
    <body><div class="w3-col s14">
		<a href="MYLUNCH.HTML" class="w3-button w3-wide w3-block w3-black ">HOME</a></div><br>
        
       <br> <div class="container">
            <form action="#" method="POST" name="google-sheet">
        <div class="title">
            Order Form 
            </div>
            
            <div class="form">
            <div class="input_field">
                <label> First Name</label>
                <input type="text" class="input" name="fname">
                </div>
                
                 <div class="input_field">
                <label> Last Name</label>
                <input type="text" class="input" name="lname">
                </div>
                
                 <div class="input_field">
                <label> Password </label>
                <input type="password" class="input" name="password">
                </div>
                
                 <div class="input_field">
                <label> Confirm Password</label>
                <input type="password" class="input" name="conpassword">
                </div>
                
                 <div class="input_field">
                <label> Dabba </label>
                     <div class="custom_select"></div>
                <select name="dabba" required>
                     <option value="dabba1">Dabba 1 </option>
                     <option value="dabba2">Dabba 2 </option>
                     <option value="dabba3">Dabba 3 </option>
                     <option value="dabba4">Dabba 4 </option>
                     <option value="dabba5">Dabba 5 </option>
                     <option value="dabba6">Dabba 6 </option></select>
                </div>
                
                 <div class="input_field">
                <label> Email Address </label>
                <input type="text" class="input" name="email">
                </div>
                
                 <div class="input_field">
                <label> Phone Number </label>
                <input type="text" class="input" name="phone">
                </div>
                
                 <div class="input_field">
                <label> Address </label>
                <textarea class="textarea" name="address"></textarea>
                </div>
                
                <div class="input_field terms ">
            <label class="check"> 
                    <input type="checkbox" required>
                    <span class="checkmark"></span></label>
                    <p>Agree to Terms and Conditions</p>
                </div>
                <div class="input_field">
                <input type="submit" value=" Confirm Order" class="btn" name="register">
                </div>
                 </div>
            </form>
        </div>
    </body>
</html>

<?php
error_reporting(0);
if($_POST['register'])
{
    $fname   = $_POST['fname'];
    $lname   = $_POST['lname'];
    $pwd     = $_POST['password'];
    $cpwd    = $_POST['conpassword'];
    $dabba   = $_POST['dabba'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $address = $_POST['address'];
    
    if($fname != "" && $lname != "" && $pwd != "" && $cpwd != "" && $dabba != "" && $email != "" && $phone != "" && $address != "")
    {
    
    
    $query = "INSERT INTO form (fname,lname,password,cpassword,dabba,email,phone,address)values('$fname','$lname','$pwd','$cpwd','$dabba','$email','$phone','$address')";
    $data = mysqli_query($conn,$query);
    
    if($data)
    {
        echo"data instered";
    }
    else
    {
        echo"failed";
    }
    }
    else {
        echo"<script> alert('Please fill the form');</script>"; 
    }
}
?>