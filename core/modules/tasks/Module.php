<?php

namespace core\modules\tasks;

use core\modules\tasks\handler\HandlerInterface;
use core\modules\tasks\repositories\TaskRepository;
use core\modules\tasks\repositories\TaskRepositoryInterface;

/**
 * TaskModule module definition class
 */
class Module extends \yii\base\Module implements TaskModuleInterface
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'core\modules\tasks\controllers';

    public $defaultRoute='task/form';

    private $handler;

    /**
     * {@inheritdoc}
     */
    public static function getTasks(): TaskRepositoryInterface
    {
        return new TaskRepository();
    }

    public function setHandler(string $handlerClass){
        $this->handler=\Yii::createObject($handlerClass);
    }

    public function getHandler(){
        return $this->handler;
    }

}
