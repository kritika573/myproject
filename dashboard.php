<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1>WELCOME </h1>
<hr>

<h2>PORTFOLIO</h2>
<p>Resize the browser window to see the responsive effect.</p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="house.jpg" alt="Mountains" style="width:100%">
      <h3>Department name</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
      <div class="w3-container">
     <a href="departmentname.php" class="w3-btn w3-black">CLICK ME</a>
</div>

   
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="flats.jpg" alt="Lights" style="width:100%">
      <h3>Number of floors</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    
      <a href="" class="w3-btn w3-black">CLICK ME</a>
   </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="bill.jpg" alt="Nature" style="width:100%">
      <h3>My bills</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
      <a href="ownersbilldetails.php" class="w3-btn w3-black">CLICK ME</a>

    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="person.jpg" alt="Mountains" style="width:100%">
      <h3>My family</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
      <a href="departmentname.php" class="w3-btn w3-black">CLICK ME</a>

    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">

  <h3>Some Other departments</h3>

  <img class="card-img-top" src="homelogo.svg" alt="Card image cap" width="40" height="40">
  <img class="card-img-top" src="carlogo.svg" alt="Card image cap" width="40" height="40">
  <img class="card-img-top" src="vanlogo.svg" alt="Card image cap" width="40" height="40">
  <img class="card-img-top" src="buslogo.svg" alt="Card image cap" width="40" height="40">

  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
</div>
<a href="addowners.php" class="w3-btn w3-black">CLICK ME</a>

<!-- END MAIN -->
</div>

</body>
</html>
