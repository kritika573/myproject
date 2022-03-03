<!DOCTYPE html>
<html>
<body>

<h2>OWNER DETAILS AND NUMBER OF FLATS PER OWNER</h2>

</body>
</html>



<div class="col-md-2">
<center><button><a class="add-new" href="Ownerdetails.php">add user</a></button></center>
              </div>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "flatdepartment";
// Create connection
$conn =  mysqli_connect($servername, $username, $password,$database, 3307);




$sql="Select * FROM adduser";

 $result= mysqli_query($conn, $sql);
 $num=mysqli_num_rows($result);
 echo "Total number of owners are:".$num."<br>";
 echo "<br>";

if($num>0){
    print ("<table class='center' border='1' width='75%'
cellspacing='2' cellpadding='2'>");

print ("<tr>");
print ("<td><b>id</b></td>");

print ("<td><b>Owners name</b></td>");
print ("<td><b>Members</b></td>");
print ("<td><b>doj</b></td>");
print ("<td><b>Action</b></td>");

print ("</tr>");
    while ($Row = mysqli_fetch_array($result)) {

        print ("<tr>");
        print ("<td>$Row[id]</td>"); 

        print ("<td>$Row[owner_name]</td>"); 
        print ("<td>$Row[members]</td>");
         print ("<td>$Row[doj]</td>");
        print("<td>");

        print("<a href='delete-user.php?id=".$Row['id']."'>Delete</a>");
        print("<br>");
        print("<a href='edit.php?id=".$Row['id']."'>Update</a>");
        print("</td>");
        print ("</tr>");

        }    
} 
  

?>
