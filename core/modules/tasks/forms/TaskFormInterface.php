<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 21:51
 */

namespace core\modules\tasks\forms;


interface TaskFormInterface
{

    function getTitle ();

    function getContent();

    function getStatus();

}