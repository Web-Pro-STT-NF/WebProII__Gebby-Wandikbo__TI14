<?php
    class Kucing{

        // Variabel--------------------------------------
        public $nama;
        public $umur;
        public $energi;
        public $attack;


        // Contructor -----------------------------------
        public function __construct($nama, $umur, $energi, $attack){
            $this->nama = $nama;
            $this->umur = $umur;
            $this->energi = $energi;
            $this->attack = $attack;
        }

        // Method ----------------------------------------
        public function makan(){
            $this->energi += 5;
            return ($this->nama.' = '.$this->energi. ' - Energi Up +5');
        }
        // Method
        public function tidur(){
            $this->energi -= 3;
            return ($this->nama.' = '.$this->energi. ' - Energi Down -3');
        }
        // Method
        public function lari(){
            $this->energi -= 5;
            return ($this->nama.' = '.$this->energi. ' - Energi Down -5');
        }
        public function serang(){
            $this->attack += 25;
            return ($this->nama.' = '.$this->energi. ' - Attack Up +25');
        }
    }
?>























