<?php
namespace LIB;
class lib_scrollify extends \LIB\lib_js{
    public static function get_class(){
        return self::class;}
    public static function js_path(){
        return new \PLIB('scrollify/lib/jquery.scrollify.js');}
    public static function version(){
        return '1.0.20';}
}