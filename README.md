<h1>cara pemasangan apikasi</h1>
<ol>
    <li>clone repository dengan buka cmd "git clone https://github.com/helium01/kandang_ayam_monitoring"</li>
    <li>"cd kandang_ayam_monitoring"</li>
    <li>code . <small>pastikan anda memiliki vs code </small></li>
    <li>buka terminal di vs code kemudian ketik "composer update"</li>
    <li>setelah itu buat file .env dan copy semua isi dari file .env.example</li>
    <li>buat database di phpmyadmin sesuai dengan setingan database .env</li>
    <li>kembali ke terminal "php artisan migrate"</li>
    <li>jalankan laravel</li>
</ol>
