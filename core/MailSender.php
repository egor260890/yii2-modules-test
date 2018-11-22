<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.11.2018
 * Time: 9:57
 */

namespace core;


use core\modules\tasks\entities\TaskInterface;

class MailSender extends Sender
{

    public function notify(TaskInterface $task){
        echo '.....send to email';
    }

}