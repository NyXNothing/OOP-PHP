<?php
    include 'Mahasiswa.php';
    include 'MataKuliah.php';

    $mahasiwa_1 = new Mahasiswa();
    $makul_1 = new MataKuliah();    
    $makul_2 = new MataKuliah();

    $makul_1->setData('A11.12345', 'Pemrograman Berbasis Web');
    $makul_2->setData('A11.12346', 'Pemrograman Web Lanjut');

    $mahasiwa_1->setData('A11.12345', 'Aprilyani', [$makul_1, $makul_2],'1998-05-18');

    echo "<pre>";
    echo "Umur dihitung dengan method/function :<br>";
    print_r($mahasiwa_1->getData()[4]);
    echo "<br><br>";
    echo "Nilai Umur diberi secara langsung :<br>";
    $mahasiwa_1->umur = 100;
    print_r($mahasiwa_1->umur);
    echo "</pre>";

?>