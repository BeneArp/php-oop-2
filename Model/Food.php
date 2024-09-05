<?php

    class Food extends Product{

        public $flavor;
        public $lifestage;
        public $breed;

        public function __construct(string $_name, string $_brand, float $_price, string $_pet, string $_img, string $_flavor, string $_lifestage, string $_breed){

            parent::__construct($_name, $_brand, $_price, $_pet, $_img);


            $this->flavor = $_flavor;
            $this->lifestage = $_lifestage;
            $this->breed = $_breed;
        }

    }