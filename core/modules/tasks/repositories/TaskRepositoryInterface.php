<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 20:24
 */

namespace core\modules\tasks\repositories;




use core\modules\tasks\entities\TaskInterface;

interface TaskRepositoryInterface
{

    function get($id):TaskInterface;

    function getAll():array ;

    function save(TaskInterface $task);

    function remove(TaskInterface $task);

}