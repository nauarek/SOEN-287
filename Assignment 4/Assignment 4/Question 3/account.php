<?php

$loginTxt = file('users.txt');
if(isset($_POST["submit"])){
    $userName = $_POST['userName'];
    $userPass = $_POST['userPass'];
    $file = file_get_contents('users.txt'); 
    //I add the | here in the case someone uses a password that could match the username trying to be inputted
    $search = $userName.':'; 
    if(strpos($file, $search)){ 
        print "<h1> The User Name you inputted is already in use, please input another! </h1>";
        print "<a href='create-account'> Go back </a>";
    } 
    else{
        //enter in the format uName|uPass and then a new line
        $input = $userName . '|' . $userPass + '\n';
        $fp = fopen($loginTxt,'a+');
        fwrite($fp,$input);
        fclose($fp);
        echo "Success, wrote ($input) to file ($loginTxt)";
  }
}


?>