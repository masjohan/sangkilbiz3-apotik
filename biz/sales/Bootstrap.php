<?php

namespace biz\sales;

use biz\app\components\Helper;

/**
 * Description of Bootstrap
 *
 * @author Misbahul D Munir (mdmunir) <misbahuldmunir@gmail.com>
 */
class Bootstrap extends \biz\app\base\Bootstrap
{

    protected function autoDefineModule($app)
    {
        $app->setModule('sales', Module::className());
    }

    protected function initialize($app, $config)
    {
        Helper::registerAccessHandler(components\AccessHandler::className());
    }
}