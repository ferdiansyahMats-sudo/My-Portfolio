<?php
    if( isset($_POST["submit"]) ){
        if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
            header("Location: admin.php");
            exit;
        } else{
            $error = false;
        }
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login #POST</title>
    <style>
        p{
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
<?php if(isset($error)): ?>
    <p>Salah</p>
<?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" required>
            </li>

            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" required>
            </li>

            <li>
                <button type="submit" name="submit">KIRIM</button>
            </li>
        </form>
    </ul>
</body>
</html>