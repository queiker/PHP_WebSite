<?php
include("functions.php");
bootstrap();


session_start();
if( isset($_SESSION['logged'])&& $_SESSION['logged']== 1){
print("<center>Jestes zalogowany</center>");
print("<center><a href=\"/logout.php\">WYLOGUJ</a></center>");

head();
body();
footer();


}else{

    login();

}
?>