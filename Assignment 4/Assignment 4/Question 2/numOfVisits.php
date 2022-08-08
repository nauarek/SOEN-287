<?php   
   if (!isset($_COOKIE['accesses'])) { 
    $add = 1;
    setcookie("accesses", $add);
    setcookie("accessTime", date('l jS \of F Y h:i:s A'));
    print "Welcome to my webpage! It is your first time that you are here."; 
  }else{
    $add = ++$_COOKIE["accesses"];
    setcookie("accesses", $add);
    date_default_timezone_set('America/Toronto');
    setcookie("accessTime", date('l jS \of F Y h:i:s A')); 
    print "Hello, this is the " .$_COOKIE["accesses"]. " time that you are visiting my webpage";
    print "<br>";
    print "<i><b>Last time you visited my webpage on: " .$_COOKIE["accessTime"]. " EST</b></i>"; 
    }

?>