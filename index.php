<?php
session_start();
require_once 'script/script.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!empty($_POST['email'])){
        $email=$_POST['email'];
    }
    if(!empty($_POST['password'])){
        $psw=$_POST['password'];
    }
    if(preg_match("/^.+@.+\.[a-z]{2,}$/",$email)){
        echo "TRUE";
    }else{
        echo "False";
    }
}
?>