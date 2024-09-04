<?php

    class Food extends Product{

        public $flavour;
        public $lifestage;
        public $breed;

        public function __construct(string $_name, string $_brand, float $_price, string $_pet, string $_flavour, string $_lifestage, string $_breed){

            parent::__construct($_name, $_brand, $_price, $_pet);


            $this->flavour = $_flavour;
            $this->lifestage = $_lifestage;
            $this->breed = $_breed;
        }
    }