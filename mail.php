<?php
if(isset($_POST['email'])){
    $admin_email="sukaranrana.rana@gmail.com";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $quantity=$_POST['quantity'];
    $message=$_POST['message'];

    mail($admin_email,"New Customer Message",$message . '-' . $mobile, "From:" . $email);

    header('Location: http://www.google.com');
       
}
?>