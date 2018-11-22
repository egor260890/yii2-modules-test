<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 19:53
 */

namespace core\modules\tasks\entities;


use yii\db\ActiveRecord;

class Task extends ActiveRecord implements TaskInterface
{


    public static function create($title,$content,$status):self
    {
        $model=new static();
        $model->title=$title;
        $model->content=$content;
        $model->status=$status;
        return $model;
    }

    public static function tableName()
    {
        return 'tasks';
    }

    public function activate()
    {
        $this->status=self::STATUS_ACTIVE;
    }

    public function deactivate()
    {
        $this->status=self::STATUS_INACTIVE;
    }

    public function isActive(): bool
    {
        return $this->status==self::STATUS_ACTIVE;
    }

    public function isInactive(): bool
    {
        return $this->status==self::STATUS_INACTIVE;
    }
}