<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
</head>
<body>
    <form action=<?php echo base_url('auth/login'); ?> method="POST">
        <h2>Login page</h2>
        email : <input type="text" name="email"> <br />
        password : <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>