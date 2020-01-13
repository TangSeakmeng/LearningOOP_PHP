<?php
    class FootballPlayer
    {
        public $name;
        public $position;

        public function __construct($name, $position)
        {
            $this->name = $name;
            $this->position = $position;
        }
    }

    $playerA = new FootballPlayer('Marco Reus', "Striker");
    $playerB = new FootballPlayer('Toni Kroos', 'Midfielder');

    echo $playerA->name;
    var_dump($playerA->name);
    var_dump($playerB);
?>