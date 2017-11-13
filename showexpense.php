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
    <title>ShowExpense</title>
    <link rel="stylesheet" href="css/style.css?v=2" type="text/css"/>
    <style>
        th{
            color:white;
            font-weight:bold;
            
        }
        table{
            border:2px dashed white;
            border-radius:10%;
            border-spacing:13px;
        }
        .rexpenses{
    max-height: 450px;
    overflow-y: scroll;
}
       
    </style>
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
               <li class="listl"><a href="addincome.php" >Add New Income</a></li><br/>
               <li class="listl"><a href="showincome.php" id="current">Show Expenses</a></li><br/>
               <li class="listl"><a href="showincome.php">Show Incomes</a></li><br/>
               <li class="listl"><a href="starttrip.php">Start a new Trip</a></li><br/>
               <li class="listl"><a href="smartdivider.php" >Smart Divider</a></li>
           </ul>
       </aside>
       
       <div class="showex">
           <h2>Recent Expenses</h2>
           <div class="rexpenses">
              <?php
                  
               echo '<table><tr><th>Comments</th><th>Currency</th><th>Expense</th><th>Catagory</th></tr>';
                $totalexpense = 0;
                  $username = $_SESSION['username'];
             $q = mysqli_query($con, "SELECT * FROM expenditure where username='$username' ");
             while($row = mysqli_fetch_assoc($q)){
                $comments = $row['comments'];
                 $expense = $row['expense'];
                 $catagory = $row['catagory'];
                 $currency = $row['currency'];
                 if($expense==='0'){
                     
                 }else{
                     $totalexpense = $totalexpense + $expense;
                    //echo $comments.' ~ ',$expense.' ~ '.$catagory.'<br/>'; 
                     echo '<tr><td> '.$comments.' </td><td> '.$currency.'</td><td>'.$expense.' </td><td> '.$catagory.' </td></tr>';
                 }
                 
             }echo '</table>';
               ?>
              
              
              
              
              <!--
               <ol>
                  <li>14/07/2017 ~ Milk ~ Rs.36</li>
                  <li>12/07/2017 ~ Cheese ~ Rs.360</li> 
                  <li>11/07/2017 ~ Cake ~ Rs.200</li> 
                  <li>10/07/2017 ~ Travel ~ Rs.3600</li> 
                  <li>9/07/2017 ~ Tour ~ Rs.3300</li> 
                  <li>8/07/2017 ~ Travel ~ Rs.3600</li> 
                  <li>4/07/2017 ~ Fuel ~ Rs.226</li> 
                  <li>4/07/2017 ~ Fuel ~ Rs.200</li> 
                  <li>4/07/2017 ~ Food ~ Rs.360</li> 
                  <li>1/07/2017 ~ Milk ~ Rs.36</li> 
                  <li>1/07/2017 ~ Cheese ~ Rs.360</li> 
                  <li>1/07/2017 ~ Milk ~ Rs.36</li>
                  <li>14/06/2017 ~ Milk ~ Rs.36</li>
                  <li>12/06/2017 ~ Cheese ~ Rs.360</li> 
                  <li>11/06/2017 ~ Cake ~ Rs.200</li> 
                  <li>10/06/2017 ~ Travel ~ Rs.3600</li> 
                  <li>9/06/2017 ~ Tour ~ Rs.3300</li> 
                  <li>8/06/2017 ~ Travel ~ Rs.3600</li> 
                  <li>4/06/2017 ~ Fuel ~ Rs.226</li> 
                  <li>4/06/2017 ~ Fuel ~ Rs.200</li> 
                  <li>4/06/2017 ~ Food ~ Rs.360</li> 
                  <li>1/06/2017 ~ Milk ~ Rs.36</li> 
                  <li>1/06/2017 ~ Cheese ~ Rs.360</li> 
                  <li>1/06/2017 ~ Milk ~ Rs.36</li>
                  <li>14/05/2017 ~ Milk ~ Rs.36</li>
                  <li>12/05/2017 ~ Cheese ~ Rs.360</li> 
                  <li>11/05/2017 ~ Cake ~ Rs.200</li> 
                  <li>10/05/2017 ~ Travel ~ Rs.3600</li> 
                  <li>9/05/2017 ~ Tour ~ Rs.3300</li> 
                  <li>8/05/2017 ~ Travel ~ Rs.3600</li> 
                  <li>4/05/2017 ~ Fuel ~ Rs.226</li> 
                  <li>4/05/2017 ~ Fuel ~ Rs.200</li> 
                  <li>4/05/2017 ~ Food ~ Rs.360</li> 
                  <li>1/05/2017 ~ Milk ~ Rs.36</li> 
                  <li>1/05/2017 ~ Cheese ~ Rs.360</li> 
                  <li>1/05/2017 ~ Milk ~ Rs.36</li>   
               </ol> -->
           </div>
       <br/>
            <h2>Total Expense This Month</h2>
            <?php
              echo '<p style="color:white;font-size:25px;"> INR.'.$totalexpense. '</p>'
           ?>
             <br/>
       <br/>
           
               <h2>Top 3 Most Expensive</h2>
               <ol>
                   <li>10/07/2017 ~ College Fees ~ Rs.80000</li>
                   <li>8/07/2017 ~ Travel ~ Rs.3600</li>
                   <li>9/07/2017 ~ Tour ~ Rs.3300</li> 
               </ol>
           
         
             <h2>Expense compared to previous month</h2>
             <p>Rs.1023 spent more than previous month </p> 
        </div>   
</body>
</html>