<?php 

    Class Car {

        private $id;
        private $brand;
        private $km;
        private $color;


        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getBrand(){
            return $this->brand;
        }

        public function setBrand($brand){
            $this->id = $brand;
        }

        public function getKm(){
            return $this->km;
        }

        public function setKm($km){
            $this->id = $km;
        }

        public function getColor(){
            return $this->color;
        }

        public function setColor($id){
            $this->id = $color;
        }



    }

    interface CarDAO{

        public function create(Car $car);

        public function findAll();
    }


?>