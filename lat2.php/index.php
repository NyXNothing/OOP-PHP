<?php
    include 'Mahasiswa.php';
    include 'MataKuliah.php';

    $mahasiwa_1 = new Mahasiswa();
    $makul_1 = new MataKuliah();    
    $makul_2 = new MataKuliah();

    $makul_1->setData('A11.12345', 'Pemrograman Berbasis Web');
    $makul_2->setData('A11.12346', 'Pemrograman Web Lanjut');

    $mahasiwa_1->setData('A11.12345', 'Aprilyani', [$makul_1, $makul_2]);

    echo "<pre>";
    print_r($mahasiwa_1);
    print_r($mahasiwa_1->nama);
    print_r($mahasiwa_1->nim);

    echo "</pre>";

?>