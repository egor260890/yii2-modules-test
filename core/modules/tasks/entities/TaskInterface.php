<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 20:24
 */

namespace core\modules\tasks\entities;




interface TaskInterface
{

    const STATUS_ACTIVE=1;
    const STATUS_INACTIVE=0;

    function activate();

    function deactivate();

    function isActive():bool;

    function isInactive():bool;

    static function find();

}