<?php

$insert=false;

if (isset($_POST['Name'])){

    //set connection variables
    $server="localhost";
    $username="root";
    $password=" ";
    $dbname="travelrecords";

//create connections
$con=mysqli_connect( $server, $username, $password, $dbname);
//check for connection success
if (!$con){
    die("Connection to this database failed due to ".mysqli_connect_error());
}
// echo "connected to the db!";
//collect post variables

$name=$_POST['Name'];
$gender=$_POST['Gender'];
$age=$_POST['Age'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$other=$_POST['Other'];

$sql = "INSERT INTO trip(Name, Age, Gender,Email, Phone, Other) 
        VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other' );";

//mysqli functions are used to procedural language programming and adding into database

//execute the query
if ($con->query($sql)==true){
    //echo "Successfully Inserted";
    $insert=true;
}
else{
    echo "ERROR : $sql <br> $con->error";
}
//close the database connection
$con->close();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body> 
    <center>
        
<div class="pageBreak"> </div>
<div class="container">
    <br> <br> <br><br><br>
    
<hr color="white" width=80%> <br>
    <h2> WELCOME TO SWKYT TRAVEL AGENCY </H2> <br>
    
<p> Enter your details and submit this form to confirm your participation in the trip </p>
<br> 
<hr color="white" width=80%>
<br>

<?php 
if ($insert==true){
echo "<p class='submitMsg'> Details Received! Thank you for submitting your message!</p>";
}
?>
<form action="index.php" method="post">    
    <input type="text" name="Name" id="Name" placeholder="Enter your name "> <br>
    <input type="text" name="Age" id="Age" placeholder="Enter your age "><br>
    <input type="text" name="Gender" id="Gender" placeholder="Enter your gender "><br>
    <input type="email" name="Email" id="Email" placeholder="Enter your Email "><br>
    <input type="phone" name="Phone" id="Phone" placeholder="Enter your Phone Number "><br>
<textarea name="Other" id="Other" cols="30" rows="10" placeholder="Enter any other information here ">
</textarea><br>
<button class="btn"> Submit</button>

</form>
</center>

<div class="pageBreak"> </div>
<div>
<br> <br> <br> <br> <br>
<p style="background-color:black; height:50px;">
   <b>  Made with <3 By Khushi :) </b> </p>
</div>
</div>
<script src="index.js"> </script>
</body>
</html>

