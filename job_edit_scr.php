<?php
    //include 'job_edit_submit_scr.php';
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db("csconnect", $connection);
    //$JID = $_POST['JID'];
    $JID = 1;
    $query = mysql_query("SELECT Job_ID, Title, Position_Title, Type, Salary, City, 
                                 State, url, Description, Basic_Qual, Pref_Qual 
                          FROM jobs
                          WHERE Job_ID='$JID'", $connection);
    $row = mysql_fetch_row($query);
    $JID = $row[0];
    $title = $row[1];
    $pos = $row[2];
    $type = $row[3];
    $sal = $row[4];
    $city = $row[5];
    $state = $row[6];
    $url = $row[7];
    $desc = $row[8];
    $basic = $row[9];
    $pref = $row[10];

    //echo the table
    echo '<form method="post"><tr>';
        echo '<th class="headcol">Title</th>';
        echo '<td class="tailcol"><textarea rows="1" cols="95">'. $title .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Position</th>';
        echo '<td class="tailcol"><textarea rows="1" cols="95">'. $pos .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Type</th>';
        echo '<td class="tailcol"><select>';
    if($type == "Internship"){
        echo '<option value="internship">Internship</option>
              <option value="full-time">Full-Time</option>
              <option value="part-time">Part-Time</option>';
    }elseif ($type == "Full-Time"){
        echo '<option value="full-time">Full-Time</option>
              <option value="internship">Internship</option>
              <option value="part-time">Part-Time</option>';
    }else{
        echo '<option value="part-time">Part-Time</option>
              <option value="full-time">Full-Time</option>
              <option value="internship">Internship</option>';
    }
    echo '</select></td></tr>';
    
    echo '<tr>';
        echo '<th class="headcol">Salary</th>';
        echo '<td class="tailcol"><textarea rows="1" cols="95">'. $sal .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">City</th>';
        echo '<td class="tailcol"><textarea rows="1" cols="95">'. $city .'</textarea></td>';
    echo '</tr>';

    echo '<tr>';
        echo '<th class="headcol">State</th>';
        echo '<td class="tailcol"><textarea rows="1" cols="95">'. $state .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Url</th>';
        echo '<td class="tailcol"><textarea rows="1" cols="95">'. $url .'</textarea></td>';
    echo '</tr>';

    echo '<tr>';
        echo '<th class="headcol">Description</th>';
        echo '<td class="tailcol"><textarea rows="5" cols="95">'. $desc .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Basic Qualifications</th>';
        echo '<td class="tailcol"><textarea rows="5" cols="95">'. $basic .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Preferred Qualifications</th>';
        echo '<td class="tailcol"><textarea rows="5" cols="95">'. $pref .'</textarea></td>';
    echo '</tr></table>';

    echo '<form class="subut">
          <input type="hidden" name="JID" value="'.$JID.'" >
          <input type="submit" value="submit" name="submit">
          <input type="submit" value="cancel" name="cancel">
          </form>';

/*
    echo '<tr>';
        echo '<th class="headcol">Title</th>';
        echo '<td class="tailcol"><div contenteditable id="title">'. $row[1] .'</div></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Position</th>';
        echo '<td class="tailcol"><div contenteditable id="pos">'. $row[2] .'</div></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Type</th>';
        echo '<td class="tailcol"><div contenteditable id="type">'.$row[3]  .'</div></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Salary</th>';
        echo '<td class="tailcol"><div contenteditable id="salary">'. $row[4] .'</div></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">City</th>';
        echo '<td class="tailcol"><div contenteditable id="city">'. $row[5] .'</div></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Description</th>';
        echo '<td class="tailcol"><div contenteditable id="desc">'. $row[6] .'</div></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Basic Qualifications</th>';
        echo '<td class="tailcol"><div contenteditable id="basicQual">'. $row[7] .'</div></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Preferred Qualifications</th>';
        echo '<td class="tailcol"><div contenteditable id="prefQual">'. $row[8] .'</div></td>';
    echo '</tr>';
    echo '<form method="post">
                <input type="hidden" name="JID" value="'.$JID.'" >
                <input type="submit" value="submit" name="submit">
                <input type="submit" value="cancel" name="cancel">
          </form>';
  
*/
?>