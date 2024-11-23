<?php
// URL halaman artikel non-AMP
$article_url = "https://stussyofficials.us/";

// URL halaman AMP
$amp_url = "https://pub-dfe8612f6aa446208f14923311b39cd6.r2.dev/stussyofficials.us.html";

// Keyword untuk backlink
$keyword = "rudaltoto";

// Fungsi untuk menyematkan link AMP dengan keyword
function insert_amp_link($article_url, $amp_url, $keyword) {
    // Ambil konten halaman artikel
    $content = file_get_contents($article_url);

    // Periksa apakah berhasil mendapatkan konten
    if ($content === FALSE) {
        die("Error: Tidak dapat mengakses konten halaman artikel.");
    }

    // Posisi di mana Anda ingin menyematkan link AMP, misalnya di bagian <head>
    $pos = strpos($content, '</head>');

    // Link AMP dengan keyword yang akan disematkan
    $amp_link = '<link rel="amphtml" href="' . $amp_url . '">' . "\n";
    $amp_link .= '<a href="' . $amp_url . '">' . $keyword . '</a>';

    // Menyisipkan link AMP sebelum tag </head>
    if ($pos !== FALSE) {
        $content = substr_replace($content, $amp_link, $pos, 0);
    } else {
        die("Error: Tidak dapat menemukan tag </head> di halaman artikel.");
    }

    // Menampilkan atau menyimpan kembali konten halaman dengan link AMP yang disematkan
    // Menampilkan langsung konten dengan link AMP yang disematkan
    echo $content;
}

// Panggil fungsi untuk menyematkan link AMP dengan keyword
insert_amp_link($article_url, $amp_url, $keyword);
?>
