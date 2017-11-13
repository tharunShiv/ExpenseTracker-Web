<?php
  //establish connection
	session_start();
//the config file
//establish connection
	require_once('dbconfig/config.php');
	//phpinfo();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=1"/>
</head>
<body class="breg">
  
       <header class="hreg">
        <h1>Ex<span style="color:green">track</span></h1>
        <p>Your All New Expense Tracker</p>
        <form method="get" action="home.php">
           <label style="float:left; font-size:20px;margin-left:3%;">Welcome <span style="color:green;font-weight:bolder"><?php echo $_SESSION["username"]; ?></span></label>
            <a href="logout.php"><input type="button" id="logout" value="logout" name="logout" /></a>
        </form>
       </header>
       
       <aside class="aside">
         
           <ul  class="lista"><br/><br/>
               <li class="listl" ><a href="addexpense.php" >Add New Expense</a></li><br/>
               <li class="listl"><a href="addincome.php" >Add New Income</a></li><br/>
               <li class="listl"><a href="showexpense.php">Show Expenses</a></li><br/>
               <li class="listl"><a href="showincome.php">Show Incomes</a></li><br/>
               <li class="listl"><a href="starttrip.php">Start a new Trip</a></li><br/>
               <li class="listl"><a href="smartdivider.php" >Smart Divider</a></li>
           </ul>
       </aside>
       
        <div class="wrapper">
            <div class="e1">
                <h2><a href="">Add New Expense</a></h2>
                <ul>
                    <li>Update your Daily Expenses Here</li>
                    <li>Choose the catagory </li>
                    <li>Save them</li>
                    <li>Sort it according to Year, Week, Day or more</li>
                    <li>Get Pie charts,graphs.</li>
                </ul>
            </div>
            <div class="e2">
                <h2><a href="">Show Expense</a></h2>
                <ul>
                    <li>See your Expenses</li>
                    <li>Sort it according to catagories </li>
                    <li>Sort it according to Year, Week, Day or more</li>
                    <li>Get Pie charts , graphs of your expense here</li>
                </ul>
            </div>
        <div class="e3">
            <h2><a href="">Start a new Trip</a></h2>
                <ul>
                    <li>Start a fresh database</li>
                    <li>It doesnt affect your Personal Data,if u like that </li>
                    <li>Save them</li>
                    <li>Get Pie charts , graphs of your expense here</li>
                </ul>
            </div>
            <div class="e1">
                <h2><a href="">Smart Divider</a></h2>
                <ul>
                    <li>Choose the number of friends</li>
                    <li>Enter their names and their expenditure</li>
                    <li>Get detailed expenditure table</li>
                    <li>Learn who owes whom, in a click away</li>
                </ul>
            </div>   
        </div>
  
<!--php-->
   
</body>
</html>