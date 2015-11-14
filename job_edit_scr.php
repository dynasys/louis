<?php
    $JID = $_POST['JID'];

    $query = mysql_query("SELECT Title, Position_Title, Type, City, Post_Date 
                          FROM jobs
                        WHERE Job_ID='$JID'", $connection);

    while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
        // echo table
    }
?>