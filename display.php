<hmtl>
<head>
    <title> Orders Page</title></head>
    <style>
        body{
            background: #e6e6e6;
        }
        table{
            background: white;
        }
        .edit,.delete{
            color: red;
            background-color: black;
            font-weight: bold;
            border: 0;
            outline: none;
            border-radius: 3px;
            height: 20px;
            width: 160px;
            cursor: pointer;
        }
        .delete{
            color: black;
            background-color: red;
            
        }
    </style>

</hmtl>


<?php
include("connn.php");
error_reporting(0);

$query = "SELECT * FROM form ";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);


 
 

//echo $total ;

if($total != 0)
{
 ?>
<h1 align="center"> All Orders</h1>
<table border="3" cellspacing="9" width=100% align="center"><tr>
<th width=5%>ID</th>
<th width=10%>First Name</th>
<th width=10%>Last Name</th>
<th width=10%>Your Dabba </th>
<th width=10%>Email</th>
<th width=10%>Number</th>
<th width=25%>Address </th>
<th width=20%>Edit </th>

    </tr>





<?php
    while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr>
            <td>".$result[id]."</td>
             <td>".$result[fname]."</td>
             <td>".$result[lname]."</td>
             <td>".$result[dabba]."</td>
             <td>".$result[email]."</td>
             <td>".$result[phone]."</td>
             <td>".$result[address]."</td>
             <td> <a href='edit_display.php?punit=$result[id]'><input type='submit'value='Edit' class='edit'></a>
             <a href='delete_display.php?punit=$result[id]'><input type='submit'value='Delete' class='delete' onclick='return checkdelete()'></a></td>
             </tr>";
 
    }
}
else
{
    echo"No records has been submited....";
}
?>
</table>

<script>
function checkdelete()
    {
        return confirm('Are you sure to delete this Data ?')
    }
    
</script>
