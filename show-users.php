<?php
   //Import the header html
   require_once 'includes/header.php';
   //Conect with database settings script
   require_once 'database/conexion.php';
   
   //Select all users from database
   $sql = "SELECT * FROM users";
   $users = mysqli_query($db_conexion , $sql);

?>

<div class="container">

      <h2>Show all users</h2>
      <hr>

      <table>
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Country</th>
            <th>Email</th>
            <th>Date</th>
         </tr>

         <?php 
            //Loop for get the dates and show
            while($user = mysqli_fetch_assoc($users)){
               //Save the user date a variable
               $id = $user['id'];
               $name = $user['names'];
               $lastname = $user['lastnames'];
               $country = $user['country'];
               $email = $user['email'];
               $date = $user['birthday'];

               echo "<tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$lastname</td>
                        <td>$country</td>
                        <td>$email</td>
                        <td>$date</td>
                     </tr>";
            }
            
         
         ?>

         

      </table>

</div>

<?php require_once 'includes/footer.php' ?>