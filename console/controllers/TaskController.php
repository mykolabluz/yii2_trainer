<?php

namespace console\controllers;

/**
 * @author mukol
 */

class TaskController extends \yii\console\controller
{
    
    public function actionSend() {
        $filename = '/var/www/project/frontend/web/log.txt';
        $somecontent = date("Y-m-d H:i:s")."\n";
      //  $somecontent =  "fdfd\n";

// Вначале давайте убедимся, что файл существует и доступен для записи.
if (is_writable($filename)) {

    // В нашем примере мы открываем $filename в режиме "дописать в конец".
    // Таким образом, смещение установлено в конец файла и
    // наш $somecontent допишется в конец при использовании fwrite().
    if (!$handle = fopen($filename, 'a')) {
         echo "Не могу открыть файл ($filename)";
         exit;
    }

    // Записываем $somecontent в наш открытый файл.
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Не могу произвести запись в файл ($filename)";
        exit;
    }
    
    echo "Ура! Записали ($somecontent) в файл ($filename)";
    
    fclose($handle);

} else {
    echo "Файл $filename недоступен для записи";
}
    }
}
