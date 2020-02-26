#!/usr/bin/php
<?php
    function aff_param(){
        $arg = func_get_arg();
        if ($arg >= 2){
            echo func_get_arg(1) . "\n";
        }
        $list = func_get_args();
        for ($i = 0; $i < $arg; $i++) {
            echo $list[$i] . "\n";
        }
    }
?>