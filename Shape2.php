<?php
    abstract class Shape
    {
        protected $color;
        protected $material = 'None';

        public function __construct($color = 'Red')
        {
            $this->color = $color;
        }

        protected function getColor()
        {
            return $this->color;
        }

        abstract protected function getArea();
    }

    class Square extends Shape
    {
        private $length = 5;

        public function getArea()
        {
            return pow($this->length, 2);
        }
    }

    class Triangle extends Shape
    {
        private $base = 7;
        private $height = 4;
        protected $material = 'Plastic';

        public function __construct($color = 'Green')
        {
            $this->color = $color;
        }

        public function getArea()
        {
            return 0.5 * $this->base * $this->height;
        }
    }

    // $shape = new Shape;
    $square = new Square;
    $triangle = new Triangle;
    $triangle2 = new Triangle('Yellow');

    // var_dump($shape);
    var_dump($square);
    var_dump($triangle);
    var_dump($triangle2);
?>