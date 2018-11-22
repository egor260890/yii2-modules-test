<?php

namespace core\modules\tasks\controllers;

use yii\base\Module;
use yii\web\Controller;

/**
 * Default controller for the `TaskModule` module
 */
abstract  class DefaultController extends Controller
{

    protected $request;

    public function __construct($id, Module $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->request=\Yii::$app->request;
    }

}
