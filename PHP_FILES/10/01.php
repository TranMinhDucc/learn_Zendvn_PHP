<?php

    $fileName = 'files/xyz.txt';
   file_put_contents($fileName, null);   // thêm tập tin

 unlink($fileName); // unlink : xóa tập tin