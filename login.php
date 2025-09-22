<?php require_once 'db.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE admin_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['admin_password'])) {
                $_SESSION['admin'] = 'admin';
                header("Location: index.php");
                exit;
            }
        }
    }
}

?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>LogIn</title>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 500px;">
        <h5 class="text-center mb-3">Sign In</h5>
        <form method="post" action="">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-outline-dark w-100">Sign In</button>
        </form>
        <br>
        <div class="card-footer text-body-secondary mb-3">
            doesn't have an account <a href="signup.php">Sign Up</a>
        </div>
    </div>
</div>
</body>
</html>
