<html>
<head>
<title>
    Add student in list
</title>
</head>
<style>
    body{
        background-color: whitesmoke;
    }
    
    </style>
<body>

     <center>
    <form action ="" method="POST">
        <input type="number" name="id" placeholder="Enter flatownerid"/></br>
        <input type="text" name="name" placeholder="Enter password"/></br>
        <button type="submit" name="submit1" class="btn btn-primary">Submit</button>

    </form>

     </center>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "flatdepartment";
// Create connection
$conn =  mysqli_connect($servername, $username, $password,$database, 3307);
// Check connection
if(isset($_POST['submit1']))  {
$ids= $_POST['id'];
$strSQL = "SELECT t1.id AS newcol ,t1.department_name AS deptname, t2.owner_name AS newcola , t1.dues AS newcolb, t2.members AS newcolc, t2.doj AS newcold FROM ownerbilldetails AS t1 JOIN adduser AS T2 ON t1.id = t2.id 
WHERE t2.id='$ids'";
   $rs = mysqli_query($conn,$strSQL);
   if(mysqli_num_rows($rs)>0){
    print ("<table class='center' border='1' width='75%'
      cellspacing='2' cellpadding='2'>");

print ("<tr>");
print ("<td><b>Id</b></td>");
print ("<td><b>Department Name</b></td>");

print ("<td><b>Name</b></td>");
print ("<td><b>Dues</b></td>");
print ("<td><b>blocknumber</b></td>");
print ("<td><b>doj</b></td>");

print ("</tr>");
    while ($Row = mysqli_fetch_array($rs)) {

        print ("<tr>");
        print ("<td>$Row[newcol]</td>"); 
        print ("<td>$Row[deptname]</td>"); 

        print ("<td>$Row[newcola]</td>");
         print ("<td>$Row[newcolb]</td>");
         print ("<td>$Row[newcolc]</td>");
         print ("<td>$Row[newcold]</td>");

        
        }    
}

}
else {
    echo "no mathcing found";
}
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connected successfully";
}


?>

</body>


</html>