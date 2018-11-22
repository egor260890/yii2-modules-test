<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 21:45
 */

namespace core\modules\tasks\services;


use core\modules\tasks\entities\TaskInterface;
use core\modules\tasks\forms\TaskFormInterface;
use core\modules\tasks\handler\Notifier;

interface TaskServiceInterface extends Notifier
{

    function create(TaskFormInterface $form):TaskInterface;

    function getForm():TaskFormInterface;

}