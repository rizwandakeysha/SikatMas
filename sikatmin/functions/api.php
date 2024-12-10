<?php

// Mendefinisikan base URL dari API
define('API_URL', 'https://2c93-175-45-191-12.ngrok-free.app');

// Fungsi untuk mengambil data dari API menggunakan curl
function getDataFromAPI($endpoint)
{
    $url = API_URL . $endpoint;  // Menggabungkan base URL dengan endpoint yang diminta

    // Inisialisasi cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);  // Mengikuti redirect jika ada
    $response = curl_exec($ch);  // Mengambil respons dari API
    curl_close($ch);

    // Cek apakah request berhasil
    if ($response === false) {
        return ['error' => 'Failed to retrieve data'];
    }

    return json_decode($response, true);  // Mengembalikan data yang diterima dalam format array
}

// Fungsi untuk mengirim data ke API menggunakan curl
function sendDataToAPI($endpoint, $data)
{
    $url = API_URL . $endpoint;  // Menggabungkan base URL dengan endpoint
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);  // Menggunakan POST
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));  // Mengirim data dalam format JSON

    $response = curl_exec($ch);  // Mengirim request
    curl_close($ch);

    // Cek apakah request berhasil
    if ($response === false) {
        return ['error' => 'Failed to send data'];
    }

    return json_decode($response, true);  // Mengembalikan respons dalam format array
}

// Fungsi untuk mengupdate data ke API menggunakan curl
function updateDataToAPI($endpoint, $data)
{
    $url = API_URL . $endpoint;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");  // Menggunakan PUT untuk update
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));  // Mengirim data dalam format JSON

    $response = curl_exec($ch);
    curl_close($ch);

    // Cek apakah request berhasil
    if ($response === false) {
        return ['error' => 'Failed to update data'];
    }

    return json_decode($response, true);
}

// Fungsi untuk menghapus data dari API menggunakan curl
function deleteDataFromAPI($endpoint)
{
    $url = API_URL . $endpoint;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");  // Menggunakan DELETE untuk menghapus
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);

    $response = curl_exec($ch);
    curl_close($ch);

    // Cek apakah request berhasil
    if ($response === false) {
        return ['error' => 'Failed to delete data'];
    }

    return json_decode($response, true);
}
