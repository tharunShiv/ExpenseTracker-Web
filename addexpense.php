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
      <script type="application/javascript" src="js/app.js" ></script>
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
               <li class="listl" ><a href="addexpense.php" id="current">Add New Expense</a></li><br/>
               <li class="listl"><a href="addincome.php">Add New Income</a></li><br/>
               <li class="listl"><a href="showexpense.php">Show Expenses</a></li><br/>
               <li class="listl"><a href="showincome.php">Show Incomes</a></li><br/>
               <li class="listl"><a href="starttrip.php">Start a new Trip</a></li><br/>
               <li class="listl"><a href="smartdivider.php" >Smart Divider</a></li>
           </ul>
       </aside>
       <div class="aexpense">
           <form method="post" action="addexpense.php">
               Select Currency:<br/><select name="currency">
                   <option value="INR">INR</option>
                   <option value="USD">USD</option>
                   <option value="OTHER">OTHER</option>
               </select>
               Expense : <input type="text" name="expense" placeholder="Enter the expense" class="tfield" />
               <br/><br/>
               Income : <input type="text" name="income" placeholder="Enter the income" class="tfield" /><br/><br/> 
               Comments<br/> <textarea placeholder="Enter Comments(if any)" style="width:95%;height:50px;" name="comments"></textarea>
               <br/><br/>Choose Catagory : <select name="catagory">
                   <option value="food">FOOD</option>
                   <option value="travel">TRAVEL</option>
                   <option value="beverages">BEVERAGES</option>
                   <option value="medicines">MEDICINES</option>
                   <option value="mis">MISCELLANEOUS</option>
                   <option value="groceries">GROCERIES</option>
               </select>
               <br/><br/>
               <input type="submit" value="Save" name="save" id="saveae" />
               
           </form>
       </div>
       <p id="result">
           
       </p>
   
   
   <?php
      
     
    if(isset($_POST['save'])){ 
        $expense= $_POST['expense'];
        $currency=$_POST['currency'];
        $income = $_POST['income'];
        $comments = $_POST['comments'];
        $catagory = $_POST['catagory'];
        $usrname = $_SESSION["username"];
    
     /*   echo "Expense entered".$expense;
        //expense
            $query = "SELECT * FROM expenditure WHERE username='$usrname'";
        //to run the query
           //echo $query;
            $query_run = mysqli_query($con,$query);
                   if(mysqli_num_rows($query_run)>0){
                      //   echo 'Username Exists and it works!!';
                       $getinfo = "select expense, income, currency, catagory,comments from expenditure where username ='$usrname' ";

                       $query = mysqli_query($con,$getinfo);

          $row = mysqli_fetch_array($query);
//existing data
$e= $row['expense'];
$i= $row['income'];
$cur= $row['currency'];
$cat= $row['catagory'];
$com= $row['comments'];                       
                       

echo "Expense: ".$e."  ";
echo "Income: ".$i."  ";
echo "Currency: ".$cur." ";
echo "Catagory: ".$cat." ";
echo "Comments: ".$com." ";                       
             
//$eu = unserialize($e);
  //  echo "Unserialized".$eu;
        
                       
        echo("Not an array");
        $ea = array("$e","$expense");
        print_r($ea);
        $es=serialize($ea);
        echo " ".$es;
        
        $ia = array("$i","$income");
        $is=serialize($ia);
        
        $cura = array("$cur","$currency");
        $curs=serialize($cura);
        
        $cata = array("$cat","$catagory");
        $cats=serialize($cata);
        
        $coma = array("$com","$comments");
        $coms=serialize($coma);
        
        $usrname = $_SESSION['username'];
        
        $query = "UPDATE expenditure SET expense = '$es', currency = '$curs', income = '$is', comments = '$coms', catagory= '$cats'  WHERE username='$usrname'";           
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
        
    

                   } 
                   else
                   {*/
        
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