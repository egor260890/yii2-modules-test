<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 22:51
 */

namespace core\modules\manage\controllers;


use yii\base\Module;
use yii\data\ArrayDataProvider;

class ManageController extends DefaultController
{
    private $tasks;

    public function __construct($id, Module $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->tasks=$module->getTasks();
        var_dump($this->tasks);
    }

    public function actionIndex(){
        $provider = new ArrayDataProvider([
            'allModels' => $this->tasks->getAll(),
            'sort' => [
                'attributes' => ['id', 'title'],
            ],
            'pagination' => [
                'pageSize' => 100,
            ],
        ]);
        return $this->render('index',compact('provider'));
    }


    public function actionActivate($id)
    {
        $task = $this->tasks->get($id);
        $task->activate();
        $this->tasks->save($task);
        return $this->redirect('index');
    }

    public function actionDeactivate($id)
    {
        $task = $this->tasks->get($id);
        $task->deactivate();
        $this->tasks->save($task);
        return $this->redirect('index');
    }

}