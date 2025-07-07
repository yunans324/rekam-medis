<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="320" alt="Laravel Logo" />
  </a>
</p>

<p align="center">
  <img src="https://img.shields.io/github/stars/yunans324/rekam-medis?style=for-the-badge" alt="Stars">
  <img src="https://img.shields.io/github/forks/yunans324/rekam-medis?style=for-the-badge" alt="Forks">
  <img src="https://img.shields.io/github/issues/yunans324/rekam-medis?style=for-the-badge" alt="Issues">
  <img src="https://img.shields.io/github/license/yunans324/rekam-medis?style=for-the-badge" alt="License">
</p>

<h1 align="center">
  <span style="font-size:2.5rem; animation: heart 1s infinite alternate; display:inline-block;">❤️</span>
  Rekam Medis Laravel
  <span style="font-size:2rem; animation: pulse 1s infinite alternate; display:inline-block;">🩺</span>
</h1>

<p align="center">
  <em>Aplikasi Sistem Informasi Rekam Medis Digital berbasis Laravel & Blade</em>
</p>

<p align="center">
  <span style="font-size:2.2rem; animation: bounce 1.2s infinite alternate; display:inline-block;">🏥</span>
  <span style="font-size:2.2rem; animation: rotate 2s linear infinite; display:inline-block;">🧑‍⚕️</span>
  <span style="font-size:2.2rem; animation: wiggle 1.5s infinite alternate; display:inline-block;">💉</span>
</p>

---

## ✨ Fitur Utama

- <span style="font-size:1.3em; animation: bounce 0.9s infinite alternate; display:inline-block;">👨‍👩‍👧‍👦</span> **Manajemen Pasien:**  
  Tambah, edit, hapus & lihat data pasien dengan tampilan yang interaktif.
- <span style="font-size:1.3em; animation: pulse 1.1s infinite alternate; display:inline-block;">📋</span> **Rekam Medis Elektronik:**  
  Pencatatan riwayat pemeriksaan, diagnosa, tindakan, dan resep pasien.
- <span style="font-size:1.3em; animation: wiggle 1.2s infinite alternate; display:inline-block;">🩺</span> **Manajemen Dokter & Poli:**  
  Atur data dokter, poli, serta relasinya dengan pasien/kunjungan.
- <span style="font-size:1.3em; animation: bounce 1.2s infinite alternate; display:inline-block;">⏳</span> **Pendaftaran & Antrian:**  
  Pengelolaan antrian & pendaftaran pasien dengan animasi loading.
- <span style="font-size:1.3em; animation: pulse 1.2s infinite alternate; display:inline-block;">📈</span> **Laporan & Statistik:**  
  Laporan kunjungan, tindakan medis, & statistik kesehatan dalam chart dinamis.
- <span style="font-size:1.3em; animation: heart 0.9s infinite alternate; display:inline-block;">🔒</span> **Multi User & Hak Akses:**  
  Sistem role (admin, dokter, petugas), autentikasi dengan animasi login.
- <span style="font-size:1.3em; animation: wiggle 1.1s infinite alternate; display:inline-block;">🔍</span> **Pencarian & Filter Data:**  
  Cari data pasien, rekam medis, atau kunjungan secara real time.
- <span style="font-size:1.3em; animation: bounce 1.3s infinite alternate; display:inline-block;">🖨️</span> **Cetak & Export Data:**  
  Print kartu pasien, hasil rekam medis, & export ke PDF/Excel.
- <span style="font-size:1.3em; animation: pulse 1.3s infinite alternate; display:inline-block;">💾</span> **Backup & Restore Database:**  
  Backup otomatis dengan progress bar animasi.
- <span style="font-size:1.3em; animation: wiggle 1.0s infinite alternate; display:inline-block;">🔔</span> **Notifikasi Dinamis:**  
  Notifikasi realtime (SweetAlert/Toast) setiap aksi penting.

---

## 🛠️ Teknologi

- <span style="font-size:1.1em; animation: rotate 2s linear infinite; display:inline-block;">🚀</span> Laravel
- <span style="font-size:1.1em; animation: bounce 1.1s infinite alternate; display:inline-block;">🎨</span> Blade
- <span style="font-size:1.1em; animation: wiggle 1.1s infinite alternate; display:inline-block;">💠</span> Bootstrap 5
- <span style="font-size:1.1em; animation: pulse 1.2s infinite alternate; display:inline-block;">🗄️</span> MySQL / MariaDB
- <span style="font-size:1.1em; animation: bounce 1.3s infinite alternate; display:inline-block;">📊</span> DataTables, Chart.js
- <span style="font-size:1.1em; animation: wiggle 1.3s infinite alternate; display:inline-block;">🔔</span> SweetAlert2

---

## 🚀 Instalasi

1. **Clone Repo**  
   ```bash
   git clone https://github.com/yunans324/rekam-medis.git
   cd rekam-medis
   ```

2. **Install Dependensi**  
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Konfigurasi Environment**  
   ```
   cp .env.example .env
   ```
   - Edit `.env` untuk DB, App Key, dst.

4. **Generate Key**  
   ```
   php artisan key:generate
   ```

5. **Migrasi & Seed Database**  
   ```
   php artisan migrate --seed
   ```

6. **Jalankan Server**  
   ```
   php artisan serve
   ```
   Buka di [http://localhost:8000](http://localhost:8000)

---

## 👤 Akun Demo

| Role   | Email              | Password   |
|--------|--------------------|------------|
| Admin  | admin@demo.com     | password   |
| Dokter | dokter@demo.com    | password   |

---

## 📁 Struktur Penting

- `app/Models` — Model Eloquent Laravel (Pasien, RekamMedis, Dokter, dsb)
- `app/Http/Controllers` — Controller utama aplikasi
- `resources/views` — Blade template (tampilan halaman)
- `routes/web.php` — Routing utama aplikasi
- `database/migrations` — Struktur tabel database
- `database/seeders` — Seeder data awal

---

## 🎨 Inspirasi UI/UX

- **Icon:** Emoji, [Simple Icons](https://simpleicons.org/), [Font Awesome](https://fontawesome.com/), [Heroicons](https://heroicons.com/), [SVG Repo](https://www.svgrepo.com/)
- **Animasi:** Gunakan animasi CSS sederhana (bounce, pulse, rotate, wiggle, heart beat) pada icon/emoji di UI aplikasi (lihat contoh di README ini!)
- **Template Dashboard:** [Creative Tim](https://www.creative-tim.com/), [BootstrapMade](https://bootstrapmade.com/)

---

## 🤝 Kontribusi

Kontribusi sangat terbuka!  
Silakan buat issue untuk bug/ide, atau pull request untuk perbaikan.  
Panduan kontribusi bisa mengacu ke [Laravel Contribution Guide](https://laravel.com/docs/contributions).

---

## 🔒 Lisensi

Aplikasi ini open-source di bawah lisensi [MIT](https://opensource.org/licenses/MIT).

---

<p align="center">
  Dibuat dengan
  <span style="font-size:1.3em; animation: heart 0.9s infinite alternate; display:inline-block;">❤️</span>
  oleh <a href="https://github.com/yunans324">yunans324</a> & Kontributor
  <br/>
  <span style="font-size:2.2rem; animation: bounce 1.2s infinite alternate; display:inline-block;">🧑‍⚕️</span>
</p>

<!--
Animasi emoji hanya ilustrasi dan hanya aktif jika dipindahkan ke aplikasi web (HTML+CSS).  
Di GitHub, emoji akan tampil statis tapi tetap mempercantik README.
-->

<!--
Contoh animasi CSS untuk aplikasi web:
@keyframes bounce { 0% {transform: translateY(0);} 100% {transform: translateY(-10px);} }
@keyframes pulse  { 0% {transform: scale(1);} 100% {transform: scale(1.2);} }
@keyframes wiggle { 0% {transform: rotate(-6deg);} 100% {transform: rotate(6deg);} }
@keyframes rotate { 100% {transform: rotate(360deg);} }
@keyframes heart  { 0% {transform: scale(1);} 100% {transform: scale(1.1);} }
-->
