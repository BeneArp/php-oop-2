<?php

    class Bed extends Product{
        public $size;
        public $length;
        public $height;


        public function __construct(string $_name, string $_brand, float $_price, string $_pet, string $_img, string $_size, int $_length, int $_height){

            parent::__construct($_name, $_brand, $_price, $_pet, $_img);


            $this->size = $_size;
            $this->length = $_length;
            $this->height = $_height;
        }

        public function setLenght($len){
            if(is_int($len)){
                $this->length = $len;
            }else{
                throw new Exception('Il valore impostato non è un numero');
            }
        }

    }