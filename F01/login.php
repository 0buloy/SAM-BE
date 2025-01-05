<?php
session_start();

include 'connect.php';


if (empty($_SESSION['username'])) {
    $_SESSION['username'] = "";
}

if (empty($_SESSION['logged'])) {
    $_SESSION['logged'] = "";
}

if ($_SESSION['logged'] != "logged") {
    $_SESSION['logged'] = "";
} else {
    header('Location: index.php');
}

if (isset($_POST['loginButton'])) {
    $logUsername = $_POST['username'];
    $logPassword = $_POST['password'];

    $logQuery = "SELECT * FROM `users` WHERE username= '" . $logUsername . "' AND password= '" . $logPassword . "'";

    $results = mysqli_query($conn, $logQuery);

    $count = mysqli_num_rows($results);

    if ($count == 1) {
        $_SESSION['username'] = $logUsername;
        $_SESSION['logged'] = "logged";
        header('location: index.php');
    } else {
        echo "<p style='color: red;'>Invalid username or password.</p>";
        echo "<a href='login.php'>Try Again</a>";
    }
}

/*$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $logUsername, $logPassword); 
$stmt->execute();
$result = $stmt->get_result();
*/

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row">
            <div class="col">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" name="loginButton">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>