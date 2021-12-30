<?php
require('bca.php');
define("login",
    [
        'user_id' => 'username_bca',
        'pswd' => 'pass_bca'
    ]
);

$date = 30; // max 30 hari
$bca = new BCA(
    login['user_id'],
    login['pswd'],
    $date
);

$mutasi = $bca->mutasiTrx();

print_r($mutasi);
