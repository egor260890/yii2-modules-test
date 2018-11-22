<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 22:51
 */

namespace core\modules\manage\controllers;


use yii\base\Module;
use yii\web\Controller;

class DefaultController extends Controller
{

    protected $request;

    public function __construct($id, Module $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->request=\Yii::$app->request;
    }

}