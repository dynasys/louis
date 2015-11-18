<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CS Connect</title>
    <link rel="stylesheet" href="temp.css">
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
        .cjobut{
            text-align: right;
        }
    </style>
</head>
<body>
    <header>
        <img src="newSeal.png" alt="Florida State University Seal" width="189" height="81">
    </header>
    
    <nav>
        <ul>
            <li><a href="home.htm" title="Home" class="main">Home</a></li>
            <li><a href="profileView.htm" title="Profile" class="main">Profile</a></li>
            <li><a href="search.htm" title="Jobs" class="main">Jobs</a></li>
            <li><a href="" title="Alerts" class="main">Alerts</a></li>
            <li><a href="" title="Settings" class="main">Settings</a></li>
        </ul>
    </nav>

    <div id="cover">
    
        <div id="infobar">
            Welcome <a href="" title="Logout" class="logout">Logout</a>
        </div>
    
        <form method="post" action='' id="search_box" class='search'>
            <!--
            <label for="intern">Internship</label>
            <input type="radio" name="type" id="intern" value="intern">
            <label for="full">Full-Time</label>
            <input type="radio" name="type" id="full" value="full">
            <label for="part">Part-Time</label>
            <input type="radio" name="type" id="part" value="part">
            -->
            <select name="jobType">
                <option value="Internship" selected>Internship</option>
                <option value="Full-time">Full-Time</option>
                <option value="Part-time">Part-Time</option>
            </select>
            
            <select name="logic1">
                <option value="AND" selected>AND</option>
                <option value="OR">OR</option>
            </select>
            
            <br>
            <input type="text" name="feild1" id='field1'>
            
            <select name="option1">
                <option value="Title" selected>Title</option>
                <option value="Position_Title">Position</option>
                <option value="City">City</option>
                <option value="State">State</option>
                <option value="name">Company</option>
                <option value="Description">Descritption</option>
                <option value="Basic_Qual">Qualifications</option>
            </select>
            
            <br>
            <select name="logic2">
                <option value="AND" selected>AND</option>
                <option value="OR">OR</option>
            </select>
            
            <input type="text" name="feild2" id='feild2'>
            
            <select name="option2">
                <option value="Title" selected>Title</option>
                <option value="Position_Title">Position</option>
                <option value="City">City</option>
                <option value="State">State</option>
                <option value="name">Company</option>
                <option value="Description">Descritption</option>
                <option value="Basic_Qual">Qualifications</option>
            </select>
            
            <br>
            <select name="logic3">
                <option value="AND" selected>AND</option>
                <option value="OR">OR</option>
            </select>
            
            <input type="text" name="feild3" id='field3'>
            
            <select name="option3">
                <option value="Title" selected>Title</option>
                <option value="Position_Title">Position</option>
                <option value="City">City</option>
                <option value="State">State</option>
                <option value="name">Company</option>
                <option value="Description">Descritption</option>
                <option value="Basic_Qual">Qualifications</option>
            </select>
            
            <br>
            <input type="Submit" value="Search" name="Search">
			
			<?php
			include 'SearchScript.php'
			?>
			
        </form>
        
        
        
        <div id="results"></div>
            
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
