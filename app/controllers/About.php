<?php

class About{

    public function index($nama = 'Aria', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo, nama saya $nama, Saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }

}