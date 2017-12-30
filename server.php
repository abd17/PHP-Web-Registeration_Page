<?php
    	session_start();
	// variable declaration
    $name="";
	$username = "";
    $password="";
	$email    = "";
    $errors = array(); 
	$_SESSION['success'] = "";

     $itemname="";
     $price="";
     $amount="";
     $exp_d="";
     $type="";
     $notes="";

    $db=mysqli_connect('localhost','abdullah','12345678','mywebsite');


    if (isset($_POST['reg_user'])) {
    
// receive all input values from the form
        $name = mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        
      
        //check empty stack
        if(empty($name)){ array_push($errors, "Fullname is requiered");}
         if(empty($username)){ array_push($errors, "Username is required");}
          if(empty($email)){ array_push($errors, "Email is required");}
           if(empty($password_1)){ array_push($errors, "Passwoed is required");}

           
		if ($password_1 != $password_2) {
			 array_push($errors, "Password not match");
		}

         if (count($errors) == 0){
        

        $password=md5($password_1);
        $query="insert into user(name,username,email,password)Values('$name','$username','$email','$password')";
        mysqli_query($db,$query);
        
        $_SESSION['username'] = $username;
			$_SESSION['success'] = "Register Successfull";
			header('location: home.php');
}
}



// LOGIN USER
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Login is succesed  ";
				header('location: home.php');
			}else {
				array_push($errors, " Error in username or password");
			}
		}
	}



      // Add 
    
	if (isset($_POST['send'])) {
       
 $itemname = mysqli_real_escape_string($db, $_POST['itemname']);
 $price = mysqli_real_escape_string($db, $_POST['price']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $exp_d = mysqli_real_escape_string($db, $_POST['exp_d']); 
  $type = mysqli_real_escape_string($db, $_POST['type']); 
      $notes = mysqli_real_escape_string($db, $_POST['notes']);
     

         

      if (empty($itemname)) {array_push($errors, "Item name is required");}
      if (empty($price)) {array_push($errors, "Price is required");}
       if (empty($amount)) {array_push($errors, "Amount  is required");}
        if (empty($exp_d)) {array_push($errors, "Exp. Date  is required");}
      

         if ($type=='Select_Item') {array_push($errors, " Type is required");}
          



if (count($errors) == 0) {
      $query="insert into items(itemname,price,amount,exp_d,type,notes)Values('$itemname','$price','$amount','$exp_d','$type','$notes')";
        mysqli_query($db,$query);
        
    
       array_push($errors, "Done");
      
      
    }
    }

    ?>