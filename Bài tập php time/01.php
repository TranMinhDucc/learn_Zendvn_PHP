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
        $( "#datepicker" ).datepicker({
            dateFormat: "dd/mm/yy",
            changeYear: true   ,
            changeMonth: true,
            yearRange: "2005:2024"
        });
    } );
    </script>
</head>
<body>
    <?php
        // echo "<pre>";
        // print_r($_POST);
        // echo "<pre>";
        $date = (isset($_POST['datepicker'])) ? $_POST['datepicker'] : "" ;
    ?>
 
    <form action="" method="post" name="mainForm" id="mainForm">
        <p>Date: <input readonly="readonly" type="text" id="datepicker" name="datepicker" value="<?php echo $date; ?>"></p>
        <input type="submit" value="submit">
        <div class="result">
            <?php
                echo "Input: " .$date . "</br>";
                echo "Output: " .date("d/m/Y",strtotime($date));
            ?>
        </div>
    </form>
    <?php
        $timeStampe = strtotime("now");
        
        echo "Output :". date('d/m/Y', $timeStampe);
    ?>
 
 
</body></html>  