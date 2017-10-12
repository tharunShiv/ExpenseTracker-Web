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
    <title>SmartDivider</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
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
               <li class="listl"><a href="starttrip.php">Start a new Trip</a></li><br/>
               <li class="listl"><a href="smartdivider.php" id="current">Smart Divider</a></li>
           </ul>
       </aside>
       
       <div class="sdivider">
           <h2 style="color:black;">The Best Feature In this Website</h2>
           <h3>Coming soon...</h3>
           <!--<h3>Enter the details required</h3>
           <form>
               <label>Enter the number of People in the trip:</label>
               <br/>
               <input type="text" placeholder="ex:4" id="n"/>
               <br/>
               
               <label>Enter the friends names and their expenditure</label><br>
               <div id="addin">
               <input type="text" placeholder="name" id="0"/>
               <input type="text" placeholder="expenditure" id="10"/><br/>
               
               <input type="text" placeholder="name" id="1"/>
               <input type="text" placeholder="expenditure" id="11"/><br/>
               
               <input type="text" placeholder="name" id="2"/>
               <input type="text" placeholder="expenditure" id="12"/><br/>
               
               <input type="text" placeholder="name" id="3"/>
               <input type="text" placeholder="expenditure" id="13"/><br/>
               
               <input type="text" placeholder="name" id="4"/>
               <input type="text" placeholder="expenditure" id="14"/><br/>
               
               <input type="text" placeholder="name" id="5"/>
               <input type="text" placeholder="expenditure" id="15"/><br/>
               
               <input type="text" placeholder="name" id="6"/>
               <input type="text" placeholder="expenditure" id="16"/><br/>
               
               <input type="text" placeholder="name" id="7"/>
               <input type="text" placeholder="expenditure" id="17"/><br/>
               
               
               </div>
               
               <input type="button" onclick="table()" value="GO!!"/>
        </form>  
        <div id="rec">
            
        </div>
        <br/><br/>
        <table>
            <tr>
                <td>Name</td>
                <td>Expense</td>
                <td>Must Receive</td>
                <td>Must Pay</td>
            </tr>
            
            
        </table>
       </div> -->
    
       <script type="application/javascript">
         /*         
           function person(name,expense,toreceive,topay){
                   this.name=name;
                   this.expense=expense;
                   this.toreceive=toreceive;
                   this.topay=topay;
               }
           
           function table(){
              alert('function called'); 
              var n = document.getElementById('n').value;
               var i=0; alert(n);
               var a;
               var b;
               var r = document.getElementById('rec').innerHTML;
               for(i=0;i<n;i++){
                 r=('loop entered'); a=document.getElementById(i).value;
                   r=(a);
                 b=document.getElementById(i+10).value;
                   r=(b);
                 var "id"+i = new person(a,b,0,0);
                }
               for(i=0;i<n;i++){
                   r=('show loop entered');
                   r=("id"+i.name);
                   r=("id"+i.expense);
               }
           }*/
           /*
           function gen(){
            var n = document.getElementById('n').value;
            var i=0;
            for(i=0;i<n;i++){
                var element = document.createElement('input');
                
                element.type="text";
                document.getElementById('addin').appendChild(element);
               
            }
        }
        */
           
        /* Reference code
        function LoopTest() {
          var i=0;
          var stop=5;
           for (i=0;i<5;i++) {  
           var v = document.createElement('input');
            v.type="button";
            v.value="Button " +i;
           document.getElementById('test').appendChild(v);
}
} */
           </script></div>
</body>
</html>