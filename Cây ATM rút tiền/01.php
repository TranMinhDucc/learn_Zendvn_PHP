<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vòng lặp break & continue</title>
</head>
<body>
    <?php
        $n = 0;
        for($i = 0; $i <= 100; $i+= 8 ){
            if($n < 3){
                if($i % 8 == 0 && $i > 0){
                    echo $i.'<br>';
                    $n++;
                }
            }else{
                break;
            }
        }
    ?>
</body>
</html>
