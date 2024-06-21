<!-- FORM INPUT TYPE TEXT & PASSWORD -->
<html>

<head>
    <title>Input Type Text Dan Passowrd</title>
</head>

<body>
    <form action="Proses.php" method="post" name="input">
        Masukkan 5 Mata Kuliah Pilihan Anda Di Semester 6 <br>
        1. <input type="text" name="matkul1"><br>
        2. <input type="text" name="matkul2"><br>
        3. <input type="text" name="matkul3"><br>
        4. <input type="text" name="matkul4"><br>
        5. <input type="text" name="matkul5"><br>
        <br>
        <input type="submit" name="input" value="Kirim">
        <input type="reset" name="input">
    </form>
</body>

</html>


<!-- LOGIN (INPUT TEXT & PASSWORD) -->
<html>

<head>
    <title>LOGIN E-LEARNING</title>
</head>

<body>
    <center>
        <form action="Proses.php" method="post" name="input">
            <h2>E-Learning Universitas Ahmad Dahlan</h2>
            Username : <input type="text" name="username" /><br />
            Password : <input type="password" name="password" /> <br />
            <br>
            <input type="submit" name="Login" value="Login" />
            <input type="reset" name="reset" value="Reset" />
        </form>
        <p>Anda belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </center>
</body>

</html>


<!-- Input Type Radio -->
<html>

<head>
    <title>Pilih Bahasa Pemrograman Yang Anda Sukai</title>
</head>

<body>
    <form action="Proses.php" method="post" name="input">
        <h2>Pilih Bahasa Pemrograman</h2>
        <input type="radio" name="pemrog" value="C++" checked /> C++ <br />
        <input type="radio" name="pemrog" value="HTML" /> HTML <br />
        <input type="radio" name="pemrog" value="JS" /> Java Script <br />
        <input type="radio" name="pemrog" value="JAVA" /> Java <br />
        <input type="radio" name="pemrog" value="PHP" /> PHP <br />
        <input type="submit" name="Pilih" value="Pilih" />
        <input type="reset" name="reset" value="Reset" />
    </form>
</body>

</html>

<!-- Input Type Checkbox -->
<html>

<head>
    <title>Club Sepakbola Favorit Anda</title>
</head>

<body>
    <form action="Proses.php" method="post" name="pilihclub">
        <h2>Pilih Club Sepakbola Favorit Anda</h2>
        <input type="checkbox" name="club1" value="Real Madrid" checked /> Real Madrid <br />
        <input type="checkbox" name="club2" value="Manchester City" checked /> Manchester City <br />
        <input type="checkbox" name="club3" value="Manchester United" checked /> Manchester United<br />
        <input type="checkbox" name="club4" value="Persib Bandung" checked /> Persib Bandung<br />
        <input type="submit" name="pilihclub" value="Pilih" />
        <input type="reset" name="reset" value="Reset" />
    </form>
</body>

</html>

<!-- Input Combo Box -->
<!DOCTYPE html>
<html>

<head>
    <title>Pilih Minuman Favorit Anda</title>
</head>

<body>
    <form action="Proses.php" method="post" name="input">
        <h2>Pilih Menu Minuman Anda</h2>
        <select name="minuman">
            <option value="Coca Cola">Coca Cola</option>
            <option value="Sprit">Sprit</option>
            <option value="Fanta">Fanta</option>
            <option value="Kopi">Kopi</option>
            <option value="Teh">Teh</option>
            <option value="Air Mineral">Air Mineral</option>
        </select>
        <input type="submit" name="Pilihminuman" value="Pilih" />
    </form>
</body>

</html>

<!-- Input List Box -->
<html>

<head>
    <title>Menu Makanan</title>
</head>

<body>
    <form action="Proses.php" method="post" name="input">
        <h2>Pilih M</h2>
        <select name="makanan" size="4">
            <option value="Nasi Goreng">Nasi Goreng</option>
            <option value="Nasi Ayam">Nasi Ayam</option>
            <option value="Bubur Ayam">Bubur Ayam</option>
            <option value="Opor Ayam">Opor Ayam</option>
            <option value="Rendang">Rendang</option>
            <option value="Soto">Soto</option>
        </select>
        <input type="submit" name="Pilihmakanan" value="Pilih" />
    </form>
</body>

</html>

<!-- Input Text Area -->
<html>

<head>
    <title>Isi Alamat Lengkap Anda</title>
</head>

<body>
    <form action="Proses.php" method="post" name="input">
        <h2>Isi Alamat Lengkap Anda</h2>
        <textarea name="isi" cols="40" rows="5"></textarea><br>
        <input type="submit" name="Proses" value="Input Alamat" />
    </form>
</body>

</html>


<!DOCTYPE html>
<html>

<head>
    <style>
        .error {
            color: #ff0000;
        }
    </style>
</head>

<body>
    <?php
    // Inisialisasi variabel kesalahan dan input
    $namaErr = $emailErr = $genderErr = $websiteErr = "";
    $nama = $email = $gender = $komentar = $website = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Validasi nama
        if (empty($_POST["nama"])) {
            $namaErr = "Nama harus diisi";
        } else {
            $nama = test_input($_POST["nama"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
                $namaErr = "Hanya huruf dan spasi yang diperbolehkan";
            }
        }

        // Validasi email
        if (empty($_POST["email"])) {
            $emailErr = "Email harus diisi";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Format email tidak valid";
            }
        }

        // Validasi website
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "URL tidak valid";
            }
        }

        // Validasi komentar
        if (empty($_POST["komentar"])) {
            $komentar = "";
        } else {
            $komentar = test_input($_POST["komentar"]);
        }

        // Validasi gender
        if (empty($_POST["gender"])) {
            $genderErr = "Jenis kelamin harus diisi";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    // Fungsi untuk membersihkan input
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Contoh Validasi Form PHP</h2>
    <p><span class="error">* wajib diisi</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>">
        <span class="error">* <?php echo $namaErr; ?></span>
        <br><br>
        E-Mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        Komentar: <textarea name="komentar" rows="5" cols="40"><?php echo $komentar; ?></textarea>
        <br><br>
        Jenis Kelamin:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Perempuan
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Laki-laki
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $namaErr == "" && $emailErr == "" && $websiteErr == "" && $genderErr == "") {
        echo "<h2>Input Anda:</h2>";
        echo "Nama: $nama<br>";
        echo "Email: $email<br>";
        echo "Website: $website<br>";
        echo "Komentar: $komentar<br>";
        echo "Jenis Kelamin: $gender<br>";
    }
    ?>
</body>

</html>