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
    <title>Welcome!</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=1"/>
</head>
<body>
    <header>
        <h1>Ex<span style="color:green">track</span></h1>
        <p>Your All New Expense Tracker</p>
        <form id="loginF" method="POST" action="index.php">
            <label><strong>Username:</strong></label>
            <input type="text" class="tfield" placeholder="username" name="username" required autofocus />
            <label><strong>Password:</strong></label>
            <input type="password" class="tfield" placeholder="password" name="password" required />
            <input type="submit" id="login" name="login" value="LogIn"  />
            
        </form>
    </header>
    
    
    
    <section>
        <div class="container">
            <div id="quote">
            <h1>Hooray!</h1>
            <p>An online expense tracker ,where you can update all of your income and expenditure, we calculate all the modifications that modify your life. Our <span style="color:green">Smart Divider</span> feature is an extra Bonus. Do check that out. Happy Richie Rich.<br/>
                <strong><em>~Tharun K</em></strong><br/><em>~Ex<span style="color:green">Track</span></em></p>
            </div>
            
            <div id="formI">
             <form method="POST" action="index.php">
                <fieldset id="register">
                    <legend><strong>Join Us , Stay Rich</strong></legend>
                    <label><strong>Full Name</strong><span style="color:red;">*</span></label><br/>
            <input type="text" class="tfield" placeholder="fullname" name="fullname" required  /><br/><br/>
                   
                    <label><strong>Username</strong><span style="color:red;">*</span></label><br/>
            <input type="text" class="tfield" placeholder="username" name="username" required  /><br/><br/>
                   
                    <label><strong>EmailId</strong><span style="color:red;">*</span></label><br/>
            <input type="email" class="tfield" placeholder="emailid" name="emailid" required /><br/><br/>
                   
                    <label><strong>Password:</strong><span style="color:red;">*</span></label><br/>
            <input type="password" class="tfield" placeholder="password" name="password" required /><br/><br/>
            
            <label><strong>Confirm Password:</strong><span style="color:red;">*</span></label><br/>
            <input type="password" class="tfield" placeholder="Confirm password" name="cpassword" required /><br/><br/>
            
            <input type="submit" id="createA" name="createA" value="Create An Account" /><br/>
                 </fieldset>
             </form>
            </div>
        </div>
    </section>


<!--PHP-->
<?php
    
    if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from users where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: home.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
    
          
    
         //Create an account
        if(isset($_POST['createA']))
      {
		   $fullname= $_POST['fullname'];
		  
		   $username = $_POST['username'];
		   $emailid = $_POST['emailid'];
		   
		   $password = $_POST['password'];
		   $cpassword = $_POST['cpassword'];
		   
	  
	   
	         if($password==$cpassword)
	                 {          //to chaeck whether username exists
		                         $query = "select * from users where username='$username'";
		                            
		                          //to excecute query
	                                $query_run = mysqli_query($con,$query);
	                                  //echo mysql_num_rows($query_run);
 	                              if($query_run)
	 	                           {
			                           if(mysqli_num_rows($query_run)>0)
			                              {
				                                    echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
			                               }
			                           else
			                                 {
				                                         $query = "insert into users values('$fullname','$username','$emailid','$password')";
				                                         $query_run = mysqli_query($con,$query);
				                                         //to check whether it ran successfully
				                                         if($query_run)
				                                            {
																   echo '<script type="text/javascript">
																   alert("User Registered.. Now you can LOG IN");
																   </script>';
					                                                $_SESSION['username'] = $username;
					                                                $_SESSION['password'] = $password;
					                                                 header( "Location: index.php");
				                                             }
				                                          else
				                                                {
					                                            echo '<p class="error">Registration Unsuccessful due to server error. Please try later</p>';
				                                                  }
			                                }
		                        }
		                           else
		                             {
			                        echo '<script type="text/javascript">alert("DB error")</script>';
		                             }
	                             }
	                       else
	                         {
	                      	  echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
	                         }
	
	                     }
	             else{

	              }
    
    
    ?>
    

</body>


</html>