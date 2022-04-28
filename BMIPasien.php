<?php
require_once 'Pasien.php';
require_once 'BMI.php';

  class BMIPasien{

    public $id;
    public $bmi;
    public $tanggal;
    public $pasien;

    public function __construct($id, $bmi, $tanggal, $pasien){
      $this->id = $id;
      $this->bmi = $bmi;
      $this->tanggal = $tanggal;
      $this->pasien = $pasien;
    }
  }
?>