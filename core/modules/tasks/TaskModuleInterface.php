<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 20:23
 */

namespace core\modules\tasks;


use core\modules\tasks\repositories\TaskRepositoryInterface;

interface TaskModuleInterface
{

    static function getTasks():TaskRepositoryInterface;

}