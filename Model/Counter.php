<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Counter
 *
 * @author moustafa
 */
class Counter {
    //put your code here
     static function increase() {
     echo 'increase function'.PHP_EOL;
     $counter = file("counter.txt");
     $counter = $counter[0]+1;
     $fp = fopen("counter.txt","w") or die ("unable to open the file");
 
     $fwrite = fwrite($fp,$counter);
     echo $fwrite;
     fclose($fp);
        
    }
}
