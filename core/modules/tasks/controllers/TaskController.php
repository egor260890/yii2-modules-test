<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 21:11
 */

namespace core\modules\tasks\controllers;


use core\modules\tasks\services\TaskService;
use yii\base\Module;
use yii\web\BadRequestHttpException;


class TaskController extends DefaultController
{
    private $service;

    public function __construct($id, Module $module,TaskService $service, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $module->handler?$service->setHandler($module->handler):false;
        $this->service=$service;
    }

    public function actionForm(){
        return $this->render('form',['module_id'=>$this->module->id]);
    }

    public function actionSend(){
        $form=$this->service->getForm();
        if ($form->load($this->request->post())&&$form->validate()){
            $task=$this->service->create($form);
            return $this->render('success',['task'=>$task]);
        }else{
            throw new BadRequestHttpException();
        }

    }

}