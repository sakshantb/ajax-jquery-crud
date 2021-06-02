<?php
include "data.php"; // Using database connection file here
$name = $_GET['name'];
if(isset($name)){
    $insert = mysqli_query($db, "INSERT INTO `info`(`name`) VALUES ('$name')");

    if (!$insert) {
        echo mysqli_error($db);
    }  ?>
    <script>
        alert("Records updated")
        window.location.replace('index.php');
    </script>
<?php
    mysqli_close($db); // Close connection
}
?>