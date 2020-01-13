<?php
    class Club
    {
        public $name;
        protected $team = [];

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function hire(Player $player)
        {
            $this->team[] = $player;
        }

        public function getTeam()
        {
            return $this->team;
        }
    }

    class Player
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
    }

    $bayern_Munchen = new Club('bayern_Munchen');

    $lewdowski = new Player('lewdowski');
    $muller = new Player('muller');

    $bayern_Munchen->hire($lewdowski);
    $bayern_Munchen->hire($muller);

    var_dump($bayern_Munchen);
    var_dump($bayern_Munchen->getTeam());
?>