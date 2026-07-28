# Sistem-Pakar-HIV-AIDS
Web-Based Expert System for Early HIV/AIDS Diagnosis using Forward Chaining.
# Sistem Pakar Diagnosis Awal HIV/AIDS

Sistem pakar berbasis web untuk membantu diagnosis awal HIV/AIDS menggunakan metode **Forward Chaining**, dikembangkan sebagai bagian dari Tugas Akhir/Skripsi untuk **Kios Atma Jaya**.

## 📌 Latar Belakang

HIV (Human Immunodeficiency Virus) adalah virus yang menyerang sistem kekebalan tubuh dan dapat menyebabkan AIDS jika tidak ditangani. Penularannya bisa terjadi melalui hubungan seksual tanpa pengaman, penggunaan jarum suntik bersama, dan dari ibu ke anak selama kehamilan, persalinan, atau menyusui.

Sistem ini dibangun untuk membantu memberikan **diagnosis awal** berdasarkan gejala yang dialami pengguna, menggunakan metode **Forward Chaining** untuk melakukan penalaran dari fakta (gejala) menuju kesimpulan (diagnosis).

## ✨ Fitur

- Konsultasi diagnosis awal HIV/AIDS berdasarkan gejala
- Metode penalaran **Forward Chaining**
- Manajemen data gejala dan rule oleh admin
- Riwayat konsultasi/diagnosis pengguna
- Dashboard admin dengan ringkasan data (riwayat, rule, diagnosa, admin)
- Autentikasi login admin

## 🛠️ Teknologi yang Digunakan

- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript

## 📁 Struktur Folder

```
├── css/                # Stylesheet
├── js/                 # Script JavaScript
├── forms/              # Form input/proses
├── screenshots/         # Tangkapan layar aplikasi
├── admin.php            # Halaman admin
├── dashboard.php        # Dashboard admin
├── diagnosa.php         # Proses diagnosis
├── gejala.php           # Manajemen data gejala
├── koneksi.php          # Koneksi ke database
├── proses-login.php     # Proses autentikasi login
├── index.php            # Halaman utama
└── hiv_db.sql           # File database (import ke MySQL)
```

## 🚀 Cara Menjalankan

1. Clone repository ini
   ```bash
   git clone https://github.com/Septy02/Sistem-Pakar-HIV-AIDS.git
   ```
2. Import file `hiv_db.sql` ke MySQL (misalnya lewat phpMyAdmin)
3. Sesuaikan konfigurasi koneksi database di `koneksi.php`
4. Jalankan menggunakan server lokal (XAMPP/Laragon)
5. Akses melalui browser, contoh: `http://localhost/Sistem-Pakar-HIV-AIDS`

## 📸 Screenshot

### Halaman Utama
![Halaman Utama](screenshots/home.png)

### Halaman Login Admin
![Login](screenshots/login.png)

### Riwayat Diagnosa
![Riwayat Diagnosa](screenshots/riwayat-diagnosa.png)

### Dashboard Admin
![Dashboard](screenshots/dashboard.png)

## 👤 Kontak

Nama - [emailkamu@example.com](mailto:emailkamu@example.com)  
GitHub: [@Septy02](https://github.com/Septy02)
