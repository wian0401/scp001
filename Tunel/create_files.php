<?php
// Fungsi untuk membuat sitemap.xml
function createSitemap() {
    header('Content-Type: application/xml');
    
    // Direktori utama yang berisi folder
    $mainDir = '.';

    // Membaca daftar semua folder di direktori utama
    $folders = glob($mainDir . '/*', GLOB_ONLYDIR);

    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    // URL untuk halaman utama
    $sitemap .= '  <url>' . "\n";
    $sitemap .= '    <loc>' . 'https://' . $_SERVER['HTTP_HOST'] . '/</loc>' . "\n";
    $sitemap .= '  </url>' . "\n";

    foreach ($folders as $folder) {
        $folderName = basename($folder);
        $encodedFolderName = urlencode($folderName);
        $encodedFolderName = str_replace('+', '%20', $encodedFolderName); // Ganti + dengan %20

        // URL untuk folder utama
        $sitemap .= '  <url>' . "\n";
        $sitemap .= '    <loc>' . 'https://' . $_SERVER['HTTP_HOST'] . '/' . $encodedFolderName . '/</loc>' . "\n";
        $sitemap .= '  </url>' . "\n";
        
        // Mencari subfolder di dalam folder utama
        $subFolders = glob($folder . '/*', GLOB_ONLYDIR);
        foreach ($subFolders as $subFolder) {
            $subFolderName = basename($subFolder);
            $encodedSubFolderName = urlencode($subFolderName);
            $encodedSubFolderName = str_replace('+', '%20', $encodedSubFolderName); // Ganti + dengan %20
            
            // URL untuk subfolder
            $sitemap .= '  <url>' . "\n";
            $sitemap .= '    <loc>' . 'https://' . $_SERVER['HTTP_HOST'] . '/' . $encodedFolderName . '/' . $encodedSubFolderName . '/</loc>' . "\n";
            $sitemap .= '  </url>' . "\n";
        }
    }

    $sitemap .= '</urlset>';

    // Menyimpan sitemap.xml ke file
    file_put_contents('sitemap.xml', $sitemap);
    
    echo $sitemap;
}

// Fungsi untuk membuat robots.txt
function createRobotsTxt() {
    header('Content-Type: text/plain');
    
    // URL untuk sitemap
    $sitemapUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/sitemap.xml';

    $robotsTxt = "User-agent: *\n";
    $robotsTxt .= "Sitemap: $sitemapUrl\n";

    // Menyimpan robots.txt ke file
    file_put_contents('robots.txt', $robotsTxt);
    
    echo $robotsTxt;
}

// Fungsi utama untuk mengelola permintaan
function handleRequest() {
    $requestUri = $_SERVER['REQUEST_URI'];

    if (strpos($requestUri, 'sitemap.xml') !== false) {
        // Buat sitemap jika belum ada
        if (!file_exists('sitemap.xml')) {
            createSitemap();
        } else {
            header('Content-Type: application/xml');
            echo file_get_contents('sitemap.xml');
        }
    } elseif (strpos($requestUri, 'robots.txt') !== false) {
        // Buat robots.txt jika belum ada
        if (!file_exists('robots.txt')) {
            createRobotsTxt();
        } else {
            header('Content-Type: text/plain');
            echo file_get_contents('robots.txt');
        }
    } else {
        // Jika bukan permintaan sitemap atau robots.txt, bisa menampilkan pesan error atau konten lainnya
        http_response_code(404);
        echo "404 Not Found";
    }
}

// Jalankan fungsi utama untuk menangani permintaan
handleRequest();
?>
