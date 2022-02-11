<?php

$db_host="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="insert";
$conn=mysqli_connect($db_host,$db_username,$db_password,$db_name);

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['contact']) && !empty($_POST['email']))
        
        $name =$_POST['name'];
        $contact =$_POST['contact'];
        $email =$_POST['email'];
    
         $query ="insert into form(name,contact,email) values ('$name','$contact','$email')";
         
         $run = mysqli_query($query) or die(mysqli_error());
         
         if($run){
         echo "form submitted";
         }
         else{
              echo "form not submitted";
         }
 }        
 else{
    echo "all fields required" ;
    
}

?>
