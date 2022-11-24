<?php
    include "frog.php";
    include "ape.php";
    class Animal {  
        public $name;
        public $legs;
        public $cold_blooded;

        public function __construct($name, $legs="4", $cold_blooded="no") {
            $this->name = $name;
            $this->legs = $legs;
            $this->cold_blooded = $cold_blooded;
        }
    }
    $sheep = new Animal("shaun");
    echo "Name:".$sheep->name."<br>"; // "shaun"
    echo "legs:".$sheep->legs."<br>"; // 4
    echo "cold blooded:".$sheep->cold_blooded."<br>"; // "no"
    // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded()
?>