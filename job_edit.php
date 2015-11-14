<?php
 session_start();
    if(!isset($_SESSION['username'])){
    header("Location:Login.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CS Connect</title>
    <link rel="stylesheet" href="newStyles.css">
    <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        table#t01 tr:nth-child(even) {
            background-color: #eee;
        }
        table#t01 tr:nth-child(odd) {
            background-color:#fff;
        }
        table#t01 th	{
            background-color: #782f40;
            color: white;
        }
        .headcol {
            width:5em;
            top:auto;
        }
    </style>    
</head>
<body>
    <header>
        <img src="newSeal.png" alt="Florida State University Seal" width="189" height="81">
    </header>
    
    <nav>
        <ul>
            <li><a href="" title="Home" class="main">Home</a></li>
            <li><a href="" title="Settings" class="main">Settings</a></li>
        </ul>
    </nav>

    <div id="cover">
    
    <div id="infobar">
        <a href="logout.php" title="Logout" class="logout">Logout</a>
    </div>
        
    <div id="feed">
          
        <table id="t01">
            <caption><h2>Job Edit</h2></caption>
                <tr>
                    <th class="headcol">Title</th>
                    <td>
                        <div contenteditable>Edit me</div>
                    </td>
                </tr>
                <tr>
                    <th class="headcol">Position</th>
                    <td>
                        <div contenteditable>Edit me</div>
                    </td>
                </tr>
                <tr>
                    <th class="headcol">Type</th>
                    <td>
                        <select>
                            <option value="Full-Time" selected>Full-Time</option>
                            <option value="Part-Time">Part-Time</option>
                            <option value="Internship">Internship</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th class="headcol">Salary</th>
                    <td>
                        <div contenteditable>Edit me</div>
                    </td>
                </tr>               
                <tr>
                    <th class="headcol">City</th>
                    <td>
                        <div contenteditable>Edit me</div>
                    </td>
                </tr>
                <tr>
                    <th class="headcol">Descritpion</th>
                    <td>
                        <div contenteditable>Edit me</div>
                    </td>
                </tr>
                <tr>
                    <th class="headcol">Basic Qualifications</th>
                    <td>
                        <div contenteditable>Edit me</div>
                    </td>
                </tr>
                <tr>
                    <th class="headcol">Preffered Qualifications</th>
                    <td>
                        <div contenteditable>Edit me</div>
                    </td>
                </tr>
            </table>
        
            <!-- <?php include "comp_home_scr.php" ?> -->
            
        </table>
          
    </div>
    
    <div id="links">
        <ul id="otherlist">
            <li><a href="" title="CS Homepage" class="navaway">CS Homepage</a></li>
            <li><a href="" title="Systems Group" class="navaway">Systems Group</a></li>
            
        </ul>
    </div>
        
    <div class="clearfix"></div>
        
    </div>
    
    <footer>
        <br>
        © 2015 Florida State University <br>
        600 W. College Avenue <br>
        Tallahassee, FL 32306 <br>
    </footer>
        
</body>
</html>