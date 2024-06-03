<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <div class="title">LOGIN</div>
    <form action="">
        <?php
            require_once 'function.php';
            if(!checkEmpty($_POST['username']) && !checkEmpty($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $data = parse_ini_file('user.ini');
                echo $userInfo = $data[$username];
                // echo '<pre>';
                // print_r($data);
                // echo '<pre>';
            }else{
                header('Location: login.php');
            }
        ?>
    </form>
</body>
</html>
