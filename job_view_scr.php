<?php
    //include 'job_edit_submit_scr.php';
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db("csconnect", $connection);
    //$JID = $_POST['JID'];
    $JID = 2;
    

    $result=mysql_query("SELECT *
                          FROM jobs
                          WHERE Job_ID='$JID'", $connection);

    ($row = mysql_fetch_assoc($result));
        
    echo '<form method="post"><tr>
            <th class="headcol">Title</th>
            <td class="tailcol">'.$row['Title'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Position</th>
            <td class="tailcol">'.$row['Position_Title'].'</td></tr>';     
    echo '<tr>
            <th class="headcol">Type</th>
            <td class="tailcol">'.$row['Type'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Location</th>
            <td class="tailcol">'.$row["City"].', '.$row["State"].'</td></tr>';
    echo '<tr>
            <th class="headcol">Company</th>
            <td class="tailcol">'.$row['name'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Salary</th>
            <td class="tailcol">'.$row['Salary'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Url</th>
            <td class="tailcol"><a href="http://'.$row['url'].'">'.$row['url'].'</a></td></tr>';
    echo '<tr>
            <th class="headcol">Description</th>
            <td class="tailcol">'.$row['Description'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Basic Qualifications</th>
            <td class="tailcol">'.$row['Basic_Qual'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Preferred Qualifications</th>
            <td class="tailcol">'.$row['Pref_Qual'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Posted</th>
            <td class="tailcol">'.$row['Post_Date'].'</td></tr></table>';

    mysql_close($connection);
?>