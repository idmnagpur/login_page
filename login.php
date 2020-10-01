<?php
    //use database if you can
    if($_POST['email']=='test@gmail.com'&&$_POST['password']=='123456'){
        echo "logged in";
    }else{
        echo "Invalid Credentials";
    }
//this is logic of simple login
?>