<?php
define("HOME", getEnv("DOCUMENT_ROOT")."/teste/");
spl_autoload_register(function ($class){
    $nome = str_replace("\\", "/" , $class . '.php');
    if( file_exists( HOME . $nome ) ):
        include_once( HOME . $nome );
    endif;
});