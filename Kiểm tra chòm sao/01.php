    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <style>
            *{
                font-family: "Kanit", sans-serif;
            }
            .border {
                border: 1px solid black;
                width: 700px;
                height: 400px;
                margin: 0 auto;
                text-align: center;
            }
            .title {
                color: red;
            }
            input {
                padding: 3px 10px;
                margin-top: 20px;
            }
            img{
                height: 50px;
                width: 50px;
            }
            .filter {
                margin-top: 20px;
                display: flex;
                text-align: center;
                justify-content: center;
                gap: 10px;
            }
            .btn{
                color: white;
                background-color: red;
            }
            .btn:hover{
                cursor: pointer;
                background-color: #ccc;
            }
        </style>
        <?php
            $day = '';
            $month = '';
            $image = '';
            $name = '';
            $time = '';
            if(isset($_POST['day']) && isset($_POST['month'])){
                $day = $_POST['day'];
                $month = $_POST['month'];
                $flag = true;
                if(is_numeric($day) &&  is_numeric($month)){
                    switch($month){
                        case '1':
                            if($day <= 19){
                                $image = 'Capricorn';
                                $name = 'Ma Kết';
                                $time = '23/12 - 19/01';
                            }else if($day > 19){
                                $image = 'Aquarius';
                                $name = 'Bảo Bình';
                                $time = '20/01 - 19/02';
                            }
                            if($day <= 0 || $day > 31){
                                $flag = false;
                            }
                            break;
                        case '2':
                            if($day <= 19){
                                $image = 'Aquarius';
                                $name = 'Bảo Bình';
                                $time = '20/01 - 19/02';
                            }else if($day > 20){
                                $image = 'Pisces';
                                $name = 'Song Ngư';
                                $time = '20/02 - 21/03';
                            }
                            if($day <= 0 || $day > 29){
                                $flag = false;
                            }
                            break;
                        case '3':
                            if($day <= 21){
                                $image = 'Pisces';
                                $name = 'Song Ngư';
                                $time = '20/02 - 21/03';
                            }else if($day > 21){
                                $image = 'Aries';
                                $name = 'Bạch Dương';
                                $time = '22/03 - 20/04';
                            }
                            if($day <= 0 || $day > 31){
                                $flag = false;
                            }
                            break;
                        case '4':
                            if($day <= 20){
                                $image = 'Aries';
                                $name = 'Bạch Dương';
                                $time = '22/03 - 20/04';
                            }else if($day > 20){
                                $image = 'Taurus';
                                $name = 'Kim Ngưu';
                                $time = '21/04 - 21/05';
                            }
                            if($day <= 0 || $day > 31){
                                $flag = false;
                            }
                            break;
                        case '5':
                            if($day <= 21){
                                $image = 'Taurus';
                                $name = 'Kim Ngưu';
                                $time = '21/04 - 21/05';
                            }else if($day > 21){
                                $image = 'Gemini';
                                $name = 'Song Tử';
                                $time = '22/05 - 22/06';
                            }
                            if($day <= 0 || $day > 31){
                                $flag = false;
                            }
                            break;
                        case '6':
                            if($day <= 23){
                                $image = 'Gemini';
                                $name = 'Song Tử';
                                $time = '22/05 - 22/06';
                            }else if($day > 23){
                                $image = 'Cancer';
                                $name = 'Cự Giải';
                                $time = '23/06 - 23/07';
                            }
                            if($day <= 0 || $day > 31){
                                $flag = false;
                            }
                            break;
                        case '7':
                            if($day <= 23){
                                $image = 'Cancer';
                                $name = 'Cự Giải';
                                $time = '23/06 - 23/07';
                            }else if($day > 23){
                                $image = 'Leo';
                                $name = 'Sư Tử';
                                $time = '24/07 - 23/08';
                            }
                            if($day <= 0 || $day > 31){
                                $flag = false;
                            }
                            break;
                        case '8':
                            if($day <= 24){
                                $image = 'Leo';
                                $name = 'Sư Tử';
                                $time = '24/07 - 23/08';
                            }else if($day > 24){
                                $image = 'Virgo';
                                $name = 'Xử Nữ';
                                $time = '24/08 - 23/09';
                            }
                            if($day <= 0 || $day > 31){
                                $flag = false;
                            }
                            break;
                        case '9':
                            if($day <= 24){
                                $image = 'Virgo';
                                $name = 'Xử Nữ';
                                $time = '24/08 - 23/09';
                            }else if($day > 24){
                                $image = 'Libra';
                                $name = 'Thiên Xứng';
                                $time = '24/09 - 23/10';
                            }
                            if($day <= 0 || $day > 31){
                                $flag = false;
                            }
                            break;
                        case '10':
                            if($day <= 23){
                                $image = 'Libra';
                                $name = 'Thiên Xứng';
                                $time = '24/09 - 23/10';
                            }else if($day > 23){
                                $image = 'Scorpio';
                                $name = 'Hổ Cáp';
                                $time = '24/10 - 22/11';
                            }
                            if($day <= 0 || $day > 31){
                                $flag = false;
                            }
                            break;
                        case '11':
                            if($day <= 22){
                                $image = 'Scorpio';
                                $name = 'Hổ Cáp';
                                $time = '24/10 - 22/11';
                            }else if($day > 22){
                                $image = 'Sagittarius';
                                $name = 'Nhân Mã';
                                $time = '23/11 - 22/12';
                            }
                            if($day <= 0 || $day > 31){
                                $flag = false;
                            }
                            break;
                        case '12':
                            if($day <= 23){
                                $image = 'Sagittarius';
                                $name = 'Nhân Mã';
                                $time = '23/11 - 22/12';
                            }else if($day > 23){
                                $image = 'Capricorn';
                                $name = 'Ma kết';
                                $time = '23/12 - 19/01';
                            }
                            if($day <= 0 || $day > 31){
                                $flag = false;
                            }
                            break;
                        default:
                            $flag = false;
                            break;
                            
                                        /*
                * Capricorn 	23/12 - 19/01	Ma kết
                * Aquarius		20/01 - 19/02	Bảo Bình
                * Pisces		20/02 - 21/03	Song Ngư
                * Aries 		22/03 - 20/04	Bạch Dương
                * Taurus 		21/04 - 21/05	Kim Ngưu
                * Gemini		22/05 - 22/06	Song Tử
                * Cancer		23/06 - 23/07	Cự Giải
                * Leo			24/07 - 23/08	Sư Tử
                * Virgo		24/08 - 23/09	Xử Nữ
                * Libra		24/09 - 23/10	Thiên Xứng
                * Scorpio 		24/10 - 22/11	Hổ Cáp
                * Sagittarius	23/11 - 22/12	Nhân Mã
                */ 
                    }
                    $result =  '<div class="filter">
                                <img src="./image/' .$image. '.png" alt="<?= '.$image.' ">
                                <p class="desc"> '.$name.' <span>( Based on:  '.$time.'  )</span></p>';
                }else{
                    $flag = false;
                }
            }

        
        ?>
        <div class="border">
            <h1 class="title">Bạn thuộc chòm sao gì ?</h1>
            <form method="post" action="">
                <label for="">Ngày Sinh</label> 
                <input type="text" name="day" id="" value="<?php echo $day ?>"> <br> 
                <label for="">Tháng Sinh</label> 
                <input type="text" name="month" id="" value="<?php echo $month ?>"> <br> 
                <input class="btn" type="submit" name="" id="" value="Lấy Chòm Sao">
            </form>
        
                <?php if($flag == true) {
                    echo $result;
                }else{
                    echo "Dữ liệu không hợp lệ";
                } ?>
        
        </div>
    </body>

    </html>
