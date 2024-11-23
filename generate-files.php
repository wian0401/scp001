<?php

// URL domain yang diinginkan
$domain = "https://financeofuk.com/";

// Membangun isi sitemap XML
$xml_content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml_content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
$xml_content .= '<url><loc>' . htmlspecialchars($domain) . '</loc></url>' . "\n";
// Tambahkan URL lainnya sesuai kebutuhan
$xml_content .= '</urlset>';

// Simpan sitemap.xml
file_put_contents('sitemap.xml', $xml_content);

// Membangun isi robots.txt
$robots_content = "User-agent: *\n";
$robots_content .= "Allow: " . $domain . "sitemap.xml\n";
$robots_content .= "Disallow: ";

// Simpan robots.txt
file_put_contents('robots.txt', $robots_content);

echo "Sitemap.xml dan robots.txt berhasil dibuat.";

?>
