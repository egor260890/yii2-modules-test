<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 19:52
 */

namespace core\modules\tasks\forms;



use core\modules\tasks\entities\Task;
use yii\base\Model;

class TaskForm extends Model implements TaskFormInterface
{

    private $title;
    private $content;
    private $status;

    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $this->status=Task::STATUS_INACTIVE;
    }

    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['title'], 'string', 'max' => 255],
            [['content'], 'string'],
            ['status','default','value'=>Task::STATUS_INACTIVE|Task::STATUS_ACTIVE]
        ];
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title=$title;
    }

    public function getContent(){
        return $this->content;
    }

    public function setContent(string $content){
        $this->content=$content;
    }

    public function getStatus(){
        return $this->status;
    }

}