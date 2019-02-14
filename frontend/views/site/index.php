<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'My Yii Application';
use frontend\widgets\newsList\NewsList;
use frontend\widgets\employee\Salary;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>
        
        Hello, <?php if(Yii::$app->user->identity) echo Yii::$app->user->identity->username; ?>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="<?php echo Url::to(['newsletter/subscribe']); ?>">Subscribe to newsletter</a></p>
        <p><a class="btn btn-lg btn-success" href="http://yii2.frontend.com/news-count">Количество новостей</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <?php echo NewsList::widget(['showLimit' => 2]); ?>
           
            </div>
            <div class="col-lg-4">
              <?php echo Salary::widget(['showLimit' => 5]); ?>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <a href="<?php echo Url::to(['search/index']); ?>">Search v.1</a>
                <br>
                <a href="<?php echo Url::to(['search/fulltext']); ?>">Search v.2</a>
                <br>
                <a href="<?php echo Url::to(['search/advanced']); ?>">Search v.3</a>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
