<?php

function head(){

    print("<br>");
    print("<hr>");
    print("<center>");
    print("Header");
    print("</center>");
    print("<hr>");
    print("<br>");
}

function footer(){

    print("<br>");
    print("<hr>");
    print("<center>");
    print("Footer");
    print("</center>");
    print("<hr>");
    print("<br>");
}

function login(){
    print("
    <center>
    <form method=\"POST\" action=\"login.php\">
    <input type=\"text\" name=\"username\" placeholder=\"Login\"><br>
    <input type=\"password\" name=\"password\"><br>
    <input type=\"submit\" name=\"submit\" value=\"Wyślij\"><br>
    </form>
    </center>
    
    ");
    
}





function menu(){
    print("Menu <br>");

    menu_item_begin();
    menu_item("pierwszy punikt");

    menu_item("drugi punkt punikt");
    menu_item("trzeci punkt punikt");

    menu_item_end();

    
}

function menu_item($item_name){
    $string = "<li>". $item_name ."</li>";
    print($string);
}

function menu_item_begin(){
    print("<ul>");
}

function menu_item_end(){
    print("</ul>");
}


function website(){
    print("Website");
}



function body(){
    print("<table >");
    print("<tr><td>");
    
    menu();
    
    print("</td><td>");

    
    website();

    print("</td></tr>");
    
    print("</table>");
    
    
   
}

function bootstrap (){
    print("<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>");
}



?>
