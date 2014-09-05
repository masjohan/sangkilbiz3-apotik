<?php

\yii\base\Event::on('biz\sales\models\Sales', 'init', function ($event) {
    $event->sender->attachBehavior('extended', [
        'class' => 'mdm\behaviors\ar\ExtendedBehavior',
        'relationClass' => 'ext\sales\models\ExtSales'
    ]);
});

