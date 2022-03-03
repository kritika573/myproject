<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f2f2f2;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>

<h2>WELCOME ......YOU ARE SUCCESSFULLY LOGIN </h2>
<p>Enter details for owners.</p>

<div class="dropdown">
  <button class="dropbtn">DETAILS TO FILL FOR OWNERS</button>
  <div class="dropdown-content">
        
    <a href="Ownerdetails">Add Flat</a>
    <a href="showdetails.php">Show Owner details</a>
    <a href="ownerbill">Owner's Bill</a>
    <a href="http://localhost1/notifications/connect.php/">Notifications for owners</a>
  </div>
</div>
<div class="col-md-offset-9 col-mid-1">
    <a href="logout.php" class="admin-logout">logout</a>
</div>
</body>
</html>
