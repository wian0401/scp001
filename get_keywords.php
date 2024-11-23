<?php
header('Content-Type: application/json');

// Path ke file list.txt
$listFilePath = __DIR__ . '/list.txt';
$keywords = [];

// Cek jika file list.txt ada
if (file_exists($listFilePath)) {
    // Membaca file dan mengabaikan baris kosong
    $keywords = file($listFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

// Gabungkan kata kunci menjadi string yang dipisahkan koma
$keywordsString = implode(', ', $keywords);

// Output JSON
echo json_encode(['keywords' => $keywordsString]);
?>
