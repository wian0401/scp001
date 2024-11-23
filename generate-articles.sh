#!/bin/bash

# Jumlah artikel
jumlah_artikel=1000

# Fungsi untuk membuat judul unik dengan kata kunci terkait TOTO5D
buatJudul() {
    prefix=("Link Terpercaya" "SitusToto Resmi" "Bandar Togel Online" "Panduan Togel" "Cara Main Togel")
    keyword=("TOTO5D" "Situs Togel" "Bandar TOTO" "Togel Online" "SitusToto Terpercaya")
    suffix=("Di Indonesia" "Yang Terpercaya" "2024" "Terbaik" "Terlengkap")
    echo "${prefix[RANDOM % ${#prefix[@]}]} ${keyword[RANDOM % ${#keyword[@]}]} ${suffix[RANDOM % ${#suffix[@]}]}"
}

# Fungsi untuk membuat deskripsi unik
buatDeskripsi() {
    awal=("Temukan" "Dapatkan" "Nikmati" "Pelajari" "Cari tahu")
    tengah=("cara terbaik" "link terpercaya" "situs resmi" "panduan lengkap" "bandar togel online")
    akhir=("TOTO5D di Indonesia." "untuk bermain TOTO5D online." "dengan bandar togel terpercaya." "yang aman dan resmi." "dengan bonus terbaik.")
    echo "${awal[RANDOM % ${#awal[@]}]} ${tengah[RANDOM % ${#tengah[@]}]} ${akhir[RANDOM % ${#akhir[@]}]}"
}

# Membuat folder dan file HTML untuk setiap artikel
for ((i=1; i<=jumlah_artikel; i++))
do
    # Membuat folder dengan nama terurut
    folder="rudaltoto-$i"
    mkdir -p "$folder"  # Membuat folder dengan nama terurut

    judul=$(buatJudul)  # Membuat judul artikel
    deskripsi=$(buatDeskripsi)  # Membuat deskripsi artikel

    # Membuat file HTML
    cat <<EOL > "$folder/index.html"
<html>
<head>
    <title>$judul</title>
    <meta name="description" content="$deskripsi">
</head>
<body>
    <h1>$judul</h1>
    <p>$deskripsi</p>
    <p>SitusToto adalah pilihan terbaik untuk bermain TOTO5D online dengan aman dan terpercaya. Daftar sekarang dan dapatkan peluang menang lebih besar di bandar togel resmi.</p>
    <p>Pastikan Anda selalu bermain di situs yang sudah berlisensi resmi agar terhindar dari penipuan.</p>
</body>
</html>
EOL

    echo "Artikel $i berhasil dibuat di folder: $folder"
done
