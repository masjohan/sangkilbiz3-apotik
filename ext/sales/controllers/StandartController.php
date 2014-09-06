<?php

namespace ext\sales\controllers;

use Yii;
use yii\base\Event;

/**
 * PosController implements the CRUD actions for Sales model.
 */
class StandartController extends \biz\sales\controllers\StandartController
{

    public function init()
    {
        parent::init();
        Event::on('biz\sales\models\Sales', 'init', function ($event) {
            $event->sender->attachBehavior('extended', [
                'class' => 'mdm\behaviors\ar\ExtendedBehavior',
                'relationClass' => 'ext\sales\models\ExtSales'
            ]);
        });
    }

    public function getViewPath()
    {
        return \Yii::getAlias('@ext/sales/views/standart');
    }
}