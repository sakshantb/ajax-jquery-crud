<?php
// create database connectivity  
     require_once('data.php');
     if (isset($_GET['delete'])) {
          $deleteId = $_GET['delete'];
     }
     // check record exists  
     $sql = "SELECT * FROM info WHERE id = {$deleteId}";
     $result = $db->query($sql);
     if ($result->num_rows > 0) {
          // Delete record from users table  
          $query = "DELETE FROM info WHERE id = {$deleteId}";
          if ($db->query($query)) {
               echo 1;
               exit;
          } else {
               echo 0;
               exit;
          }
     }
     ?>  