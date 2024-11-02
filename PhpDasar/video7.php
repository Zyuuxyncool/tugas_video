<?php
    // $hari = 1;

    // switch ($hari){
    //     case 1:
    //         echo 'minggu';
    //         break;
    //     case 2:
    //         echo 'senin';
    //         break;
    //     case 3:
    //         echo 'selasa';
    //         break;
    //     case 4:
    //         echo 'rabu';
    //         break;
    //     case 5:
    //         echo 'kamis';
    //         break;
    //     case 6:
    //         echo 'jumat';
    //         break;
        
    //     default:
    //         echo 'hari belum di buat';
    //         break;
    // }

    $pilihan = 'tambah';

        switch ($pilihan) {
            case 'tambah':
                echo 'anda memiliha tambah';
                break;
            case 'ubah':
                echo 'anda memiliha ubah';
                break;
            case 'hapus':
                echo 'anda memiliha hapus';
                break;
            
            default:
                echo 'pilihan belum ada';
                break;
        }

?>