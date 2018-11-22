<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 20:31
 */

namespace core\modules\tasks\repositories;




use core\modules\tasks\entities\Task;
use core\modules\tasks\entities\TaskInterface;

class TaskRepository implements TaskRepositoryInterface
{

    public function get($id): TaskInterface
    {
        if (!$task=Task::findOne($id)){
            throw new \RuntimeException('tasks not found');
        }
        return $task;
    }

    public function getAll(): array
    {
        return Task::find()->all();
    }

    public function save(TaskInterface $task)
    {
        if (!$task->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }

    public function remove(TaskInterface $task)
    {
        if (!$task->delete()) {
            throw new \RuntimeException('Saving error.');
        }
    }
}