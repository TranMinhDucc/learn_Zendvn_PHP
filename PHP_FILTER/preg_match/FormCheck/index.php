<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    require_once 'functions.php';
    $error = array(); // Khởi tạo mảng lỗi trước khi sử dụng
    $email = ''; // Khởi tạo biến email trước khi sử dụng
    $username = ''; // Khởi tạo biến username trước khi sử dụng
    $password = '';
    $website = '';
    if(!empty($_POST)){
        // Email    
        $email = $_POST['email'];
        if(trim($email) == ''){
            $error['email'] = 'Giá trị không được rỗng';
            $email = ''; 
        }else if(isset($_POST['email'])){
            $email = $_POST['email'];
            if(checkInput($email,'email') == false){
                $error['email'] = 'Giá trị không hợp lệ';
                $email = ''; 
            }
        } 
    

        // Username
        $username = $_POST['name'];
        if(trim($username) == ''){
            $error['name'] = 'Giá trị không được rỗng';
            $username = ''; 
        }else if(isset($_POST['name'])){
            $username = $_POST['name'];
            if(checkInput($username,'username') == false){
                $error['name'] = 'Giá trị không hợp lệ';
                $username = ''; // Đặt lại giá trị username
            }
        } 

        // Password
        if(trim($password) == ''){
            $error['password'] = 'Giá trị không được rỗng';
            $password = ''; 
        }else if(isset($_POST['password'])){
            $password = $_POST['password'];
            if(checkInput($password,'password') == false){
                $error['password'] = 'Giá trị không hợp lệ';
                $password = ''; // Đặt lại giá trị pass
            }
        } 

        // Website
        $website = $_POST['website'];
        if(trim($website) == ''){
            $error['website'] = 'Giá trị không được rỗng';
            $website = ''; 
        }else if(isset($_POST['website'])){
            $website = $_POST['website'];
            if(checkInput($website,'website') == false){
                $error['website'] = 'Giá trị không hợp lệ';
                $website = ''; // Đặt lại giá trị website
            }
        } 
    }
?>
<body>
    <form action="" method="post">
        <label for="">Email</label><br>
        <input type="text" name="email" value="<?php echo $email ?>"><br>
        <?php if(isset($error['email'])) { echo "<p>".$error['email']."</p>"; } ?><br> <!-- Kiểm tra và hiển thị lỗi -->
        <label for="">Username</label><br>
        <input type="text" name="name" value="<?php echo $username ?>"><br>
        <?php if(isset($error['name'])) { echo "<p>".$error['name']."</p>"; } ?><br> <!-- Kiểm tra và hiển thị lỗi -->
        <label for="">Password</label><br>
        <input type="password" name="password"  value="<?php echo $password ?>"><br>
        <?php if(isset($error['name'])) { echo "<p>".$error['password']."</p>"; }?><br>
        <label for="">Website</label><br> <br>
        <input type="text" name="website" value="<?php echo $website ?>"><br>
        <?php if(isset($error['website'])){
                    echo "<p>".$error['website']."</p>"; 
                } 
        ?><br>
        <input type="submit" value="CheckForm">
    </form>
</body>
</html>
