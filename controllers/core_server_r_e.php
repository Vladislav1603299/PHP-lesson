<?php
include_once '../config/bd.php';
include_once '../models/server_r_e.php';

$mailReg = trim(strip_tags($_POST['registr_mail']));
$loginReg = trim(strip_tags($_POST['registr_login']));
$passwordReg = trim(strip_tags($_POST['registr_password']));
$loginEnt = trim(strip_tags($_POST['entrance_login']));
$passwordEnt = trim(strip_tags($_POST['entrance_password']));
$saltPass = "jujmkutf422h8545gh";
$passwordReg = $saltPass.md5($passwordReg).$saltPass;
$passwordEnt = $saltPass.md5($passwordEnt).$saltPass;
$sqlAdmin = 'SELECT `id`, `login`, `password` FROM users WHERE `id`= 1';
$res = mysqli_query($connect, $sqlAdmin);
while ($data = mysqli_fetch_assoc($res)) {
    $logAdmin = $data['login'];
    $pasAdmin = $data['password'];
    $idAdmin = $data['id'];

    if ($loginEnt == $logAdmin && $passwordEnt == $pasAdmin) {
        entranceAdmin($idAdmin);
    } else {
        if (isset($_POST['registr_submit'])) { 
            initialization($connect, $loginReg, $mailReg, $passwordReg);
        } elseif (isset($_POST['entrance_submit'])) {
            entrance($connect, $loginEnt, $passwordEnt);
        }
    }
}

?>
