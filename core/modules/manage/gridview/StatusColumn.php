<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.11.2018
 * Time: 0:40
 */

namespace core\modules\manage\gridview;


use yii\grid\ActionColumn;


class StatusColumn extends ActionColumn
{

    public $template = '{activate}{deactivate}';


    protected function initDefaultButtons()
    {
        $this->initDefaultButton('activate', 'plus',['title'=>'Изменить статус']);
        $this->initDefaultButton('deactivate', 'minus',['title'=>'Изменить статус']);
    }


    protected function renderDataCellContent($model, $key, $index)
    {
        return preg_replace_callback('/\\{([\w\-\/]+)\\}/', function ($matches) use ($model, $key, $index) {
            $name = $matches[1];
            if (isset($this->buttons[$name])) {
                $url = $this->createUrl($name, $model, $model->id, $index);
                return call_user_func($this->buttons[$name], $url, $model, $model->id);
            }
            return '';
        }, $this->template);
    }



}