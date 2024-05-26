<?php
    $source = 'files/abc.txt';
    $dest = 'coppy.txt';

    if(copy($source,$dest) == true){  // copy nội dung của file | thành công sẽ trả về true
        echo "Success";
    }
?>