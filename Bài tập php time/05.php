<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $timePost = '10/06/2013 07:20:23';
        $timeReply = '18/06/2013 09:20:26';

        $dataPost = date_parse_from_format('d/m/Y H:i:s', $timePost);
        $dataReply = date_parse_from_format('d/m/Y H:i:s', $timeReply);
        // echo "<pre>";
        // print_r($dataPost);
        // echo "<pre>";
        $tsPost = mktime($dataPost['hour'],$dataPost['minute'],$dataPost['second'],$dataPost['month'],$dataPost['day'],$dataPost['year']);
        $tsReply = mktime($dataReply['hour'],$dataReply['minute'],$dataReply['second'],$dataReply['month'],$dataReply['day'],$dataReply['year']);
        $distance = $tsReply - $tsPost;

        $result = '';
      
        switch($distance){
            case ($distance < 60);
                $result = ( $distance == 1 ) ? $distance .' second ago' : $distance .' seconds ago';
                break;
            case( $distance >= 60 && $distance < 3600 );
                $minutes = round($distance / 60);
                $result = ( $minutes == 1 ) ? $minutes .' minute ago' : $minutes .' minutes ago';
                break;
            case( $distance >= 3600 && $distance < 86400 );
                $hour = round($distance / 3600);
                $result = ( $hour == 1 ) ? $hour .' hour ago' : $hour .' hours ago';
                break;
            case( round($distance / 86400) == 1 );
                $result = ' yesterday at ' . date('H:i:s', $tsReply);
                break;
            default:
                $result = date('d/m/Y \a\t H:i:s', $tsReply);
        }
        echo $result;
    ?>
</body>
</html>