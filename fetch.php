<?php
// create database connectivity  
require_once('data.php');
if (isset($_GET['update'])) {
  $editId = $_GET['update'];
}
// fetch data from student table..  
$sql = "SELECT * FROM info WHERE id = {$editId}";
$query = $db->query($sql);
if ($query->num_rows > 0) {
  // $output = "";  
  while ($row = $query->fetch_assoc()) { ?>
    <form id="update_form">
      <div class='modal-body'>
        <input type='hidden' class='form-control' id='editId' value="<?php echo $row['id']; ?>">
        <div class='form-group'>
          <input type='text' class='form-control' id='editName' value="<?php echo $row['name']; ?>">
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
          <button type='button' class='btn btn-info' id='editSubmit'>Save changes</button>
        </div>
    </form>
<?php
  }
}
// echo $output;  
?>