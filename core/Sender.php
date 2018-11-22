<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 23:35
 */

namespace core;


use core\modules\tasks\entities\TaskInterface;

class Sender implements SenderInterface
{

    protected $tasks=[];

    public function notify(TaskInterface $task)
    {
        array_push($this->tasks,$task);
        echo '......send';
        var_dump($this);
    }
}