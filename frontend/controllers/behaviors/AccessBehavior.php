<?php

namespace frontend\controllers\behaviors;

use yii\base\Behavior;
use Yii;
use yii\web\Controller;

/**
 * Description of AccessBehaviors
 *
 * @author mukol
 */
class AccessBehavior extends Behavior
{
    
    public function events()
    {
        return  [
        Controller::EVENT_BEFORE_ACTION => 'checkAccess',
        ];
    }

        public function checkAccess()
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->controller->redirect(['site/index']);
        }
    }
}
