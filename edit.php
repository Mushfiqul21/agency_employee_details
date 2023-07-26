<?php
include('operation.php');

$admin = new crudapp();
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $emp_data = $admin->showDataByid($id);
}
if(isset($_POST['update']))
{
    $admin->updateData($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <form method="POST" class="w-50 m-auto p-4 border rounded-4 bg-success-subtle">
    <h1 class="text-center mb-3 mt-1">Edit Employee Details</h1>
    <hr>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $emp_data['name'];
    ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Department</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="dept" value="<?php echo $emp_data['dept'];
    ?>">
  </div>
  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label">Salary</label>
    <input type="digit" class="form-control" id="exampleInputPassword1" name="salary" value="<?php echo $emp_data['salary'];
    ?>">
  </div>
  <input type="hidden" class="form-control" id="exampleInputPassword1" name="id" value="<?php echo $emp_data['id'];
    ?>">
  <button type="submit" class="btn btn-secondary w-100" name="update">Update</button>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>