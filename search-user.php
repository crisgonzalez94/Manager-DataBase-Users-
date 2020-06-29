<?php 
   
   require_once 'includes/header.php';

   require_once 'database/conexion.php';

   $result = false;

   if(!empty($_POST['name'])){
      $name = strtoupper($_POST['name']);
      $sql = "SELECT * FROM users WHERE names = '$name'";
      $users = mysqli_query($db_conexion , $sql);

      $result = true;
   }

   if(!empty($_POST['lastname'])){
      $lastname = strtoupper($_POST['name']);
      $sql = "SELECT * FROM users WHERE lastname = '$lastname'";
      $users = mysqli_query($db_conexion , $sql);

      $result = true;
   }

   if(!empty($_POST['email'])){
      $email = strtolower($_POST['email']);
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $users = mysqli_query($db_conexion , $sql);

      $result = true;
   }

   if(!empty($_POST['date'])){
      $email = $_POST['email'];
      $sql = "SELECT * FROM users WHERE date = '$email'";
      $users = mysqli_query($db_conexion , $sql);

      $result = true;
   }

?>

<div class="container">

      <h2>Search user</h2>
      <hr>

      <div>
         <button class="selection-button" id="search_by_name">Search by Name</button>
         <button class="selection-button" id="search_by_lastname">Search by Last Name</button>
         <button class="selection-button" id="search_by_email">Search by Email</button>
         <button class="selection-button" id="search_by_date">Search by Date</button>
      </div>
      

      <form action="search-user.php" method="post">

         <input class="input-search" id="input_name" type="text" name="name" pattern="[A-Z a-z]+" placeholder="Name">
         <input class="input-search" id="input_lastname" type="text" name="lastname" pattern="[A-Za-z]+" placeholder="Last Name">
         <input class="input-search" id="input_email" type="email" name="email" placeholder="Email">
         <input class="input-search" id="input_date" type="date" name="date">

         <input type="submit" value="Search"> 
      </form>

</div>


<!--===========================================================================================================-->
<!--Result of search-->
<?php if( $result == true ): ?>

   <div class="container">

         <h2>Results</h2>
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
<?php endif; ?>

<?php require_once 'includes/footer.php' ?>