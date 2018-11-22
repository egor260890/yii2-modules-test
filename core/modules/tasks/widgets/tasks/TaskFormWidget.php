<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 19:51
 */

namespace core\modules\tasks\widgets\tasks;


use core\modules\tasks\forms\TaskForm;
use yii\base\Widget;

class TaskFormWidget extends Widget
{

    private $module_id;

    public function init(){
        if (!$this->module_id){
            throw new \RuntimeException('module_id value not set');
        }
    }

    public function run()
    {
        $form=new TaskForm();
        $route='/'.$this->module_id.'/task/send';
        return $this->render('index',['model'=>$form,'route'=>$route]);
    }

    public function setModule_id($module_id){
        $this->module_id=$module_id;
    }


}