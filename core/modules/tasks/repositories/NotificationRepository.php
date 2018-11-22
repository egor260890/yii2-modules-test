<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 23:59
 */

namespace core\modules\tasks\repositories;


use core\modules\tasks\entities\Notification;

class NotificationRepository
{

    public function save(Notification $notification){
        if (!$notification->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }

}