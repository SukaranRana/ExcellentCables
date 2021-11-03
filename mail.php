<?php
    $admin_email="sukaranrana.rana@gmail.com";
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $quantity=$_POST['quantity'];
    $message=$_POST['message'];
    
    if($email!=NULL){
        mail($admin_email,"New Customer Message",$message . '-' . $mobile, "From:" . $email);
    }

    header('Location: http://www.google.com');
       
?>
