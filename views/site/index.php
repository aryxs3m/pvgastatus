<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use app\components\Card; ?>

<div class="site-index">

    <div class="jumbotron">
        <h1>PVGA Status</h1>
        <p class="lead">If you experiencing issues with our services, please be calm - we are working on it!</p>
    </div>

    <div class="body-content">

        <?php echo Card::Card("teszt", "teszt kártya"); ?>

    </div>
</div>
