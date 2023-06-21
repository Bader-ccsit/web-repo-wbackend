<?php include 'change_password_process.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <div class="container">
        <h1>Change Password</h1>

        <form action="" method="post">
        <label for="inputEmail">Email</label>

        <div>
            <input type="email" name="email" id="inputEmail" required>
        </div>

        <div>
            <label for="inputPassword">New Password</label>
            <div>
                <input type="password" name="new_password" id="inputPassword" required>
            </div>
            <div>
                <div>
                    <button type="submit" name="change">Change</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>