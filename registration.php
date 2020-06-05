<?php

   //Login users
   $db = mysqli_connect('mars.cs.qc.cuny.edu' , 'goch2562' , '23242562' , 'goch2562') or die("could not connect to database" ) ;
   session_start() ;

   $username = $_POST['username'];
   $password = $_POST['password'];
   
   $user_type_query = "SELECT user_type FROM appuser WHERE login = '$username' AND pwd = '$password'" ;
   $results1 = $db->query($user_type_query);
   $results2 = $results1->fetch_assoc();

   if(isset($_POST['login']) )
   {
       $errors = array() ;

       if( empty($username) )
       {
           array_push($errors , "Username is required" ) ;
       }

       if( empty($password) )
       {
           array_push($errors , "Password is required" ) ;
       }

       if( count($errors) == 0 )
       {
           //$password = md5($password) ;
           $query = "Select * from appuser where login = '$username' AND pwd = '$password' " ;
           $results = mysqli_query($db , $query) ;

           if( mysqli_num_rows($results) && $results2[user_type] == "S") 
           {
               $_SESSION['username'] = $username;
	       $_SESSION['email'] = $email;
               $_SESSION['success'] = "Logged in Successfully" ;

               header( 'location: student.php' ) ;

           }

	   if( mysqli_num_rows($results) && $results2[user_type] == "P") 
           {
               $_SESSION['username'] = $username;
	       $_SESSION['email'] = $email;
               $_SESSION['success'] = "Logged in Successfully" ;

               header( 'location: instructor.php' ) ;

           }

	   if( mysqli_num_rows($results) && $results2[user_type] == "D") 
           {
               $_SESSION['username'] = $username;
	       $_SESSION['email'] = $email;
               $_SESSION['success'] = "Logged in Successfully" ;

               header( 'location: display-questionset.php' ) ;

           }

           else
           {
               array_push($errors , "Wrong Username/Password combination. Please try again." ) ;
           }
       }

   mysqli_close($db);
   }

   else
   {
      $errors = array() ;

      //register users
      $email = $_POST['email'] ;
      $first_name = $_POST['first_name'];
      $last_name  = $_POST['last_name'];
      $user_type  = $_POST['user_type'];
      $confirmpassword = $_POST['confirmpassword'] ;

      //form validation

      if( empty($username) )
      {
         array_push( $errors , "Username is required") ;
      } 

      if( empty($first_name) )
      {
         array_push( $errors , "First Name is required") ;
      } 

      if( empty($last_name) )
      {
         array_push( $errors , "Last Name is required") ;
      } 

      if( empty($user_type) )
      {
         array_push( $errors , "Type of User is required") ;
      } 

      if( empty($email) )
      {
         array_push($errors , "E-mail is required") ;
      } 

      if( empty($password))
      {
         array_push($errors , "Password is required") ;
      } 

      if( $password != $confirmpassword )
      {
         array_push($errors , "Password do not match" ) ;
	 header( 'location: register.php' ) ;
      }

      //check database for existing user with same username
      $user_check_query = "Select * from appuser where email = '$email' LIMIT 1" ;

      $results = mysqli_query( $db , $user_check_query ) ;
      $user = mysqli_fetch_assoc($results) ;


      if($user)
      {
         if($user["email"] === $email)
         {
            array_push($errors , "This email is already registered" ) ;
         }
      }

      //Register user if no errors

      if( count($errors) == 0 )
      {
         //$password = md5($password) ; //This will encrypt password

         $query = "Insert into appuser (login , pwd , first_name, last_name, email, user_type ) values ( '$username' , '$password', '$first_name', '$last_name', '$email' , '$user_type' )" ;
    
         mysqli_query($db , $query ) ;

         $_SESSION['username'] = $username ;
         $_SESSION['success'] = "You are now signed Up" ;

         header( 'location: index.php' ) ;
         mysqli_close($db);
      }
 
   }

?>

<?php if (is_countable($errors) && count($errors) > 0) : ?>
    <div>
       <?php foreach($errors as $error) : ?>
       <p> <?php echo $error ?> </p>
       <?php endforeach ?>
       <!--redirect to index.php after 2 seconds-->
       <?php header("Refresh:2; url= index.php"); ?>
    </div>
    
<?php endif ?>
    