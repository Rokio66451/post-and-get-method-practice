<?php
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

<div>
    
echo "your first name is:" ,"<strong>" ,$fname , "</strong>", "<br>";
echo "your last name is: "  ,"<strong>" ,$lname, "</strong>", "<br>";
echo "your email address is:" ,"<strong>" ,$email, "</strong>", "<br>";
    
</div>

}
?>

