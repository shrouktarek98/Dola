<?php
$firstname = $_REQUEST['first'];
$lastname = $_POST['last'];
$e_mail = $_POST['email'];
$username = $_POST['uid'];
$password = $_POST['pwd'];
if($firstname && $lastname && $e_mail && $username && $password){
    $conn= mysqli_connect("localhost","root","","shrouk")or die ("no databass called shrouk");
    $select ="select * from users where username = '$username'";
    $found = mysqli_query($conn,$select);
    $count = mysqli_num_rows($found);
    if($count!=0){
        
        include "signup.php";
        echo "invalid username"; 
    }
    else{
        mysqli_query($conn,"INSERT INTO users (first_name, last_name, email,username,passwordd) values(
            '$firstname','$lastname','$e_mail','$username','$password')"); 
        include "home.php";
    }
    
}
else{
    include "signup.php";
}
?>