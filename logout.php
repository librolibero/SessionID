<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Wyczyściłeś swoją sesję';
   header('Refresh: 2; URL = login.php');
?>