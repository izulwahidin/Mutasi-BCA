<?php
require('bca.php');
define("mutasi_bca",[
    'user_id' => 'username_bca',
    'pswd' => 'pass_bca',
]);

$date = 30; // max 30 hari
$bca = new BCA(
  mutasi_bca['user_id'],
  mutasi_bca['pswd'],
  $date
);

$mutasi = $bca->mutasiTrx();

print_r($mutasi);
