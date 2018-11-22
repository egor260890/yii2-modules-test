<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 19:06
 */

namespace frontend\bootstrap;


use core\Logger;
use core\MailSender;
use core\modules\tasks\handler\HandlerInterface;
use core\Sender;
use core\SenderInterface;
use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\swiftmailer\Mailer;

class Bootstrap implements BootstrapInterface
{

    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {

        $container = \Yii::$container;

        $container->set(SenderInterface::class, function()use($app){
            return \Yii::$app->mailer instanceof Mailer?new MailSender():new Sender();
        });

        $container->set(HandlerInterface::class, function($container){
           return YII_DEBUG? new Logger():$container->get(SenderInterface::class);
        });

    }
}