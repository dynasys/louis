<?php
//error_reporting(E_ALL);
if(isset($_POST['submit'])){
    $JID = $_POST['JID'];
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db ("csconnect", $connection);

    
}
?>