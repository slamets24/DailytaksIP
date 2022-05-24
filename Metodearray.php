<?php


$array = array("0001", "Roman Alamsyah", "Bandar Lampung", "21/05/1998", "Membaca");


function arr($array){
// soal 1
    $tambah = ["Roman Alamsyah Elsharawy", "Provinsi Bandar Lampung", "21/05/1989", "Pria", "SMA Internasional Metro"];
  
    array_splice($array, 1, 4, $tambah);

    print_r($array);
    echo "<br>";

// soal 2
    // $tanggal = explode("/",$array[3]);

    // $hari = $tanggal[0];
    // $bulan = $tanggal[1];
    // $tahun = $tanggal[2];

    // $tanggalLahir = $hari." ".$bulan." ".$tahun;
    // $spliting = $tanggalLahir.str_split(" ");

        $mount = array_slice($array, 3, 1);

        $tanggal = explode("/", $mount[0]);

        $hari = $tanggal[0];
        $bulan = $tanggal[1];
        $tahun = $tanggal[2];

        $tanggalLahir = $hari." ".$bulan." ".$tahun;
        $spliting = explode(" ", $tanggalLahir);

        $mount = join("-", $spliting);


  // $hari = array_slice($array[3],0 , 2);
  // $bulan = array_slice($array[3],3, 5);
  // $tahun = array_slice($array[3],6 );
    
echo "<br>";
    switch ($bulan) {
        case '01':
            echo "January";
            break;
        case '02':
            echo "Febuary";
            break;
        case '03':
            echo "Maret";
            break;
        case '04':
            echo "April";
            break;
        case '05':
            echo "Mei";
            break;    
        case '06':
            echo "Juni";
            break;
        case '07':
            echo "July";
            break;
        case '08':
            echo "Agustus";
            break;
        case '09':
            echo "September";
            break;
        case '10':
            echo "October";
            break;
        case '11':
            echo "November";
            break;
        case '12':
            echo "Desember";
            break;
        default:
            echo "Error";
            break;
    }

echo "<br>";    

// Soal 3
  rsort($spliting);

$clength = count($spliting);

for($i = 0; $i < $clength; $i++) {
  print_r($spliting[$i]);
  echo " ";
}

echo "<br>";

// soal 4

echo $mount;

echo "<br>";
// soal 5

$name = array_slice($array,1,1);

echo substr($name[0], 0, 14);

}


arr($array);

















// $tanggal = explode("/",$array[3]);

//     $hari = $tanggal[0];
//     $bulan = $tanggal[1];
//     $tahun = $tanggal[2];
// $namabulan = [" ", "January", "Febuari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "september", "Oktober", "November", "Desember"];

//     for ($i=0; $i <= 12; $i++) {
//        if ($bulan == $i ) {
//            echo $namabulan[$i]."<br>";
//        } 
//     }