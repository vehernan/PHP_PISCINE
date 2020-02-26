#!/usr/bin/php
<?php
    function ft_split($str){
        $tmp = explode(" ", $str);
        return($tmp);
    }

    print_r(ft_split("Hello hi ji"));
?>

