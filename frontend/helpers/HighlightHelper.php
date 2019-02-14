<?php

namespace frontend\helpers;

/**
 * @author mukol
 */
class HighlightHelper
{
    
    public static function process($keyword, $text)
    {
        $keyword = preg_quote($keyword);
        $words = explode(' ', trim($keyword));
//        
//        echo '<pre>';
//        print_r($words);
//        echo '<pre>';
//        echo '/' . implode('|', $words) . '/i';
//        die;
        
        return preg_replace('/' . implode('|', $words) . '/i', '<b>$0</b>', $text);
        
        /* или так, главное поставить в <b></b> не искаемое слово, потому что возникает проблема camel UpperCase */
//       return preg_replace("#($keyword)#iu", "<b>$1</b>", $text);
//       return preg_replace("#($keyword)#iu", "<b>$1</b>", $text);
    }
}