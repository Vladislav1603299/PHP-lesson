<?php
include_once '../server_website/bd.php';
include_once 'server_r_e.php';

$mailReg = trim(strip_tags($_POST['registr_mail']));
$loginReg = trim(strip_tags($_POST['registr_login']));
$passwordReg = trim(strip_tags($_POST['registr_password']));
$loginEnt = trim(strip_tags($_POST['entrance_login']));
$passwordEnt = trim(strip_tags($_POST['entrance_password']));

$sqlAdmin = 'SELECT `id`, `login`, `password` FROM users WHERE `id`= 1';
$res = mysqli_query($connect, $sqlAdmin);
while ($data = mysqli_fetch_assoc($res)) {
    $logAdmin = $data['login'];
    $pasAdmin = $data['password'];
    $idAdmin = $data['id'];

    if ($loginEnt == $logAdmin && $passwordEnt == $pasAdmin) {
        entranceAdmin($idAdmin);
    } else {
        if ($_POST['registr_submit']) {
            initialization($connect, $loginReg, $mailReg, $passwordReg);
        } elseif ($_POST['entrance_submit']) {
            entrance($connect, $loginEnt, $passwordEnt);
        }
    }
}

?>
