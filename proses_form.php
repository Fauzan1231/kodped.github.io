<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirim dari formulir
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $message = $_POST['Message'];

    // Lakukan validasi atau operasi lainnya sesuai kebutuhan
    
    // Simpan data ke dalam file atau database, contoh sederhana menyimpan ke file teks
    $data = "Nama: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n\n";
    $file = 'data_tamu.txt';

    // Menyimpan data ke dalam file teks
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) !== false) {
        echo '<script>alert("Data berhasil disimpan. Terima kasih atas kunjungan Anda!");</script>';
    } else {
        echo '<script>alert("Maaf, ada kesalahan dalam menyimpan data.");</script>';
    }
}
?>
