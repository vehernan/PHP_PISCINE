#!/usr/bin/php
<?php
    function ft_split($str){
        $str = preg_replace('/\s\s+/', ' ', $str); //whitespace
        $tmp = explode(" ", $str);
        sort($tmp, SORT_REGULAR);
        return($tmp);
    }
?>