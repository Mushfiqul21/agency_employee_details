<?php
include('operation.php');

$admin = new crudapp();
$emp = $admin->showData();

if(isset($_GET['id']))
{
  $d_id = $_GET['id'];
  $admin->removeData($d_id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
</head>
<body>
    
<div class="container d-flex align-items-center justify-content-between">
<h1 class="text-center text-dark py-3">Employee Details</h1>
<a href="insert.php" class="btn btn-primary">Insert details</a>
</div>
<div class="container">
<table class="table table-info table-striped">
  <thead class="text-center">
    <th>Id</th>
    <th>Name</th>
    <th>Department</th>
    <th>Salary</th>
    <th>Action</th>
  </thead>
  <tbody class="text-center">
    <?php while($row = mysqli_fetch_assoc($emp)){ ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['dept']; ?></td>
    <td><?php echo $row['salary']; ?></td>
    <td><a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a> <a href="?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>