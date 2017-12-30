<?php 

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'mywebsite');?>
<!DOCTYPE html>
<html>
<head>
<title> Home page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
   <body style="background: #128184 ">
       <div class="headerhome">
		<h2>Home_Page</h2>
	</div>

   <form method="post" class="stylehome" action="home.php">
      


<head >
    <style>
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
}
</style>

	<title>Rigesteration Form</title>
	<link rel="stylesheet" type="text/css" href="stylehome.css">
</head>
<body style="background: #128184 ">
	
  

    <form method="post" action="home.php">

          
<table dir="ltr" style="font-size: 16px">
  <tr>
    <th> No.</th>
    <th>Item_Name</th>
    <th>Price</th>
       <th>Exp.D</th>
       <th>Type</th>
       <th>Notes</th>
     
  </tr>
  <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['id'].'</li>';
                            }?></td>

 
     <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['itemname'].'</li>';
                            }?></td>

     <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['price'].'</li>';
                            }?></td>

     <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['exp_d'].'</li>';

                            }?></td>

     <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['type'].'</li>';
                            }?></td>
 <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['notes'].'</li>';
                            }?></td>



     <tr>
        <td>
        </td>  
        
	</form>
    </body>
</html>