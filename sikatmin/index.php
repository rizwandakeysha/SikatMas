<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Dashboard Admin</h1>
            <nav>
                <a href="index.php" class="text-white hover:text-blue-200">Home</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold mb-6">Selamat datang, Admin!</h2>

            <!-- Tombol Navigasi ke Halaman-Halaman Pengelolaan Data -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <a href="mahasiswa.php" class="block bg-blue-600 text-white text-center py-4 rounded-lg hover:bg-blue-700 shadow-md">
                    <h3 class="font-semibold">Kelola Mahasiswa</h3>
                </a>
                <a href="mahasiswa_ktm.php" class="block bg-green-600 text-white text-center py-4 rounded-lg hover:bg-green-700 shadow-md">
                    <h3 class="font-semibold">Kelola Mahasiswa KTM</h3>
                </a>
                <a href="fakultas.php" class="block bg-yellow-600 text-white text-center py-4 rounded-lg hover:bg-yellow-700 shadow-md">
                    <h3 class="font-semibold">Kelola Fakultas</h3>
                </a>
                <a href="program_studi.php" class="block bg-indigo-600 text-white text-center py-4 rounded-lg hover:bg-indigo-700 shadow-md">
                    <h3 class="font-semibold">Kelola Program Studi</h3>
                </a>
            </div>
        </div>
    </main>

</body>
</html>
