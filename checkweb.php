<?php
// Tentukan password hash yang diizinkan
$allowed_pass_hash = "668d3f3fa2bf0c6391483965d9fb9485";

// Ambil password dari parameter GET atau POST
$pass = isset($_GET['pass']) ? $_GET['pass'] : (isset($_POST['pass']) ? $_POST['pass'] : '');

// Cek otentikasi password
if (md5($pass) !== $allowed_pass_hash) {
    echo "<html>
    <head>
        <title>Otentikasi Diperlukan</title>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
            .container { width: 40%; margin: auto; padding: 20px; background: #fff; border: 1px solid #ddd; border-radius: 5px; }
            input[type=password] { padding: 10px; width: 100%; margin-bottom: 10px; border: 1px solid #ddd; box-sizing: border-box; }
            input[type=submit] { background-color: #4CAF50; color: white; padding: 10px; border: none; cursor: pointer; }
            input[type=submit]:hover { background-color: #45a049; }
            .error { color: red; font-weight: bold; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Masukkan Password</h2>
            <form method='post'>
                <input type='password' name='pass' placeholder='Password' required>
                <input type='submit' value='Login'>
            </form>
            " . ($pass ? "<p class='error'>Password salah</p>" : "") . "
        </div>
    </body>
    </html>";
    exit;
}

// Tentukan direktori dasar
$base_directory = './'; // Ganti dengan direktori yang diinginkan

// Ambil parameter direktori saat ini
$current_dir = isset($_GET['dir']) ? $_GET['dir'] : $base_directory;

// Daftar pola web shell yang umum
$suspicious_patterns = [
    '/eval\s*\(/i',           // Fungsi eval
    '/base64_decode\s*\(/i',  // Fungsi base64_decode
    '/shell_exec\s*\(/i',     // Fungsi shell_exec
    '/system\s*\(/i',         // Fungsi system
    '/exec\s*\(/i',           // Fungsi exec
    '/passthru\s*\(/i',       // Fungsi passthru
    '/preg_replace\s*\(/i',   // Fungsi preg_replace dengan /e modifier
    '/assert\s*\(/i',         // Fungsi assert
    '/chmod\s*\(/i',          // Fungsi chmod
    '/preg_match\s*\(/i',     // Fungsi preg_match
    '/<?php\s*?eval\s*\(/i',  // PHP opening tag and eval
    '/<?php\s*?system\s*\(/i' // PHP opening tag and system
];

// Fungsi untuk mendeteksi web shell berdasarkan konten
function isWebShell($filePath, $patterns) {
    $content = @file_get_contents($filePath);
    if ($content === false) {
        return false;
    }
    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $content)) {
            return true;
        }
    }
    return false;
}

// Fungsi untuk menampilkan hasil deteksi web shell
function detectWebShells($dir, $patterns) {
    $files = array();

    if (is_dir($dir)) {
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
        
        foreach ($iterator as $fileinfo) {
            if ($fileinfo->isFile()) {
                $filePath = $fileinfo->getPathname();
                $fileName = $fileinfo->getFilename();
                $extension = pathinfo($fileName, PATHINFO_EXTENSION);

                // Periksa hanya file PHP untuk deteksi web shell
                if ($extension === 'php' && isWebShell($filePath, $patterns)) {
                    $files[] = array(
                        'name' => $fileName,
                        'path' => $filePath,
                        'size' => filesize($filePath),
                        'mtime' => filemtime($filePath)
                    );
                }
            }
        }

        // Tampilkan hasil
        echo "<html>
        <head>
            <title>Deteksi Web Shell</title>
            <style>
                body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
                .container { width: 80%; margin: auto; padding: 20px; }
                table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
                th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
                th { background-color: #4CAF50; color: white; }
                tr:nth-child(even) { background-color: #f2f2f2; }
                .suspicious { color: red; font-weight: bold; }
                .directory { color: blue; font-weight: bold; }
                .back-link { font-weight: bold; margin-bottom: 20px; display: inline-block; }
            </style>
        </head>
        <body>
            <div class='container'>
                <h2>Deteksi Web Shell di Direktori: " . htmlspecialchars($dir) . "</h2>
                <a class='back-link' href='?dir=" . urlencode(dirname($dir)) . "'>Kembali ke Direktori Induk</a>
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Ukuran (KB)</th>
                            <th>Tanggal Modifikasi</th>
                            <th>Path</th>
                        </tr>
                    </thead>
                    <tbody>";

        // Tampilkan file mencurigakan
        foreach ($files as $file) {
            echo "<tr>
                    <td>" . htmlspecialchars($file['name']) . "</td>
                    <td>" . number_format($file['size'] / 1024, 2) . "</td>
                    <td>" . date("d-m-Y H:i:s", $file['mtime']) . "</td>
                    <td><a href='" . htmlspecialchars($file['path']) . "'>" . htmlspecialchars($file['path']) . "</a></td>
                  </tr>";
        }

        echo "    </tbody>
                </table>
            </div>
        </body>
        </html>";
    } else {
        echo "Direktori tidak ditemukan.";
    }
}

// Panggil fungsi untuk mendeteksi web shell
detectWebShells($current_dir, $suspicious_patterns);
?>