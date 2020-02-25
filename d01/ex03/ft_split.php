#!/usr/bin/php
<?php
    function ft_split($str){
        $th = explode(" ", $str,0);
    }
    $str = "Hello";
    $arr = ft_split($str);

    print_r($arr);
?>

//explode = split a str by a str {explode(delimiter, input str, limit elem)}
//implode = join array elem w/str {implode()glue empty str, pieces str to implode}