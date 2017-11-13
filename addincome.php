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
               <li class="listl"><a href="addincome.php" id="current">Add New Income</a></li><br/>
               <li class="listl"><a href="showexpense.php">Show Expenses</a></li><br/>
               <li class="listl"><a href="showincome.php" >Show Incomes</a></li><br/>
               <li class="listl"><a href="starttrip.php">Start a new Trip</a></li><br/>
               <li class="listl"><a href="smartdivider.php" >Smart Divider</a></li>
           </ul>
       </aside>
       
       <div class="aexpense">
           <form method="POST" action="addincome.php">
               Select Currency:<br/><select name="currency">
                   <option value="INR">INR</option>
                   <option value="USD">USD</option>
                   <option value="OTHER">OTHER</option>
               </select>
               Income : <input type="text" name="income" placeholder="Enter the Income" class="tfield" />
               <br/><br/>
               Comments<br/> <textarea name="comments" placeholder="Enter Comments(if any)" style="width:95%;height:50px;"></textarea>
               <br/><br/>Choose Catagory : <select name="catagory">
                   <option value="food">SALARY</option>
                   <option value="travel">POCKET MONEY</option>
                   <option value="beverages">GIFT</option>
                   <option value="medicines">AWARD</option>
                   <option value="mis">PRIZE</option>
                   <option value="groceries">OTHER</option>
               </select>
               <br/><br/>
               <input type="submit" name="save" value="Save" id="saveae" />
               
           </form>
       </div>
       
       <?php
       
        if(isset($_POST['save'])){ 
        
        $currency=$_POST['currency'];
        $income = $_POST['income'];
        $comments = $_POST['comments'];
        $catagory = "none";
        $usrname = $_SESSION["username"];
            $expense = 0;
    
           $query = "insert into expenditure values('$usrname','$expense','$currency','$income','$comments','$catagory')";           
                          $query_run = mysqli_query($con,$query);                        
                                       if($query_run)
				                                             {
                                                              echo '<script type="text/javascript">
							 									   alert("data saved");
							 									   </script>';
                                                             }
                                                          else{
                                                              echo '<script type="text/javascript">
								 								   alert("Error saving the data");
								 								   </script>';
                                                          }                   
        } else {
            
        }
       
       ?>
    
</body>
</html>