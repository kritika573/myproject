<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px;}
</style>
<body>

<div class="w3-container">
  <h2>Logged in succesfully</h2>
<form method="POST" action="showownerdetails.php">
<p><button class="w3-button w3-red">Flat details</button></p>
</form>
<form method="POST" action="ownersbilldetails.php">
<p><button class="w3-button w3-pink">Dues of flat</button></p>
</form>
<form method="POST" action="notifications.php">
<p><button class="w3-button w3-blue">See notifications</button></p>
</form>
</div>

</body>
</html>
