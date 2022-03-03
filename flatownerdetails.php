<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>


.container {
  padding: 16px;
}
</style>
<body>

<div class="container mt-3">
  <h2>FLAT OWNER LOGIN </h2>
  <form action="" method="post">

  <form class="cmxform" id="commentForm" method="post" action="">
  <fieldset>
    <legend>Please provide your name, email address (won't be published) and a valid password</legend>
    <p>
      <label for="cname">Name (required, at least 2 characters)</label>
      <input id="cname" name="name" minlength="2" type="text" required>
    </p>
    <p>
      <label for="email">E-Mail (required)</label>
      <input id="email" type="email" name="email" required>
    </p>
    <p>
      <label for="curl">URL (optional)</label>
      <input id="curl" type="url" name="url">
    </p>
    <p>
    <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </p>

    <p>
      <input class="submit" name="submit" type="submit" value="Submit">
    </p>
  </fieldset>


</form>
<script>
$("#commentForm").validate();
</script>
<h1> New User </h1>
<form method="POST" action="signup.php">
<p><button class="w3-button w3-red">Sign up</button></p>
</form>

</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "flatdepartment";
// Create connection
$conn =  mysqli_connect($servername, $username, $password,$database, 3307);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connected successfully";
}
if(isset ($_POST['submit'])){
  $Uname=$_POST['name'];
  $Pword=$_POST['pswd'];
  $sql="SELECT * FROM adduser WHERE owner_name = '$Uname' AND paswrd ='$Pword'";
 // echo $sql;
  $result= mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)===1){
    echo "You are succesfully logged in";
    header("Location: " .$_SERVER["HTTP_ORIGIN"]."/OOps Concept/dashboard.php");
  }
  else{
      echo "Not successful".mysqli_error($conn);

}
}
?>
</body>
</html>
