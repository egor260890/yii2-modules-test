<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 23:57
 */

namespace core\modules\tasks\entities;


use yii\db\ActiveRecord;

class Notification extends ActiveRecord
{

    public static function create($task_id,$date):self
    {
        $notification=new static();
        $notification->task_id=$task_id;
        $notification->created_date=$date;
        return $notification;
    }

    public static function tableName()
    {
        return 'notifications';
    }

}