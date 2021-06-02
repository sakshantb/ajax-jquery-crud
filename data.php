<?php
$db = mysqli_connect("localhost","root","","practice");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
