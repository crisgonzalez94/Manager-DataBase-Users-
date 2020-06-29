<?php require_once 'includes/header.php' ?>

<div class="container">
   
      <h2>Add user</h2>
      <hr>

      <!--Message for if user is saved-->
      <?php 
         if(isset($_GET['save'])){
            if($_GET['save'] == true){
               echo "<span>User saving sucessful</span>";
            }
            if($_GET['save'] == false){
               echo "<span>User saving wrong</span>";
            }
         } 
      ?>

      <form action="add-user.php" method="post">
         <input type="text" name="name" pattern="[A-Z a-z]+" placeholder="Name" require>
         <input type="text" name="lastname" pattern="[A-Z a-z]+" placeholder="Last Name" require>

         <select name="country">
            <option value="argentina">Argentina</option>
            <option value="argentina">España</option>
            <option value="argentina">Mexico</option>
            <option value="argentina">United States</option>
         </select>

         <input type="email" name="email" placeholder="Email" require>
         <input type="date" name="date" require>
         <input type="password" name="password" placeholder="Password" require>

         <input type="submit" value="Add user now">
      </form>


</div>

<?php require_once 'includes/footer.php' ?>