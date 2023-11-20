<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "2106166_MahesaAlZidane";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

// Query untuk menyimpan data ke database
$query = "INSERT INTO Mahasiswa (nama, nim, jurusan, semester, alamat, email) 
          VALUES ('$nama', '$nim', '$jurusan', '$semester', '$alamat', '$email')";

// Eksekusi query
if ($conn->query($query) === TRUE) {
    echo "Data berhasil disimpan. Silakan kembali ke <a href='index.php'>Formulir</a>.";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
