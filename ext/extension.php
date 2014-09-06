<?php

use yii\base\Event;

Event::on('biz\sales\models\Sales', 'init', function ($event) {
    $event->sender->attachBehavior('extended', [
        'class' => 'mdm\behaviors\ar\ExtendedBehavior',
        'relationClass' => 'ext\sales\models\ExtSales'
    ]);
});

Event::on('biz\sales\controllers\StandartController', 'beforeAction', function ($event) {
    $theme = new yii\base\Theme([
        'pathMap' => [
            '@biz/sales/views/standart' => '@ext/sales/views/standart'
        ]
    ]);

    $event->sender->view->theme = $theme;
});

