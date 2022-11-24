<?php
    class Frog {  
        public function __construct($name, $legs="4", $cold_blooded="no") {
            $this->name = $name;
            $this->legs = $legs;
            $this->cold_blooded = $cold_blooded;
            echo "<br>Name:".$this->name."<br>"; // "shaun"
            echo "legs:".$this->legs."<br>"; // 4
            echo "cold blooded:".$this->cold_blooded."<br>"; // "no"
        }
        public function jump(){
            echo "Jump:Hop Hop<br>";
        }
    }
?>
