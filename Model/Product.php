<?php

    class Product{
        public $name;
        public $brand;
        public $pice;
        public $vote;
        public $pet;

        public function __construct(string $_name, string $_brand, float $_price, string $_pet){
            $this->name = $_name;
            $this->brand = $_brand;
            $this->price = $_price;
            $this->pet = $_pet;
        }
    }