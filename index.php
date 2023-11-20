<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Informasi Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulir Informasi Mahasiswa</h2>
        <form action="proses_input.php" method="post" onsubmit="return validateForm()">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>

            <label for="nim">NIM:</label>
            <input type="text" name="nim" id="nim" required>

            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" id="jurusan">

            <label for="semester">Semester:</label>
            <input type="number" name="semester" id="semester" min="1">

            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat"></textarea>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email">

            <button type="submit">Kirim</button>
        </form>
    </div>

    <script>
        function validateForm() {
            // Validasi dapat ditambahkan di sini sesuai kebutuhan
            return true; // Return false jika validasi gagal
        }
    </script>
</body>
</html>
