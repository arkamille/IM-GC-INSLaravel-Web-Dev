<?php
    class Ape {  
        public function __construct($name, $legs="2", $cold_blooded="no") {
            $this->name = $name;
            $this->legs = $legs;
            $this->cold_blooded = $cold_blooded;
            echo "<br>Name:".$this->name."<br>"; // "shaun"
            echo "legs:".$this->legs."<br>"; // 4
            echo "cold blooded:".$this->cold_blooded."<br>"; // "no"
        }
        public function yell(){
            echo "Yell:Auooo<br>";
        }
    }
?>