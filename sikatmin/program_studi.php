<?php
include_once('functions/api.php');

// Mengambil data program studi dari backend API
$program_studi = getDataFromApi("program_studi");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Program Studi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Daftar Program Studi</h1>
            <nav>
                <a href="index.php" class="text-white hover:text-blue-200">Kembali ke Dashboard</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Tabel Program Studi</h2>
            <a href="tambah_program_studi.php" class="inline-block bg-blue-600 text-white p-2 rounded-lg mb-4 hover:bg-blue-700">Tambah Program Studi</a>
            
            <table class="min-w-full table-auto">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Nama Program Studi</th>
                        <th class="px-4 py-2">Fakultas</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($program_studi as $prog): ?>
                        <tr>
                            <td class="border px-4 py-2"><?= $prog['id'] ?></td>
                            <td class="border px-4 py-2"><?= $prog['nama'] ?></td>
                            <td class="border px-4 py-2"><?= $prog['fakultas'] ?></td>
                            <td class="border px-4 py-2">
                                <a href="edit_program_studi.php?id=<?= $prog['id'] ?>" class="text-blue-600 hover:underline">Edit</a> | 
                                <a href="hapus_program_studi.php?id=<?= $prog['id'] ?>" class="text-red-600 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>