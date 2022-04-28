<?php
    class BMI{
        public $berat;
        public $tinggi;

        public function __construct($berat, $tinggi){
            $this->berat = $berat;
            $this->tinggi = $tinggi;
        }
        public function hasilBMI(){
            $this->tinggi = $this->tinggi / 100;
            $this->hasil = $this->berat / ($this->tinggi * $this->tinggi);
            return ($this->hasil);
        }

        public function statusBMI(){
            if($this->hasil < 18.5){
                return('Kurang Bobot');
            }elseif($this->hasil > 18.5 && $this->hasil < 23.9){
                return('Sehat');
            }elseif($this->hasil > 23.9 && $this->hasil < 26.9){
                return('Kelebihan Bobot');
            }elseif($this->hasil > 26.9 && $this->hasil < 29.9){
                return('Obesitas 1');
            }elseif($this->hasil > 29.9 && $this->hasil < 30){
                return('Obesitas 2');
            }else{
                return('Obesitas 3');
            }
        }
    }
?>