<?php

    class Toy extends Product{

        public $material;
        public $weight;
        public $color;

        public function __construct(string $_name, string $_brand, float $_price, string $_pet, string $_img, string $_material){

            parent::__construct($_name, $_brand, $_price, $_pet, $_img);


            $this->material = $_material;
        }
    }