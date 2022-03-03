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
    <h1>Add Owner details in List</h1>     
    <form action ="" method="POST">
    <label for="fname">First Name</label>

        <input type="number" name="id" placeholder="Enter id"/></br></br>
        <label for="fname">First Name</label>

        <input type="text" name="name" placeholder="Enter name"/></br></br>
        <label for="lname">Enter number of members</label>

        <input type="text" name="number" placeholder="Enter number of members"/></br></br>

        <label for="country">Date OF Joining</label>

        <input type="date" name="date" placeholder="Date Of joining"/></br></br>

        <label for="subject">Password</label>

        <input type="text" name="paswrd" placeholder="Password"/></br></br>
        <label for="subject">Number Of flat</label>

        <input type="text" name="flatsnumber" placeholder="Number Of Flats"/></br></br>
        <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0">Owner</option>
                              <option value="1">Admin</option>
                          </select>
                      </div>


        <input type="submit" name="add" value="Add data"/></br>
    </form>

    <h1> Find the details of owner </h1>
    <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="id">ID:</label>
      <input type="number" class="form-control" id="id" placeholder="Enter id" name="id">                        
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
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
$ids= $_POST['id'];
$strSQL = "SELECT * FROM adduser WHERE id='$ids'";
$rs = mysqli_query($conn,$strSQL);
if(mysqli_num_rows($rs)>0){
    print ("<table class='center' border='1' width='75%'
cellspacing='2' cellpadding='2'>");

print ("<tr>");
print ("<td><b>id</b></td>");

print ("<td><b>Owners name</b></td>");
print ("<td><b>Members</b></td>");
print ("<td><b>doj</b></td>");
print ("<td><b>Number of flats</b></td>");
print ("<td><b>Roles</b></td>");
print ("<td><b>Action</b></td>");

print ("</tr>");
    while ($Row = mysqli_fetch_array($rs)) {

        print ("<tr>");
        print ("<td>$Row[id]</td>"); 

        print ("<td>$Row[owner_name]</td>"); 
        print ("<td>$Row[members]</td>");
         print ("<td>$Row[doj]</td>");
         print ("<td>$Row[Numberofflats]</td>");
         print ("<td>$Row[roles]</td>");

        print("<td>");
        print("<a href='delete.php'>Delete</a>");
        print("<br>");
        print("<a href='edit.php'>Update</a>");
        print("</td>");
        print ("</tr>");
        
        }    
}

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$Id= isset($_POST['id']) ? $_POST['id'] : '';
$Name= isset($_POST['name']) ? $_POST['name'] : '';
$Members = isset($_POST['number']) ? $_POST['number'] : '';
$Date = isset($_POST['date']) ? $_POST['date'] : '';
$password = isset($_POST['paswrd']) ? $_POST['paswrd'] : '';
$Flatnumber = isset($_POST['flatsnumber']) ? $_POST['flatsnumber'] : '';
$Userrole = isset($_POST['role']) ? $_POST['role'] : '';

if (isset($_POST['add'])) {
    $sql="SELECT Owner_name FROM adduser WHERE Owner_name='{$Name}' ";
    $result=mysqli_query($conn ,$sql) or die("Query not run");
    if(mysqli_num_rows($result)>0){
        echo "User already exists";
    }
    else{

    $query = "INSERT INTO adduser(id,Owner_name,members,doj,paswrd,Numberofflats,roles) VALUES ('$Id','$Name','$Members', '$Date', '$password','$Flatnumber','$Userrole')";
    mysqli_query($conn, $query) or die('Error querying database.');
mysqli_close($conn);
echo "<h3 class='success'>Your list has been added.</h3>";




    }
}


?>

</body>


</html>