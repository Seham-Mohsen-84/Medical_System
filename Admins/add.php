<?php
require_once '../db.php';
require_once '../header.php';
session_start();
$result=null;
if($_SERVER['REQUEST_METHOD']=='POST' and $_SESSION['admin']='admin'){
    $name = $_POST['name']??'';
    $email = $_POST['email']??'';
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO admin (admin_name, admin_email, admin_password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);
    $result = $stmt->execute();
    if(!$result){
        echo $stmt->error;
    }
}

?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Add-New-Admin</title>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 500px;">
       <?php
          if($result===true){
              echo "<div class='alert alert-success' role='alert'>
                         Admin Added Successfully.
                    </div>";
          }
          elseif($result===false){
              echo "<div class='alert alert-danger' role='alert'>
                          Something Went Wrong.<br>
                    </div>";
          }
       ?>
        <b><h5 class="text-center mb-3">Add New Admin</h5></b>
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="Text" class="form-control" placeholder="Name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-outline-dark w-100" name="submit">Add</button>
            </div>
            <div class="mb-3">
                <a href="../index.php" class="btn btn-outline-dark w-100">Home</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
