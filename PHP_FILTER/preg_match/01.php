<?php

$subject = 'PHP is easy';
$pattern = '/PHP0/';
if(preg_match($pattern,$subject) == true){
    echo "Tìm thấy";
}else {
    echo "Không tìm thấy";
}
?>