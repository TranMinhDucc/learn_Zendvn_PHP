<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="border">
        <h1 class="title">Vẽ tam giác</h1>
        <div class="box">
            <a href="02.php?type=1"><img src="./images/01.png" alt=""></a>
            <a href="02.php?type=2"><img src="./images/02.png" alt=""></a>
            <a href="02.php?type=3"><img src="./images/03.png" alt=""></a>
            
        </div>
        <div class="result">
            <?php
                if(isset($_GET['type'])){
                    $result ='';
                    switch($_GET['type']){
                        case 1:
                            $i = 0;
                            while($i <= 6){
                                $result .= str_repeat("*",$i) . '<br>';
                                $i++;
                            }
                            break;
                        case 2:
                            $i = 6;
                            while( $i >= 1){
                               
                                $result .= str_repeat("*",$i).'<br>';
                                $i--;
                            }
                            break;
                        case 3:
                            $i = 1;
                            $n = 6;
                            while($i <= $n){
                                $space = str_repeat('&#160;&#160;',$n - $i);
                                $character = str_repeat('*',2*$i - 1);
                              
                                $result .= $space.$character.'<br>';
                                $i ++;
                               


                            }
                    }
                    echo $result;
                }
            ?>
        </div>
    </div>
</body>
</html>