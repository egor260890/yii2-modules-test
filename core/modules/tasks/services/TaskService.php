<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 21:46
 */

namespace core\modules\tasks\services;


use core\modules\tasks\entities\Notification;
use core\modules\tasks\entities\Task;
use core\modules\tasks\entities\TaskInterface;
use core\modules\tasks\forms\TaskForm;
use core\modules\tasks\forms\TaskFormInterface;
use core\modules\tasks\handler\HandlerInterface;
use core\modules\tasks\repositories\NotificationRepository;
use core\modules\tasks\repositories\TaskRepository;


class TaskService implements TaskServiceInterface
{

    private $tasks;
    private $notifications;
    private $handler;

    public function __construct(TaskRepository $taskRepository,NotificationRepository $notifications)
    {
        $this->tasks=$taskRepository;
        $this->notifications=$notifications;
    }

    public function create(TaskFormInterface $form): TaskInterface
    {
        $task=Task::create(
            $form->getTitle(),
            $form->getContent(),
            $form->getStatus()
        );
        $this->tasks->save($task);
        $this->notify($task);
        return $task;
    }

    private function notify(TaskInterface $task){
        if ($this->handler){
            $this->handler->notify($task);
            $notification=Notification::create($task->id,date('U'));
            $this->notifications->save($notification);
        }
    }

    public function getForm(): TaskFormInterface
    {
        return new TaskForm();
    }

    public function setHandler(HandlerInterface $handler)
    {
        $this->handler=$handler;
    }

    public function unsetHandler()
    {
        $this->handler=null;
    }
}