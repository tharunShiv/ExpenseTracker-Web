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
    <title>Add Expenses</title>
    <link href="css/style.css?v=1" rel="stylesheet" type="text/css"/>
</head>

   <body class="breg">
  
       <header class="hreg">
        <h1>Ex<span style="color:green">track</span></h1>
        <p>Your All New Expense Tracker</p>
        <form >
          <label style="float:left; font-size:20px;margin-left:3%;">Welcome <span style="color:green;font-weight:bolder"><?php echo $_SESSION["username"]; ?></span></label>
           <a href="logout.php"><input type="button" id="logout" value="logout" name="logout" /></a>
        </form>
       </header>
       
    <aside class="aside">
           <ul  class="lista"><br/><br/>
               <li class="listl" ><a href="addexpense.php" >Add New Expense</a></li><br/>
               <li class="listl"><a href="addincome.php">Add New Income</a></li><br/>
               <li class="listl"><a href="showincome.php">Show Expenses</a></li><br/>
               <li class="listl"><a href="showincome.php">Show Incomes</a></li><br/>
               <li class="listl"><a href="starttrip.php" id="current">Start a new Trip</a></li><br/>
               <li class="listl"><a href="smartdivider.php" >Smart Divider</a></li>
           </ul>
       </aside>
       
       <div class="aexpense">
           <form method="POST" action="">
              Choose Start Date:<br/><input type="date"/>
              <br/>
              Choose End Date:
              <br/><input type="date"/><br/><br/>
               Select Currency:<br/><select>
                   <option value="INR">INR</option>
                   <option value="USD">USD</option>
                   <option value="OTHER">OTHER</option>
               </select>
               Total Expense : <input type="text" placeholder="Enter the expense" class="tfield" />
               <br/><br/>
               Comments<br/> <textarea placeholder="Enter Comments(if any)" style="width:95%;height:50px;"></textarea>
               <br/><br/>
               Name This Trip:<br/><input type="text" placeholder="ex:A Ride to Coorg"/>
               <br/><br/><input type="submit" value="Save" id="saveae" />
               
           </form>
       </div>
    
</body>
</html>