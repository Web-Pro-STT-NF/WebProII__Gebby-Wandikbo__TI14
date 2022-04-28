<?php
    // Class
    class Anjing{
        // Attribut
        public $nama;
        public $umur;
        public $warna;
        public $password;

        // Contruct
        function __construct($nama, $umur, $warna, $password){
            $this->nama = $nama;
            $this->umur = $umur;
            $this->warna = $warna;
            $this->password = $password;
        }

        // Method
        public function getMakan(){
            return $this->nama.' - Sedang Makan';
        }
        public function getTidur(){
            return $this->nama.' - Sedang Tidur';
        } 
        public function getFvckin(){
            return $this->nama.' - Sedang Sex';
        }
        public function getTawuran(){
            return $this->nama.' - Sedang Tawuran';
        }
    }
?>