<?php
include_once('functions/api.php');

// Mengambil data mahasiswa dari backend API
$mahasiswa = getDataFromApi("mahasiswa");

// Cek apakah data yang diterima berupa array
if (is_array($mahasiswa)) {
    // Jika data mahasiswa kosong
    if (empty($mahasiswa)) {
        $error_message = "Data mahasiswa tidak ditemukan.";
    }
} else {
    // Jika data tidak dalam format array
    $error_message = "Terjadi kesalahan dalam mengambil data mahasiswa.";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Daftar Mahasiswa</h1>
            <nav>
                <a href="index.php" class="text-white hover:text-blue-200">Kembali ke Dashboard</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Tabel Mahasiswa</h2>
            <a href="tambah_mahasiswa.php" class="inline-block bg-blue-600 text-white p-2 rounded-lg mb-4 hover:bg-blue-700">Tambah Mahasiswa</a>

            <?php if (isset($error_message)): ?>
                <p class="text-red-600"><?= $error_message ?></p>
            <?php else: ?>
                <table class="min-w-full table-auto">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswa as $mhs): ?>
                            <tr>
                                <td class="border px-4 py-2">Har</td>
                                <td class="border px-4 py-2">sh</td>
                                <td class="border px-4 py-2">sh</td>
                                <td class="border px-4 py-2">
                                    <a href="edit.php" class="text-blue-600 hover:underline">Edit</a> | 
                                    <a href="tambah_mahasiswa.php" class="text-red-600 hover:underline">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </main>

</body>
</html>
