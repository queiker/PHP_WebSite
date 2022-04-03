<?php
session_start();
$_SESSION['logged'] = 0;

if(isset($_POST['submit'])){
    if($_POST['username'] == "queiker" &&
    $_POST['password'] =="queiker"){
        $_SESSION['logged']=1;
        header('Location: index.php');

    }
}else{
    echo "Zła kombinacja loginu i hasła";
}




?>