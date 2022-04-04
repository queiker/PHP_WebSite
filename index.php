<?php
include("functions.php");
bootstrap();


session_start();
if( isset($_SESSION['logged'])&& $_SESSION['logged']== 1){
you_are_logged_in();

head();
body();
footer();


}else{

    login();

}
?>