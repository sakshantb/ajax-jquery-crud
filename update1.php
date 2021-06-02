<?php
include "data.php";
// insert data student table      
$id = $_GET['edit_id'];
$name = $_GET['name'];
$query = "UPDATE info SET name='{$name}' WHERE id='{$id}'";
if ($db->query($query)) {
    echo 1;
} else {
    echo 0;
}
