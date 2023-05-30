<?php

namespace UiFrame;

class Help
{
    public static function showArray($array){
        echo '<pre>';
            print_r($array);
        echo '</pre>';
    }

}