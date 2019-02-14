<?php

namespace frontend\widgets\comments;

use Yii;
use yii\base\Widget;
use frontend\models\Comments;

/**
 * @author mukol
 */
class Com extends Widget
{
    
    public function run()
    {
                
        $list = Comments::getComments();
        
        return  $this->render('block', [
            'list' => $list,
        ]);
    }
}
