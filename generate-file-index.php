<?php
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

// Hasilkan HTML yang bersih
$htmlContent = <<<HTML


MASUKAN CODE LP DISINI


HTML;

// Tulis HTML ke file
file_put_contents(__DIR__ . '/index.html', $htmlContent);

// Informasi berhasil
echo "HTML file has been generated at: " . __DIR__ . '/index.html';
?>
