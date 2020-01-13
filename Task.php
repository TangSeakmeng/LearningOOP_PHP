<?php
    class Task
    {
        public $description;
        public $_isCompleted = false;

        public function __construct($description)
        {
            $this->description = $description;
        }

        public function completed()
        {
            $this->_isCompleted = true;
        }
    }

    $task1 = new Task('Learn OOP');
    $task2 = new Task('Learn PHP');

    var_dump($task1);
    var_dump($task1->description);

    var_dump($task2);
    var_dump($task2->description);

    // $task2->completed();
    // var_dump($task2->_isCompleted);
?>