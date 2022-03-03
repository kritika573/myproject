
<?php

ob_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 10%;
  border-radius: 10%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<center><h2>Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></center>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://th.bing.com/th/id/R.55c1c8ba7305e2c8379e6ad304d77cda?rik=i0kla%2f8uRaW%2fRA&riu=http%3a%2f%2fwww.clker.com%2fcliparts%2fH%2f2%2fd%2fe%2fv%2f3%2flogin-button-hi.png&ehk=m94DcWf18Yw%2bRU3GRLl9mUgWMiQ0bH4dQc9JqSeFD9A%3d&risl=&pid=ImgRaw&r=0" alt="login image" class="avatar">
    </div>

    <div class="container">
      <label for="Username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Username" required>

      <label for="Password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>
       
      <select class="form-select" aria-label="Default select example" name="role" id="role">

  <option selected>Open this select menu</option>
  <option value="0">Admin</option>
  <option value="1">User</option>
</select>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="Password">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

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

  
if(isset ($_POST['Username'])){
    if (strlen($password) < 6) {
    $password_error = "Password must be minimum of 6 characters";
    }
  
  
  $uname=$_POST['Username'];
  $password=$_POST['Password'];
  $role=$_POST['role'];
 $sql= "SELECT * FROM adduser WHERE owner_name = '$uname' AND paswrd ='$password' AND roles='$role'";
  $result= mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)==1){
    while($row = mysqli_fetch_assoc($result)){
      session_start();
      $_SESSION["username"]=$row["user"];
      $_SESSION["password"]=$row["passs"];
      $_SESSION["role"]=$row["role"];
    if($role==0){
    header("Location: " .$_SERVER["HTTP_ORIGIN"]."/OOps Concept/addflat2.php");
    }else{
      echo "You are not valid user";
    }
    if($role==1){
      header("Location: " .$_SERVER["HTTP_ORIGIN"]."/OOps Concept/pppp.php");

    }
    else {
      $error_message = "Incorrect user!!!";
      }
  }
}

  
}

?>



</body>
</html>
