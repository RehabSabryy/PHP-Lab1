<?php

// Task 2: Use constant to display your website name which mustn’t change across your pages.
    define("WEBSITE_NAME", "<h1>PHP Course</h1>");
    echo WEBSITE_NAME;
    echo "<br>";

// -   Show your server name, address and port.
//     also the filename and path of the currently executing script.
    // Show the server name, address, and port

        echo "Server name:".$_SERVER['SERVER_NAME'];
        echo "<br>";
        echo "Server addess:".$_SERVER['SERVER_ADDR'];
        echo "<br>";
        echo "Server port:".$_SERVER['SERVER_PORT'];
        echo "<br>";
     // Show the filename and path of the currently executing script
        echo "Filename:".$_SERVER['PHP_SELF'];
        echo "<br>";
        echo "Script name:".$_SERVER['SCRIPT_FILENAME'];
        echo "<br>";
        echo __FILE__;

// -   Your brother is 10 years old, If you know that :
// age less than 5 --> Print Msg --> Stay at home,
// age equal 5 --> Print Msg --> Go to Kindergarden,
// age between 6 & 12 --> Print Msg --> Go to grade :XXX
// (Use switch case).  
echo "<br>"; 
$age = 10;
switch ($age) {
    case  $age<5 :
        echo "Stay at home";
        break;
    case 5 :
        echo "Go to Kindergarden";
        break;
    case $age>=6 && $age<=12 :
        echo "Go to grade : ".$age;
        break;   
    default:
        echo "Invalid age"; 
}
echo "<br>";
// Task 1: Show your phpinfo on browser. 
phpinfo();

?>