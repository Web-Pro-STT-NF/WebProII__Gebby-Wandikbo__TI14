<?php
                $_proses = isset($_POST['proses']) ? $_POST['proses'] : ''; 
                $_nama = isset($_POST['nama']) ? $_POST['nama'] : '';
                $_matkul = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                $_nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                $_nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                $_nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';
                $_nilai_akhir = hasil_akhir($_nilai_uts, $_nilai_uas, $_nilai_tugas);

                // Method Nilai Akhir
                function hasil_akhir($_nilai_uts, $_nilai_uas, $_nilai_tugas){
                    $hasilakhir = (0.3 * (int)$_nilai_uts) + (0.3 * (int)$_nilai_uas) + (0.3 * (int)$_nilai_tugas);
                    return $hasilakhir;
                }
                // Method Nilai Kelulusan - Perkondisian If/Else
                 function status($_nilai_akhir){
                     if($_nilai_akhir > 55){
                         return ('Lulus');
                     }else{
                         return('Tidak Lulus');
                     }
                 }
                
                // Method Grade Nilai
                function grade_nilai($_nilai_akhir){
                    if($_nilai_akhir > 85){
                        return ('A');
                    }else if ($_nilai_akhir > 70){
                        return ('B');
                    }else if ($_nilai_akhir > 56){
                        return('C');
                    }else if ($_nilai_akhir > 36){
                        return('D');
                    }else if ($_nilai_akhir > 0){
                        return('E');
                    }else {
                        return('I');
                    }
                }
                echo('<p><b><h3>Method POST</h3></b></p>');
                echo('<hr>');
                echo('<br>Nama: '. $_nama);
                echo('<br>Mata Kuliah: '. $_matkul);
                echo('<br>Nilai UTS: '. $_nilai_uts);
                echo('<br>Nilai UAS: '. $_nilai_uas);
                echo('<br>Nilai Tugas: '. $_nilai_tugas);
                echo('<hr>');
                echo('<br>Nilai Akhir: '. $_nilai_akhir);
                echo('<br>Status: '. status($_nilai_akhir));
                echo('<br>Grade Nilai: '. grade_nilai($_nilai_akhir));
                // echo('<br>Status: '. $_f_status);
                // echo('<br>Grade Nilai: '. $_f_grade);
                   
                   
                   
                
                ?>