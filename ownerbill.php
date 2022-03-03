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

      <label for="id">ID :</label>

       <input type="number" name="id" placeholder="Enter id"/></br></br>

      <label for="name">Floor number :</label>

     <input type="number" name="floornumber" placeholder="Enter name"/></br></br>
 
     <label for="blocknumber">Block number :</label>

<input type="number" name="blocknumber" placeholder="Enter blocknumber"/></br></br>

<label for="flatownerid">Flat owner id :</label>

<input type="number" name="flatownerid" placeholder="Enter flat owner id"/></br></br>



    <label for="Waterbill">Waterbill :</label>

        <input type="number" name="waterbill" placeholder="Enter waterbill"/></br></br>

    <label for="Electicity bill">Electrictybill :</label>
    
        <input type="number" name="electricity" placeholder="Enter Electricity bill"/></br>

        <input type="submit" name="add" value="Add data"/></br>
    </form>

     </center>



<?php  
        class pay {

        public  $bill;

        function payableamount(){
        if(isset($_POST['add']))  
            {  
                $number1 = $_POST['waterbill'];  
                $number2 = $_POST['electricity'];  
                $this->bill =  $number1+$number2;     
        echo "The sum of waterbill and electicity nill is: ".$this->bill."<br>";   
            }  
                                }
        function TotalAmount($bal){
            if($bal>0){
            $this->bill=$this->bill + $bal;
            echo "After adding previous balance your payment become: $this->bill";
        }else{
            echo "You Dont have pending balance";
        }
        }
            }

         $user =new pay();
        $user->payableamount();
        $user->TotalAmount(5000);

         
        
        
        
         $servername = "localhost";
         $username = "root";
         $password = "";
         $database = "flatdepartment";
         // Create connection
         $conn =  mysqli_connect($servername, $username, $password,$database, 3307);
         



         if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          else {
              echo "Connected successfully";
          }
          
          if (isset($_POST['add'])) {
            $id= isset($_POST['id']) ? $_POST['id'] : '';

          $floornumber= isset($_POST['floornumber']) ? $_POST['floornumber'] : '';
          $block = isset($_POST['blocknumber']) ? $_POST['blocknumber'] : '';
          $ownerid = isset($_POST['flatownerid']) ? $_POST['flatownerid'] : '';
          $dues = $user->bill;
         $query = "INSERT INTO ownerbilldetails( id,floornumber,blocknumber,flatownerid,dues) VALUES ('$id','$floornumber','$block', '$ownerid', $dues)";
          mysqli_query($conn, $query) or die('Error querying database.');
          mysqli_close($conn);
          echo "<h3 class='success'>Your list has been added.</h3>";
          
          
          }
          
?>
    
