<?php 
$universitas = array("universitas satu"=>"UIN","universitas_dua"=>"UGM","universitas_tiga"=>"UNY");
$implode_universitas = implode(",", $universitas);

$nama_saya = array("nama_depan"=>"Fira","nama_tengah_pertama"=>"Guna","nama_tengah_dua"=>"Cahya","nama_akhir"=>"Vernanda");
$implode_nama_saya = implode(" ", $nama_saya);

$tanggal_lahir_saya = array("tanggal"=>"15","bulan"=>"Juni","tahun"=>"2001");
$implode_tanggal_lahir_saya = implode("-", $tanggal_lahir_saya);

$toko_online = array("toko 1"=>"shopee","toko 2"=>"Buka Lapak","toko 3"=>"Lazada");
$implode_toko_online = implode("=>", $toko_online);

$laptop = array("laptop_satu"=>"Acer","laptop_dua"=>"Hp","laptop_tiga"=>"Asus");
$implode_laptop = implode(",", $laptop);
?>
