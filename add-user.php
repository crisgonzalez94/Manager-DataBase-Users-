<?php
   /*Import the databases settings*/
   require_once 'database/conexion.php';

   /*Validate dates that comes by post*/
   if( !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['country']) && !empty($_POST['email']) && !empty($_POST['date']) && !empty($_POST['password']) ){
      
      /*Save all post date in a variable , but before convert name lastname and country in upperstring 
      , also convert email in lowerstring and encrypt password*/
      $name = strtoupper( $_POST['name'] );
      $lastname = strtoupper( $_POST['lastname'] );
      $country = strtoupper( $_POST['country'] );
      $email = strtolower( $_POST['email'] );
      $date = $_POST['date'];
      $password = password_hash($_POST['password'] , PASSWORD_BCRYPT );

      
      /*Before save in database , we will validate the email*/
      if(filter_var($email , FILTER_VALIDATE_EMAIL)){

         /*Write the sql query with our post dates*/
         $sql = "INSERT INTO users VALUES(null , '$name' , '$lastname' , '$country' , '$email' , '$date' , '$password' )";

         /*Do the query*/
         $query = mysqli_query($db_conexion , $sql);

         /*The mysql_query returns a bolean date , if is true because conexion or dates is right ,
          is false because conexion or dates is wrong*/
         if($query){
            
            /*is sussesfull redirect with variable get*/
            header("location:index.php?save=true");

         }else{
            
            /*is wrong redirect with variable get*/
            header("location:index.php?save=false");

         }

      }


   }else{

   }

?>