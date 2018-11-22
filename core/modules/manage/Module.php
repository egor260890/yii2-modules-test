<?php

namespace core\modules\manage;
use core\modules\tasks\repositories\TaskRepositoryInterface;


/**
 * TaskModule module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'core\modules\manage\controllers';

    public $defaultRoute='manage/index';

    private $tasks;

    public function setTaskModule($taskModule){
        if (is_subclass_of($taskModule::getTasks(),TaskRepositoryInterface::class)){
            $this->tasks=$taskModule::getTasks();
        }else{
            throw new \RuntimeException();
        }
    }

    public function getTasks(){
        return $this->tasks;
    }

}
