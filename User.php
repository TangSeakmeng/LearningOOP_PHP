<?php
    class User
    {
        public $name;
        private $email;
        private $public = false;

        public function __construct($name, $email)
        {
            $this->name = $name;
            $this->email = $email;
        }

        public function makeProfilePublic()
        {
            $this->public = true;
        }

        public function getEmail()
        {
            if($this->public)
            {
                return $this->email;
            }

            throw new Exception('Profile in not public!');
        }
    }

    $userA = new User('Tang Seakmeng', 'Tang Seakmeng01@gmail.com');
    var_dump($userA);
    // var_dump($userA->getEmail());

    $userA->makeProfilePublic();
    var_dump($userA);
    var_dump($userA->getEmail());
?>