<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        td {
            padding: 5px 20px;
        }
    </style>
    <?php
        $money = '';
        if(isset($_POST['money'])){
            $money = $_POST['money'];
        }
    ?>
    <h1 class="title">
        Mô phỏng ATM
    </h1>
    <form action="" method="post">
        <p>Vui lòng nhập số tiền quý khách muốn rút</p>
        <input type="text" name="money" value="<?= $money ?>">
        <input type="submit" value="Rút tiên">
    </form>
    <?php
            define('ONE',1000);
            define('TWO',2000);
            define('FIVE',5000);
            define('ONE_0',10000);
            define('TWO_0',20000);
            define('FIVE_0',50000);
            define('ONE_00',100000);
            define('TWO_00',200000);
            define('FIVE_00',500000);

            $five00 = 0;
            $two00 = 0;
            $one00 = 0;
            $five0 = 0;
            $two0 = 0;
            $one0 = 0;
            $five = 0;
            $one = 0;
            $two = 0;
            if(is_numeric($money) && $money > 1000){

                while($money >= FIVE_00){
                    $five00 += 1;
                    $money = $money - FIVE_00;
                }

                while($money >= TWO_00){
                    $two00 += 1;
                    $money = $money - TWO_00;
                }
                while($money >= ONE_00){
                    $one00 += 1;
                    $money = $money - ONE_00;
                }
                while($money >= FIVE_0){
                    $five0 += 1;
                    $money = $money - FIVE_0;
                }   
                while($money >= TWO_0){
                    $two0 += 1;
                    $money = $money - TWO_0;
                }
                while($money >= ONE_0){
                    $one0 += 1;
                    $money = $money - ONE_0;
                }
                while($money >= FIVE){
                    $five += 1;
                    $money = $money - FIVE;
                }
                while($money >= FIVE){
                    $two += 1;
                    $money = $money - TWO;
                }
                while($money >= FIVE){
                    $one += 1;
                    $money = $money - ONE;
                }

                $total = FIVE_00 * $five00 + TWO_00 * $two00 + ONE_00 * $one00 + FIVE_0 * $five0 + TWO_0 * $two0 + ONE_0 * $one0;
            }
           
        ?>
    <table border="1px">
        <thead>
            <th>Mệnh giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </thead>
      
           <?php
            if($five00 > 0){
                echo '
                    <tr>
                        <td>'.number_format(FIVE_00).'</td>
                        <td>'.number_format($five00).'</td>
                        <td>'.number_format(FIVE_00 * $five00).'</td>
                    </tr>';
                }
            if($two00 > 0){
                echo '
                    <tr>
                        <td>'.number_format(TWO_00).'</td>
                        <td>'.number_format($two00).'</td>
                        <td>'.number_format(TWO_00 * $two00).'</td>
                    </tr>';
                }
            if($one00 > 0){
                echo '
                    <tr>
                        <td>'.number_format(ONE_00).'</td>
                        <td>'.number_format($one00).'</td>
                        <td>'.number_format(ONE_00 * $one00).'</td>
                    </tr>';
                }
            if($five0 > 0){
                echo '
                    <tr>
                        <td>'.number_format(FIVE_0).'</td>
                        <td>'.number_format($five0 ).'</td>
                        <td>'.number_format(FIVE_0 * $five0).'</td>
                    </tr>';
                }
            if($two0 > 0){
                echo '
                    <tr>
                        <td>'.number_format(TWO_0).'</td>
                        <td>'.number_format($two0 ).'</td>
                        <td>'.number_format(TWO_0 * $two0).'</td>
                    </tr>';
                }
            if($one0 > 0){
                echo '
                    <tr>
                        <td>'.number_format(ONE_0).'</td>
                        <td>'.number_format($one0 ).'</td>
                        <td>'.number_format(ONE_0 * $one0).'</td>
                    </tr>';
                }
            if($five > 0){
                echo '
                    <tr>
                        <td>'.number_format(FIVE).'</td>
                        <td>'.number_format($five ).'</td>
                        <td>'.number_format(FIVE * $five).'</td>
                    </tr>';
                }
            if($two > 0){
                echo '
                    <tr>
                        <td>'.number_format(TWO).'</td>
                        <td>'.number_format($two ).'</td>
                        <td>'.number_format(TWO * $two).'</td>
                    </tr>';
                }
            if($one > 0){
                echo '
                    <tr>
                        <td>'.number_format(ONE).'</td>
                        <td>'.number_format($one ).'</td>
                        <td>'.number_format(ONE * $one).'</td>
                    </tr>';
                }
            
        ?>
        <tr>
            <td colspan="2">Tổng Tiền</td>
            <td><?php echo number_format($total) ?></td>
        </tr>
    </table>
</body>
</html>