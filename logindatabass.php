<?php
$username =$_POST['first'];
$password =$_POST['pwd'];
$conn=mysqli_connect("localhost","root","","shrouk")or die ("no databass called shrouk");
$select = "select * from users where  username = '$username '";
$total = mysqli_query($conn,$select);
$num = mysqli_num_rows($total);
if($num==0){
    echo "username is not valid";
}
while($rows=mysqli_fetch_assoc($total)){
    if($username == $rows['username'] )
    {
        if($password == $rows['passwordd']){
            echo "sucess";
        }
        
        else include "home.php";
        echo "invalid password";
        
    }
    else echo "username isnot valid";
}
?>