<?php
    class Pasien{

        public $id;
        public $nama;
        public $tmp_lahir;
        public $tgl_lahir;
        public $email;
        public $gender;

        public function __construct($id, $nama, $tmp_lahir, $tgl_lahir, $email, $gender){
            $this->id = $id;
            $this->nama = $nama;
            $this->tmp_lahir = $tmp_lahir;
            $this->tgl_lahir = $tgl_lahir;
            $this->email = $email;
            $this->gender = $gender;
        }
    }
?>