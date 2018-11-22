<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 23:13
 */

namespace core\modules\tasks\handler;


use core\modules\tasks\entities\TaskInterface;

interface HandlerInterface
{

    function notify(TaskInterface $task);

}