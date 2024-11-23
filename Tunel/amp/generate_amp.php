<?php
// Tentukan lokasi file list.txt dan direktori tempat folder akan dibuat
$listFile = 'list.txt';
$baseDir = __DIR__ . '/'; // Direktori saat ini
$ampBaseUrl = 'https://floridavdr.com/amp/'; // Base URL untuk AMP
$desktopBaseUrl = 'https://floridavdr.com/'; // Base URL untuk versi desktop

// Fungsi untuk mengambil title dan description dari URL desktop menggunakan cURL
function fetchTitleAndDescription($url) {
    $cacheFile = 'cache/' . md5($url) . '.html';
    if (file_exists($cacheFile)) {
        $html = file_get_contents($cacheFile);
    } else {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $html = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode != 200 || $html === false) {
            error_log("Failed to fetch $url. HTTP Code: $httpCode"); // Log error
            return ['title' => 'Default Title', 'description' => 'Default Description'];
        }

        // Simpan hasil ke cache
        if (!file_exists('cache')) {
            mkdir('cache', 0755, true);
        }
        file_put_contents($cacheFile, $html);
    }

    $dom = new DOMDocument;
    @$dom->loadHTML($html);

    // Ambil title
    $titleNode = $dom->getElementsByTagName('title')->item(0);
    $title = $titleNode ? trim($titleNode->textContent) : 'Default Title';

    // Ambil description
    $description = 'Default Description';
    $metaTags = $dom->getElementsByTagName('meta');
    foreach ($metaTags as $meta) {
        if ($meta->getAttribute('name') === 'description') {
            $description = trim($meta->getAttribute('content'));
            break;
        }
    }

    // Debugging
    error_log("Fetched title: $title");
    error_log("Fetched description: $description");

    return [
        'title' => $title,
        'description' => $description
    ];
}

// Fungsi untuk membuat file AMP
function createAmpFile($folderPath, $title, $description, $canonicalUrl, $keyword) {
    // Pastikan direktori ada
    if (!file_exists($folderPath)) {
        if (!mkdir($folderPath, 0755, true)) {
            die("Failed to create directory: $folderPath");
        }
    }

    $ampFile = $folderPath . '/index.html';
    $ampContent = <<<AMP
<!DOCTYPE html>
<html amp lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="$description">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:title" content="$title">
  <meta property="og:description" content="$description">
  <link rel="canonical" href="$canonicalUrl">
  <title>$title</title>
  <link rel="preload" as="image" href="https://i.pinimg.com/736x/e5/ad/a9/e5ada90cf79c40ac6b66f643a7cfd7a2.jpg?auto=compress&cs=tinysrgb&w=300" />
  <meta property="og:type" content="website">
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="TOTO TOGEL" />
  <meta property="og:locale" content="id_ID" />
  <meta property="og:image" content="https://i.pinimg.com/736x/e5/ad/a9/e5ada90cf79c40ac6b66f643a7cfd7a2.jpg?auto=compress&cs=tinysrgb&w=300"/>
  <meta property="og:image:width" content="640" />
  <meta property="og:image:height" content="299" />
  <meta name="geo.region" content="ID" />
  <meta name="geo.country" content="id" />
  <meta name="geo.placename" content="Indonesia" />
  <meta name="author" content="TOTO TOGEL" />
  <meta name="publisher" content="TOTO TOGEL" />
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon-situs-toto5d.png" />
    <link href='/img/favicon-situs-toto5d.png' rel='icon' sizes='32x32' type='image/png' />
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-install-serviceworker"
    src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
    <style amp-boilerplate>body {-webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;-moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;-ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;animation: -amp-start 8s steps(1, end) 0s 1 normal both}@-webkit-keyframes -amp-start {from {visibility: hidden}to {visibility: visible}}@-moz-keyframes -amp-start {from {visibility: hidden}to {visibility: visible}}@-ms-keyframes -amp-start {from {visibility: hidden}to {visibility: visible}}@-o-keyframes -amp-start {from {visibility: hidden}to {visibility: visible}}@keyframes                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                -amp-start {from {visibility: hidden}to {visibility: visible}}</style><noscript><style amp-boilerplate>body {-webkit-animation: none;-moz-animation: none;-ms-animation: none;animation: none}</style></noscript>
    <style amp-custom>:root{--white:#b88506;--max-width:1080px;--n-space:min(max(12px,3.5vmin),30px);--n-space-s:min(max(8px,2vmin),20px);--n-space-xs:min(max(4px,1vmin),10px);--base:#1c0d0d;--primary:#00a128;--secondary:#580000;--secondary-hover:#5e0505;--tertiary:#d39393;--red:#9b0000;--blue:#e13b3b;--radius:12px;--h1:calc(32px + (42 - 32) * ((100vw - 360px) / (1920 - 360)))}body{color:var(--white);background:#001f05;font-family:-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol"}a{text-decoration:none;color:#fff}h1{font-size:var(--h1)}::-webkit-scrollbar{width:10px}::-webkit-scrollbar-track{background:var(--primary)}::-webkit-scrollbar-thumb{background:var(--white)}::-webkit-scrollbar-thumb:hover{background:#b88506}.nav{background:#00a128;width:calc(100% - 30px);position:fixed;top:0;left:0;z-index:9999;display:flex;align-items:stretch;justify-content:space-between;padding:.5rem 1rem}.logo{background-color:#001f05;border-radius:10px;transform:skewY(-3deg) skewX(-17deg);padding:36px 25px 16px 66px;margin:-30px 0 -20px -65px;display:flex;align-items:center}.logo-inner{transform:skewY(3deg) skewX(17deg);display:flex;align-items:center}.button-wrapper{display:flex;align-items:center}.button-wrapper a:first-child{margin-right:var(--n-space-s)}.n-container{max-width:var(--max-width);margin:auto;padding:0 var(--n-space)}.hero{padding-top:calc(var(--n-space) + var(--n-space) + var(--n-space))}.n-columns-gap{grid-gap:var(--n-space-s)}.n-columns-2{display:grid;grid-template-columns:repeat(2,1fr)}.n-columns-3{display:grid;grid-template-columns:repeat(3,1fr)}.n-columns-6{display:grid;grid-template-columns:repeat(6,1fr)}.n-columns-5{display:grid;grid-template-columns:repeat(5,1fr)}.n-span-2{grid-row:span 2/span 2;grid-column:span 2/span 2}.n-slots{border-radius:var(--radius)}.bg-container{background:var(--primary);border-radius:var(--radius)}.padding-normal{padding:var(--n-space)}.padding-s{padding:var(--n-space-s)}.m-b-normal{margin-bottom:var(--n-space)}.middle{display:flex;flex-direction:column;justify-content:center}.center{display:flex;justify-content:center;align-items:center}.tabs{border-radius:var(--radius)}.tabs{background:#010101}.tabs:hover{background:var(--secondary-hover)}.tabs img{margin-right:var(--n-space-s)}table{background:var(--primary);padding:var(--n-space);width:100%;border-radius:var(--radius)}td{background:#010101;border-radius:var(--radius);padding:var(--n-space-s)}@media                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                only screen and (max-width:768px){.n-columns-m-1{grid-template-columns:1fr}.n-columns-m-2{grid-template-columns:repeat(2,1fr)}.n-columns-m-3{grid-template-columns:repeat(3,1fr)}.n-span-2{grid-row:span 2/span 2;grid-column:span 2/span 2}.n-hidden{display:none}.hero{margin-bottom:var(--n-space)}}.btn,.btn-primary{background-color:var(--blue)}.btn,.btn-primary,.btn-secondary{color:#b88506;border-radius:var(--radius);text-align:center;font-weight:700}.btn-secondary{background:#b88506}.btn{padding:var(--n-space-s) var(--n-space);box-shadow:0 0 25px rgb(29 113 237 / 50%)}.btn-primary,.btn-secondary{font-size:15px;padding:var(--n-space-xs) var(--n-space-s)}.article{border:1px solid #b88506;padding:var(--n-space);border-radius:var(--radius)}.contain{padding:var(--n-space)}.article p,li{color:#e5d6d6;line-height:1.6}.article a{color:#b88506}.article ul{padding-left:1.5rem}.btn-link a{display:flex;width:100%;justify-content:center;font-weight:700;padding:var(--n-space-s)}.btn-link a:hover{color:var(--blue)}.menu-list{padding:0;display:flex;list-style:none;flex-wrap:wrap;text-align:center;white-space:nowrap;justify-content:center}.menu-list li{flex:0 0 25%;max-width:25%}.menu-list li div{padding:0 .5rem}.menu-list li a{display:flex;padding:5px 0;align-items:center;flex-direction:column;text-transform:uppercase;font-size:14px}.menu-list li a:hover{color:var(--blue)}.decimal{list-style:decimal}.daftar-isi{border: 1px solid #001f05;padding: 10px; max-width: 500px; border-radius: 5px;}.daftar-isi ul{margin-top: .5rem;}.daftar-isi ul li a{color:#b88506;text-decoration: underline;}.daftar-isi ul li a:hover{color:var(--blue)}.decimal{list-style: decimal;}</style>
     <script type="application/ld+json">
 
            </script>
</head>
<body>
<amp-pixel src="https://www.facebook.com/tr?id=997642637968185&ev=PageView&noscript=1" 
    layout="nodisplay"></amp-pixel>
<amp-pixel src="https://www.facebook.com/tr?id=833662751738494&ev=PageView&noscript=1" 
    layout="nodisplay"></amp-pixel>
  <div class="nav">
    <div class="logo">
      <div class="logo-inner">
        <a href="">
          <amp-img src="/img/logo-situs-toto5d.png" width="194" height="44px" layout="intrinsic" alt="TOTO TOGEL"></amp-img>
        </a>
      </div>
    </div>
    <div class="button-wrapper">
      <a href="https://daftartoto.co/ideca/" target="_blank" rel="nofollow" class="btn-secondary" style="color: white">Masuk</a>
      <a href="https://daftartoto.co/ideca/" target="_blank" rel="nofollow" class="btn-primary" style="color: white">Daftar</a>
    </div>
  </div>
  <header class="n-container hero">
      <div class="middle" style="text-align: center;">
        <h1>$title</h1>
        <amp-img src="https://i.pinimg.com/736x/e5/ad/a9/e5ada90cf79c40ac6b66f643a7cfd7a2.jpg?auto=compress&cs=tinysrgb&w=300" alt="TOTO TOGEL" width="849" height="344" layout="responsive"></amp-img>
      </div> 
    </div>
  </header>
  <section class="n-container m-b-normal">
    <div class="bg-container padding-s m-b-normal">
      <ul class="menu-list">
        <li>
          <div>
              <a href="https://daftartoto.co/ideca/" target="_blank" rel="nofollow">
                <amp-img data-hero layout="intrinsic" height="30px" width="30px" src="https://pub-af555c3ab8714a458ba6ff78f168fc49.r2.dev/img/android-toto-togel.png" alt="Bandar Toto Togel Online"></amp-img>
                DOWNLOAD
              </a>
          </div>
        </li>
        <li>
          <div>
              <a href="https://daftartoto.co/ideca/" target="_blank" rel="nofollow">
                <amp-img data-hero layout="intrinsic" height="30px" width="30px" src="https://pub-af555c3ab8714a458ba6ff78f168fc49.r2.dev/img/bonus-toto-togel.png" alt="Bonus Slot TOTO TOGEL"></amp-img>
                BONUS
              </a>
          </div>
        </li>
        <li>
          <div>
              <a href="https://daftartoto.co/ideca/" target="_blank" rel="nofollow">
                <amp-img data-hero layout="intrinsic" height="30px" width="30px" src="https://pub-af555c3ab8714a458ba6ff78f168fc49.r2.dev/img/whatsapp-toto-togel.png" alt="Whatsapp TOTO TOGEL"></amp-img>
                WHATSAPP
              </a>
          </div>
        </li>
        <li>
          <div>
              <a href="https://daftartoto.co/ideca/" target="_blank" rel="nofollow">
                <amp-img data-hero layout="intrinsic" height="30px" width="30px" src="https://pub-af555c3ab8714a458ba6ff78f168fc49.r2.dev/img/live-chat-toto-togel.png" alt="Live Chat TOTO TOGEL"></amp-img>
                LIVE CHAT
              </a>
          </div>
        </li>
        <li>
          <div>
          </div>
        </li>
      </ul>
    </div>
    <div class="bg-container n-columns-2 n-columns-m-2 n-columns-gap padding-s m-b-normal">
      <div class="center tabs btn-link">
        <a href="https://daftartoto.co/ideca/" target="_blank" rel="nofollow" >
          LOGIN
        </a>
      </div>
      <div class="center tabs btn-link">
        <a href="https://daftartoto.co/ideca/" target="_blank" rel="nofollow" >
          REGISTER
        </a>
      </div>
    </div>
  </section>
  <section class="n-container m-b-normal">
    <div class="n-columns-6 n-columns-m-3 n-columns-gap">
      <amp-img class="n-slots" src="https://pub-af555c3ab8714a458ba6ff78f168fc49.r2.dev/img/Game-Slot-Fa-Cai-Shen.png" width="30px" height="30px" layout="responsive" alt="Slot Online TOTO TOGEL"></amp-img>
      <amp-img class="n-slots" src="https://pub-af555c3ab8714a458ba6ff78f168fc49.r2.dev/img/Game-Slot-Fortune-Tiger.png" width="30px" height="30px" layout="responsive" alt="Slot Online TOTO TOGEL"></amp-img>
      <amp-img class="n-slots" src="https://pub-af555c3ab8714a458ba6ff78f168fc49.r2.dev/img/Game-Slot-Gate-Of-Olympus.png" width="30px" height="30px" layout="responsive" alt="Slot Online TOTO TOGEL"></amp-img>
      <amp-img class="n-slots" src="https://pub-af555c3ab8714a458ba6ff78f168fc49.r2.dev/img/Game-Slot-Queen-Bounty.png" width="30px" height="30px" layout="responsive" alt="Slot Online TOTO TOGEL"></amp-img>
      <amp-img class="n-slots" src="https://pub-af555c3ab8714a458ba6ff78f168fc49.r2.dev/img/Game-Slot-Geenie-Wishes.png" width="30px" height="30px" layout="responsive" alt="Slot Online TOTO TOGEL"></amp-img>
      <amp-img class="n-slots" src="https://pub-af555c3ab8714a458ba6ff78f168fc49.r2.dev/img/Game-Slot-Mahjong-Ways.png" width="300px" height="300px" layout="responsive" alt="Slot Online TOTO TOGEL"></amp-img>
    </div>
  </section>
  <section class="n-container m-b-normal">
    <table>
      <tbody>
        <tr>
          <td>Nama Situs:</td>
          <td>$keyword</td>
        </tr>
        <tr>
          <td>Min. Deposit:</td>
          <td>💰Rp5.000,-</td>
        </tr>
        <tr>
          <td>Min. Withdraw:</td>
          <td>💰Rp25.000,</td>
        </tr>
        <tr>
          <td>Metode Deposit:</td>
          <td>🏧Bank, 💳E-Wallet, 🏁QRis, 📱Pulsa</td>
        </tr>
        <tr>
          <td>Judi Online Hari Ini:</td>
          <td> Slot Online, Casino Online, Sportsbook, Togel, Arcade Games, dll..</td>
        </tr>
      </tbody>
    </table>
  </section>
  <section class="n-container m-b-normal">
    <article class="bg-container contain" style="text-align: justify;">
      </article>
  </section>
  <section class="n-container m-b-normal">
    <div class="container" style="text-align: center;">
      <span><b>©$title. All Rights Reserved.</b></span>
    </div>
  </section>
</body>
</html>
AMP;

    // Tulis konten ke file
    file_put_contents($ampFile, $ampContent);
}

// Baca isi file list.txt
if (!file_exists($listFile)) {
    die("File $listFile tidak ditemukan.");
}

$folders = file($listFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if ($folders === false) {
    die("Gagal membaca file $listFile.");
}

// Proses setiap folder
foreach ($folders as $folder) {
    $keyword = trim($folder);

    for ($i = 0; $i <= 250; $i++) {
        $folderBaseName = $keyword . ($i > 0 ? '-' . $i : '');
        $folderPath = $baseDir . $folderBaseName;
        $canonicalUrl = $desktopBaseUrl . rawurlencode($folderBaseName) . '/';
        $ampUrl = $ampBaseUrl . rawurlencode($folderBaseName) . '/';

        $data = fetchTitleAndDescription($canonicalUrl);
        $fullTitle = $data['title'];
        $fullDescription = $data['description'];

        createAmpFile($folderPath, $fullTitle, $fullDescription, $canonicalUrl, $keyword);
    }
}

echo "Selesai";
?>