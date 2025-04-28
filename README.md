<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Gambaran Umum
ProManage adalah sistem manajemen produk yang membantu bisnis dalam mengelola inventaris produk secara efisien. Sistem ini menyediakan antarmuka yang mudah digunakan untuk menambah, mengedit, dan melacak produk.

## Fitur Utama
1. Manajemen Produk
Tambah Produk: Tambahkan produk baru ke dalam sistem
Daftar Produk: Tampilkan semua produk dengan detail lengkap

2. Fungsi Pencarian dan Penyaringan
Pencarian: Cari produk berdasarkan nama
Penyaringan: Filter produk berdasarkan kategori
Pengurutan: Urutkan produk berdasarkan kriteria tertentu

3. Ekspor Data
Ekspor ke Excel: Unduh data produk dalam format Excel
Ekspor ke PDF: Buat laporan produk dalam format PDF

## Kolom Tampilan Produk
Kolom = Deskripsi
Name = Nama produk
Deskripsi = Keterangan tentang produk
Harga = Harga satuan produk
Stok = Jumlah stok tersedia
Kategori = Jenis/kategori produk
Aksi = Tombol untuk edit/hapus produk

contoh tampilan website:

| Name      | Deskripsi   | Harga    | Stok | Kategori | Aksi               |
|-----------|-------------|----------|------|----------|--------------------|
| jamu      | buyung      | Rp2.000  | 6    | minuman  | ✏️ Edit | 🗑️ Hapus |
| Adem Sari | enak tau    | Rp5.000  | 1000 | makanan  | ✏️ Edit | 🗑️ Hapus |
| Momogi    | apalah      | Rp4.000  | 2000 | minuman  | ✏️ Edit | 🗑️ Hapus |

## Panduan Penggunaan
- Menambah Produk Baru
1. Klik tombol "Tambah Produk"
2. Isi formulir dengan detail produk
3. Simpan data

- Mengedit Produk
1. Klik ikon ✏️ Edit pada produk yang ingin diubah
2. Perbarui informasi produk
3. Simpan perubahan

- Menghapus Produk
1. Klik ikon 🗑️ Hapus pada produk yang ingin dihapus
2. Konfirmasi penghapusan

- Mengekspor Data
1. Pilih format ekspor (Excel/PDF)
2. Klik tombol "Export"
3. File akan otomatis terunduh