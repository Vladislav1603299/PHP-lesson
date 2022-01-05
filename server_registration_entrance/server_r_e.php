<?php
function initialization($connect, $loginReg, $mailReg, $passwordReg)
{
    $sql = "SELECT `id` FROM `users` WHERE `login`= '$loginReg' AND `password`= '$passwordReg'";
    $sqllogin = "SELECT `id` FROM `users` WHERE `login`= '$loginReg'";
    $res = mysqli_query($connect, $sql);
    $reslogin = mysqli_query($connect, $sqllogin);

    if (mysqli_num_rows($res) > 0 || mysqli_num_rows($reslogin) > 0) {
        echo 'Ваша учетная запись сущетвует. Войдите в нее.';
        return header('Location: ../entrance.php');
    } elseif (mysqli_num_rows($res) == 0) {
        $sqlEnt = "INSERT INTO `users`(`login`, `email`, `password`) VALUES ('$loginReg', '$mailReg', '$passwordReg')";
        mysqli_query($connect, $sqlEnt);
        $sqlEntGo = "SELECT `id` FROM `users` WHERE `login`= '$loginReg' AND `password`= '$passwordReg'";
        $resEntGo = mysqli_query($connect, $sqlEntGo);
        while ($data = mysqli_fetch_assoc($resEntGo)) {
            $id = $data['id'];
            header("Location: ../public/index.php?userId=$id");
        }
    }
}

function entrance($connect, $loginReg, $passwordReg)
{
    $sql = "SELECT `id` FROM `users` WHERE `login`= '$loginReg' AND `password`= '$passwordReg'";
    $res = mysqli_query($connect, $sql);
    if (mysqli_num_rows($res) > 0) {
        $sqlEntGo = "SELECT `id` FROM `users` WHERE `login`= '$loginReg' AND `password`= '$passwordReg'";
        $resEntGo = mysqli_query($connect, $sqlEntGo);
        while ($data = mysqli_fetch_assoc($resEntGo)) {
            $id = $data['id'];
            header("Location: ../public/index.php?userId=$id");
        }
    } elseif (mysqli_num_rows($res) == 0) {
        echo 'Ваша учетная запись не сущетвует. Зарегистрируйтесь.';
        header('Location: ../registration.php');
    }
}

function entranceAdmin($idAdmin)
{
    header("Location: ../admin/admin.php?userId=$idAdmin");
}

?>
