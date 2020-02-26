#!/usr/bin/php
<?php
    function ft_split($str){
        $str = preg_replace('/\s\s+/', ' ', $str);
        $tmp = explode(" ", $str);
        sort($tmp, SORT_REGULAR);
        return($tmp);
    }

    print_r(ft_split("Hello   World AAA"));
?>

