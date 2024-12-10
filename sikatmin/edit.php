<?php
include_once('functions/api.php');

// Cek apakah formulir telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // Siapkan data untuk dikirim ke API
    $data = [
        'nama'  => $nama,
        'email' => $email
    ];

    // Kirim data ke API untuk menambahkan mahasiswa
    $response = sendDataToApi("mahasiswa", $data);

    // Jika berhasil, arahkan kembali ke halaman mahasiswa
    if ($response['status'] == 'success') {
        header('Location: mahasiswa.php');
        exit;
    } else {
        $error_message = "Gagal menambahkan mahasiswa. Coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Edit Mahasiswa</h1>
            <nav>
                <a href="index.php" class="text-white hover:text-blue-200">Kembali ke Dashboard</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Form Edit Mahasiswa</h2>

            <?php if (isset($error_message)): ?>
                <p class="text-red-600"><?= $error_message ?></p>
            <?php endif; ?>

            <form action="tambah_mahasiswa.php" method="POST">
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-semibold mb-2">Nama</label>
                    <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
                </div>
                <div>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Tambah Mahasiswa</button>
                </div>
            </form>
        </div>
    </main>

</body>
</html>
