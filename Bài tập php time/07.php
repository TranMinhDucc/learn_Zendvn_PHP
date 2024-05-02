<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Default functionality</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#date" ).datepicker({
            dateFormat: "dd/mm/yy",
            changeYear: true   ,
            changeMonth: true,
            yearRange: "2005:2024"
        });
        $( "#date-end" ).datepicker({
            dateFormat: "dd/mm/yy",
            changeYear: true   ,
            changeMonth: true,
            yearRange: "2005:2024"
        });
    } );
    </script>
</head>
<style>
   
    input {
        margin-top: 10px;
    }
</style>
<body>
    <?php
        // echo "<pre>";
        // print_r($_POST);
        // echo "<pre>";
        $dateStart = (isset($_POST['date'])) ? $_POST['date'] : "" ;
    ?>
 
    <form action="" method="post" name="mainForm" id="mainForm">
       
    
  
        <div class="result">
            <?php
           

            require_once 'function.php';
           

            $arrType = array('--Select type --','Day','Month','Year');
            
            // lấy giá trị người dùng nhập vào
            $date = (isset($_POST['date'])) ? $_POST['date'] : "";
            $type = (isset($_POST['select-type'])) ? $_POST['select-type'] : "";
            $value = (isset($_POST['value'])) ? $_POST['value'] : "";

            $strTypes = createSelectbox($arrType,'select-type',$type);
            
            ?>
            <div class="row">
                <span>Date: </span>
                <input readonly="readonly" type="text" id="date" name="date" value="<?php echo $date; ?>">
            </div>

            
            <div class="row">
                <span>Type:</span>
                <?php
                    echo $strTypes;
                ?>
            </div>
            <div class="row">
                <span>Value:</span>
                <input type="text" id="value" name="value" value="<?php echo $value; ?>">
            </div>
            <input type="submit" value="submit">
        </div>
        </div>
    </form>
    <div class="result">
        <?php
            $result = addTime($date,'d/m/Y',$arrType[$type],$value);
        ?>
    </div>
 
 
 
</body></html>  