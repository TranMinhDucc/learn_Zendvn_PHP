<?php
    $content = file('script.txt') or die('Cannot read file');
    // echo '<pre>';
    // print_r($content);
    // echo '<pre>';
    $content = implode('',$content);
    $pattern = array('#<script([^>]*)>#i', '#</script([^>]*)>#');
    $replacement = array('<pre>&lt;script\1&gt;','&lt;script\1&gt;</pre>') ;
    $result = preg_replace($pattern, $replacement, $content);
    echo $result;
?>