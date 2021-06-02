<?php
include("data.php");
$search = $_GET['search'];
$sql = "SELECT * FROM info WHERE name LIKE '%{$search}%' OR id LIKE '%{$search}%'  ";
$query = $db->query($sql);
if ($query->num_rows > 0) { ?>
    <table class='table table-hover table-striped'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th colspan='2'>Action</th>
            </tr>
        </thead> <?PHP
                    while ($row = $query->fetch_assoc()) { ?>
            <tbody>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><button class='btn btn-primary btn-sm edit-btn' data-id=<?php echo $row['id'] ?>>Edit</button></td>
                    <td><button class='btn btn-danger btn-sm delete-btn' data-sid=<?php echo $row['id'] ?>>Delete</button></td>
                </tr>
            </tbody>
        <?PHP  }  ?>
    </table>
<?PHP  } else {
    echo "<h5>No record found</h5>";
}
?>