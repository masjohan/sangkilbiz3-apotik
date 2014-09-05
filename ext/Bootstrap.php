<?php

/**
 * Description of Bootstrap
 *
 * @author Misbahul D Munir (mdmunir) <misbahuldmunir@gmail.com>
 */
class Bootstrap implements \yii\base\BootstrapInterface
{
    /**
     * 
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        $theme = $app->getView()->theme;
        $theme->pathMap = array_merge($theme->pathMap,[
            '@biz/sales/views/standart'=>''
        ]);
    }
}