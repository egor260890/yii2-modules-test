<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 23:18
 */

namespace core\modules\tasks\handler;


interface Notifier
{

    function setHandler(HandlerInterface $handler);

    function unsetHandler();

}