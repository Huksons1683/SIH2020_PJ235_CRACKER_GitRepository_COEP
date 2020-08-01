<?php
session_start();
$h=mysqli_connect('localhost', 'root', '', 'register_login');
if(isset($_POST['submit'])) {

    $email = $_POST['email'];
    $_SESSION['email']=$email;
$q="select * from user_login";
$r=mysqli_query($h,$q);
    $as=0;
while($a=mysqli_fetch_array($r))
{
    if($a[3] == $email)
    {
        $_SESSION['id']=$a[0];
        header('location:mail.php');
        
        $as=1;
    }
}
     if($as==0){
         
         echo" This mail not registered";
     }
}
 
?>