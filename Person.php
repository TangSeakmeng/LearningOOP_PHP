<?php
    class Person
    {
        public $name;
        public $age;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function getAge()
        {
            return $this->age;
        }

        public function setAge($age)
        {
            if($age < 18)
            {
                throw new Exception('Profile is not old enough');
            }

            $this->age = $age;

            return $this;
        }
    }

    $seakmeng = new Person('Seakmeng');  
    var_dump($seakmeng);

    $seakmeng->setAge(19);
    var_dump($seakmeng);
?>