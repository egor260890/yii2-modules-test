<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 23:35
 */

namespace core;


use core\modules\tasks\entities\TaskInterface;
use core\modules\tasks\handler\HandlerInterface;

class Logger implements HandlerInterface
{

    public function notify(TaskInterface $task)
    {
        echo '.......log';
        var_dump($this);
    }

}