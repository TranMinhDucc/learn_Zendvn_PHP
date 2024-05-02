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
        $( "#date-start" ).datepicker({
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
    .row {
        display: flex;
        
        align-items: center;
    }
    input {
        margin-top: 10px;
    }
</style>
<body>
    <?php
        // echo "<pre>";
        // print_r($_POST);
        // echo "<pre>";
        $dateStart = (isset($_POST['date-start'])) ? $_POST['date-start'] : "" ;
        $dateEnd = (isset($_POST['date-end'])) ? $_POST['date-end'] : "" ;
    ?>
 
    <form action="" method="post" name="mainForm" id="mainForm">
       <div class="row">
            <span>Start: </span>
            <input readonly="readonly" type="text" id="date-start" name="date-start" value="<?php echo $dateStart; ?>">
            
       </div>
       <div class="row">
            <span>End: </span>
            <input readonly="readonly" type="text" id="date-end" name="date-end" value="<?php echo $dateEnd; ?>">
            
       </div>
        <input type="submit" value="submit">
        <div class="result">
            <?php
            function compareTwoday($dateStart,$dateEnd){
                // Start
                $arrDateStart = date_parse_from_format('d/m/Y',$dateStart);
                $tsStart = mktime(0,0,0,$arrDateStart['month'],$arrDateStart['day'],$arrDateStart['year']);

                // End
                $arrDateEnd = date_parse_from_format('d/m/Y',$dateEnd);
                $tsEnd = mktime(0,0,0,$arrDateEnd['month'],$arrDateEnd['day'],$arrDateEnd['year'],);
                $result = 0;
                if($tsEnd > $tsStart){
                    $result = 1;
                }else {
                    $result = -1;
                }
                return $result;
          
            }
            if(compareTwoday($dateStart,$dateEnd) == 1){
                echo "End > Start";
            }else if(compareTwoday($dateStart,$dateEnd) == -1){
                echo "Start > End";
            }else if(compareTwoday($dateStart,$dateEnd) == 0){
                echo "End = Start";
            }

            ?>
        </div>
    </form>
 
 
 
</body></html>  