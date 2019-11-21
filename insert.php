<?php

$con = mysqli_connect('localhost', 'root', '', 'rokio');

if(!$con){
    echo "Unable to connect to the database";
}
else 
    echo "you are successfully connected to the database";


if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
    
}



$sql = "INSERT INTO person(fname, lname, email) VALUES('fname', 'lname', 'email')";

if(!mysqli_query($con, $sqli )){

echo "faiiled to insert data";

}
else {
    
    echo "data successfully insered into rokio table";
}


?>