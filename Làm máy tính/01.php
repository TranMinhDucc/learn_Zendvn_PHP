<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numberOne = '';
        $numberTwo = '';
        $caculate = '';
        $flag = '';
        if(isset($_POST['number_1']) && isset($_POST['number_2']) && isset($_POST['caculate'])){
             $numberOne = $_POST['number_1'];
             $numberTwo = $_POST['number_2'];
             $caculate = $_POST['caculate'];
             if(is_numeric($numberOne) && is_numeric($numberTwo)) {
                switch($caculate){
                    case "+";
                        $result = $numberOne + $numberTwo;
                        break;
                    case "-";
                        $result = $numberOne - $numberTwo;
                        break;
                    case "*";
                    case "x";
                        $result = $numberOne * $numberTwo;
                        break;
                    case "/";
                        $result = $numberOne / $numberTwo;
                        break;
                }
             }else {
                $result = "Không thực hiện được";
                $flag = false;
             }
        }
        
    ?>
    <h1>Phép tính toán</h1>
    <form action="" method="post">
        <label for="">Số 1</label> <br>
        <input type="text" name="number_1" value="<?php echo $numberOne ?>"> <br>
        <label for="">Số 2</label> <br>
        <input type="text" name="number_2" value="<?php echo $numberTwo ?>"> <br>
        <label for="">Phép Toán Tử</label> <br>
        <input type="text" name="caculate" value="<?php echo $caculate ?>"> <br>
        <input type="submit" value="Xem kết quả">
    </form>
    <div class="result">
        <h4>Kết Quả</h4>
        <?php
        if($flag == true){
            echo $numberOne . ' '.$caculate.' '.$numberTwo.'='.$result;
        }else {
            echo $result;
        }
       
        
        
        ?>
    </div>
</body>
</html>