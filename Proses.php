<?php
if (isset($_POST["input"])) {
    $matkul1 = htmlspecialchars($_POST["matkul1"]);
    $matkul2 = htmlspecialchars($_POST["matkul2"]);
    $matkul3 = htmlspecialchars($_POST["matkul3"]);
    $matkul4 = htmlspecialchars($_POST["matkul4"]);
    $matkul5 = htmlspecialchars($_POST["matkul5"]);

    echo "<b>Berikut Daftar Mata Kuliah Pilihan Anda Di Semester 6:</b><br>";
    echo "1. $matkul1 <br>";
    echo "2. $matkul2 <br>";
    echo "3. $matkul3 <br>";
    echo "4. $matkul4 <br>";
    echo "5. $matkul5 <br>";
}



if (isset($_POST['Login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "2300018312" && $pass == "312312") {
        echo "<h2>Login anda berhasil</h2>";
    } else {
        echo "<h2>Login Gagal, Coba Lagi!</h2>";
    }
}


if (isset($_POST['Pilih'])) {
    $bahasapemrograman = $_POST['pemrog'];
    echo "Bahasa Pemrograman Yang Anda Sukai Adalah : <b><font color='blue'>" . $bahasapemrograman . "</font></b>";
}


if (isset($_POST['pilihclub'])) {
    echo "Club Sepakbola Favorit Anda Adalah : <br>";

    if (isset($_POST['club1'])) {
        echo $_POST['club1'] . "<br>";
    }
    if (isset($_POST['club2'])) {
        echo $_POST['club2'] . "<br>";
    }
    if (isset($_POST['club3'])) {
        echo $_POST['club3'] . "<br>";
    }
    if (isset($_POST['club4'])) {
        echo $_POST['club4'] . "<br>";
    }
}

if (isset($_POST['Pilihminuman'])) {
    $minuman = $_POST['minuman'];
    echo "Minuman Yang Anda Pesan : <font color=red><b>$minuman</b></font>";
}


if (isset($_POST['Pilihmakanan'])) {
    $makanan = $_POST['makanan'];
    echo "Menu Makanan Yang Anda Pesan : <font color=blue><b>$makanan</b></font>";
}

if (isset($_POST['Proses'])) {
    $alamat = nl2br($_POST['isi']);
    echo "Alamat Anda  : <br>";
    echo "<font color=blue><b>$alamat</b></font>";
}
