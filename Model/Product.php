<?php

    class Product{
        public $name;
        public $brand;
        public $price;
        public $pet;
        public $img;

        public function __construct(string $_name, string $_brand, float $_price ,string $_pet, string $_img){
            $this->name = $_name;
            $this->brand = $_brand;
            $this->price = $_price;
            $this->pet = $_pet;
            $this->img = $_img;
        }
    }