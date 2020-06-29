<?php

   /*Variables for connect with database mariadb*/
   $db_host = 'localhost';
   $db_user = 'root';
   $db_password = '';
   $db_database_name = 'manager_users_tutorial';

   /*We save in a variable the conexion with database*/
   $db_conexion = mysqli_connect($db_host , $db_user , $db_password , $db_database_name );

?>