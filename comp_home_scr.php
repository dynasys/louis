<?php
// populate table with all jobs
//session_start();
//$error= "<b>Username or password is incorrect</b>";//error message
//if(isset($_POST['login'])){
    
    $connection = mysql_connect("localhost", "root", "");

    //select db
    $db = mysql_select_db("csconnect", $connection);
    
    $compUser = $_SESSION['username'];
    
    //get company_ID
    $compID = mysql_query("SELECT Company_ID 
                           FROM company 
                           WHERE username='$compUser'", $connection);
    
    // specify the row in tmp and then grab the number
    $tmp = mysql_fetch_row($compID);
    $compID = $tmp[0];
    
    $query = mysql_query("SELECT Title, Position_Title, Type, City, Post_Date 
                          FROM jobs
                        WHERE Company_ID='$compID'", $connection);

    while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
        echo '<tr>';
            echo '<td>' . $row["Title"]  . '</td>';
            echo '<td>' . $row["Position_Title"]  . '</td>';
            echo '<td>' . $row["Type"]  . '</td>';
            echo '<td>' . $row["City"]  . '</td>';
            echo '<td>' . $row["Post_Date"]  . '</td>';
            echo '<td><button type="button">Edit</button><button type="button">Delete</button></td>';
        echo '</tr>';
        }

    mysql_free_result($query);
    
    mysql_close($connection);
    
//}
?>