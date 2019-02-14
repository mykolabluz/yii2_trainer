<?php

// With buffer

//ob_start();
//
//echo 'Hello<br>';
//echo 'Hello<br>';
//echo 'Hello<br>';
//echo 'Hello<br>';
//echo 'Hello<br>';
//
//$content = ob_get_contents();
//ob_clean();
//
//$content = strtr($content, 'o', 'O');
//$content = strtr($content, 'H', 'x');
//
//echo $content;

//echo str_repeat('a', 31);
//sleep(3);
//echo 'b';
//sleep(3);
//echo 'c';


//ob_start(function($ctc) { static $a = 0; return $a++ . '- ' . $ctc . "\n";}, 10);
//ob_start(function($ctc) { return ucfirst($ctc); }, 3);

//echo "fo";
//sleep(2);
//echo 'o';
//sleep(2);
//echo "barbazz";
//sleep(2);
//echo "hello";

//ob_start();
//{
//    echo "hello";
//    $a = ob_get_contents();
//    ob_end_clean();
//    echo "world";
//    $b = ob_get_contents();
//}
//ob_end_clean();
// 
//echo $a .' '. $b;



/**
 * @param  string  $buffer Содержимое буфера
 * @param  integer $phase  Битовая маска из значений PHP_OUTPUT_HANDLER_*
 * @return string
 */
//function ob_handler ($buffer, $phase) {
//    return "Length of string '$buffer' is ". strlen($buffer);
//}
// 
//ob_start('ob_handler');
//echo "hello world";
//ob_end_flush();



//echo ob_get_level();              // 1
//ob_start();
//    echo ob_get_level();          // 2
//    ob_start();
//        echo ob_get_level();      // 3
//        ob_start();
//            echo ob_get_level();  // 4
//        ob_end_flush();
//    ob_end_flush();
//ob_end_flush();
//
//
//
//
//ob_start();
//    ob_start();
//        ob_start();
//            echo ob_get_level();  // 4
//        ob_end_flush();
//        echo ob_get_level();     // 3
//    ob_end_flush(); 
//    echo ob_get_level();        // 2
//ob_end_flush();
//echo ob_get_level();           // 1


