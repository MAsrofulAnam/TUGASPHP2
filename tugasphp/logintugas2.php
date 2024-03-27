<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="logintugas2.css">

</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-form">
            <h2 align="center">Login</h2>
            <table align="center">
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input type="text" name="username" id="username" placeholder="Enter your username" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" id="password" placeholder="Enter your password" required></td>
                </tr>
                <tr>
                    <td colspan="1" align="center"><button type="submit" name="masuk">Login</button></td>
                    <td colspan="1" align="center"><button type="reset" name="reset">Batal</button></td>
                </tr>
            </table>
            <p align = "center">username = admin </p>
            <p align = "center">password = rahasia </p>
        </form>
    </div>
    <?php
    session_start();
    if(isset($_POST['masuk'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Jika user dan password cocok maka dapat login, selain itu ditolak
        if($username == 'admin' && $password == 'rahasia'){
            $_SESSION['user'] = $username;
            header('location: tugas2.php');
        } else {
            echo "<script>alert('Password anda salah, coba lagi!');</script>";
        }
    }
    ?>
</body>
</html>