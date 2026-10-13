# Prak_PBW_A_Railene_24081<div align="center">

# "PRAKTIKUM PBW – A"

*"Disusun Untuk Memenuhi Tugas Mata Kuliah Praktikum PBW A"*

<br>

<br> <img src="assets/prak1-2/00-logo-upp.png" alt="Logo Universitas Pancasila" width="220"> <br>

<br>

**Disusun Oleh**

Railene Akbillah Ramadhan Haryanto - 4524210081

**Dosen Pengampu**

Bambang Riono Arsad, S.Kom., MMSI

<br>

### PROGRAM STUDI TEKNIK INFORMATIKA
### UNIVERSITAS PANCASILA
### 2026-2027

</div>

---

## Daftar Isi

- [Pertemuan 1 dan 2](#pertemuan-1-dan-2)
  - [Cara Install](#cara-install)
  - [1. Menjalankan Ulang Contoh Pertemuan 1](#1-menjalankan-ulang-contoh-pertemuan-1)
  - [2. Modifikasi Program Minimal 2](#2-modifikasi-program-minimal-2)
  - [3. Penjelasan Bagian Kode yang Paling Penting](#3-penjelasan-bagian-kode-yang-paling-penting)
  - [4. Tampilan Sebelum dan Sesudah Modifikasi](#4-tampilan-sebelum-dan-sesudah-modifikasi)
  - [5. Error yang Pernah Muncul](#5-error-yang-pernah-muncul)
- [Pertemuan 3](#pertemuan-3)
- [Pertemuan 4](#pertemuan-4)
- [Pertemuan 5](#pertemuan-5)

---

# Pertemuan 1 dan 2

Materi: dasar PHP, client-server, dan HTTP method (GET dan POST), dengan dua contoh program (`kalkulator.php` dan `biodata.php`).

Ketentuan Tugas 1:

1. Menjalankan seluruh contoh Pertemuan 1 hingga menghasilkan output tanpa error kritis.
2. Membuat minimal dua modifikasi bermakna pada program.
3. Menuliskan penjelasan singkat untuk lima bagian kode yang paling penting.
4. Menyertakan screenshot sebelum dan sesudah modifikasi.
5. Menuliskan satu error yang pernah muncul, penyebabnya, dan langkah perbaikannya.

File yang dikerjakan (folder [`Prak1`](Prak1)):

| File | Keterangan |
| --- | --- |
| `kalkulator.php` | Contoh asli kalkulator (hitung sekali) |
| `biodata.php` | Contoh asli biodata mahasiswa |
| `Kalkulator_Tugas1.php` | Kalkulator hasil modifikasi |
| `biodata_tugas1.php` | Biodata hasil modifikasi |

## Cara Install

### Kebutuhan

| Kebutuhan | Keterangan |
| --- | --- |
| PHP | Versi 8.2 ke atas |
| Web server dan database | Apache dan MySQL/MariaDB (lewat XAMPP atau Laragon) |
| Composer | Dependency manager untuk PHP |
| Code editor | Visual Studio Code |

Praktikum ini dikerjakan di Windows dengan Laragon. XAMPP bisa dipakai sebagai alternatif sesuai modul praktikum.

### 1. Install XAMPP

1. Download installer `.exe` XAMPP, lalu install di laptop. Boleh di `C:/` atau `D:/`, tetapi disarankan di `C:/`.
2. Buka terminal/CMD, ketik `php -v`. Kalau versi PHP muncul, berarti PHP sudah terbaca.
3. Kalau belum terbaca, buka **Environment Variables** lewat pencarian Windows (ketik `env`).
4. Pada bagian **Path**, klik **Edit**, klik **New**, lalu tulis `C:\xampp\php`.
5. Klik **New** lagi, lalu tulis `C:\xampp\mysql\bin`.
6. Klik **OK** sampai semua jendela tertutup.
7. Tutup terminal lama, buka terminal baru, lalu ketik `php -v` untuk mengecek.

### 2. Install Composer

1. Download installer Composer, lalu install di laptop.
2. Saat diminta lokasi `php.exe`, arahkan ke `C:\xampp\php\php.exe`.
3. Lanjutkan dengan **Next** sampai proses install selesai.
4. Buka terminal baru, lalu ketik `composer -V`.
5. Kalau versi Composer muncul, berarti Composer sudah siap dipakai. Kalau belum terbaca, tutup terminal lama dan buka lagi, lalu cek ulang.

### 3. Ambil Project dari GitHub

```bash
git clone https://github.com/Raizero0/Prak_PBW_A_Railene_24081.git
```

Simpan folder hasil clone di folder root web server:

| Aplikasi | Lokasi folder |
| --- | --- |
| Laragon | `C:\laragon\www\` |
| XAMPP | `C:\xampp\htdocs\` |

### 4. Jalankan Program

1. Jalankan **Apache** (Laragon: klik **Start All**, XAMPP: klik **Start** pada Apache).
2. Buka browser, lalu akses salah satu alamat berikut.

| Program | Alamat |
| --- | --- |
| Kalkulator (asli) | `http://localhost/Prak_PBW_A_Railene_24081/Prak1/kalkulator.php` |
| Biodata (asli) | `http://localhost/Prak_PBW_A_Railene_24081/Prak1/biodata.php` |
| Kalkulator (modifikasi) | `http://localhost/Prak_PBW_A_Railene_24081/Prak1/Kalkulator_Tugas1.php` |
| Biodata (modifikasi) | `http://localhost/Prak_PBW_A_Railene_24081/Prak1/biodata_tugas1.php` |

Program Pertemuan 1 hanya memakai PHP, jadi tidak perlu `composer install` maupun database.

---

## 1. Menjalankan Ulang Contoh Pertemuan 1

Berhasil tanpa error.

**kalkulator.php**

![Hasil run kalkulator.php](assets/prak1-2/01-run-kalkulator.png)

**biodata.php**

![Hasil run biodata.php](assets/prak1-2/02-run-biodata.png)

## 2. Modifikasi Program Minimal 2

### Modifikasi 1: Hitung Sekali Menjadi Hitung Bertahap

Kalkulator diubah dari hitung sekali menjadi hitung bertahap, menggunakan 3 hidden input (`num1`, `op`, `new_input`). Fungsinya untuk menyimpan memori pada kalkulator.

![Variabel num1, op, new_input](assets/prak1-2/03-mod1-variabel-hidden.png)

![Hidden input pada form](assets/prak1-2/04-mod1-input-hidden.png)

### Modifikasi 2: Operasi Hitung Baru

Menambahkan operasi hitung baru: akar kuadrat (`sqrt`), kuadrat (`sq`), dan modulo (`%`).

![Logika sqrt dan sq](assets/prak1-2/05-mod2-sqrt-sq.png)

![Switch operator termasuk modulo](assets/prak1-2/06-mod2-switch-operator.png)

## 3. Penjelasan Bagian Kode yang Paling Penting

Penjelasan singkat lima bagian kode yang paling penting:

### 1. Tiga variabel `num1`, `op`, `new_input` lewat hidden input

Tiga variabel ini ditaruh sebagai hidden input di dalam form, supaya nilai dari kalkulator ikut terkirim ulang saat tombol dipencet. Hal ini diperlukan karena PHP bersifat *stateless*, yaitu server tidak bisa mengingat apa pun dari request sebelumnya.

![Variabel num1, op, new_input](assets/prak1-2/03-mod1-variabel-hidden.png)

![Hidden input pada form](assets/prak1-2/04-mod1-input-hidden.png)

### 2. Kondisi awal input angka

Kondisi ini menentukan kapan angka baru menimpa layar (kalau layar masih `0`, `Error`, atau habis menekan operator) dan kapan disambung ke angka yang sudah ada. Ada juga pengecekan supaya titik desimal tidak bisa diketik dua kali.

![Kondisi input angka](assets/prak1-2/07-kode-input-angka.png)

### 3. Akar kuadrat dan kuadrat

Pada akar kuadrat, angka dicek dulu apakah negatif. Angka negatif tidak punya hasil di bilangan real, jadi langsung menghasilkan `Error`. Kuadrat tidak perlu validasi karena hasilnya selalu ada dan tidak mungkin negatif.

![Logika sqrt dan sq](assets/prak1-2/05-mod2-sqrt-sq.png)

### 4. Fungsi `statusKelulusan()`

Parameter dan return value diberi tipe data (`float` masuk, `string` keluar), supaya pengecekan sesuai dengan syarat. Kalau syarat terpenuhi, fungsi langsung `return` dan berhenti.

![Fungsi statusKelulusan](assets/prak1-2/08-kode-statuskelulusan.png)

### 5. Penggunaan `htmlspecialchars()`

Semua data ditampilkan lewat `htmlspecialchars()` supaya karakter HTML tidak dibaca sebagai kode. Hal ini mencegah serangan XSS.

![Penggunaan htmlspecialchars](assets/prak1-2/09-kode-htmlspecialchars.png)

## 4. Tampilan Sebelum dan Sesudah Modifikasi

Berikut perbandingan tampilan program sebelum dan sesudah dilakukan modifikasi.

### 4.1 Tampilan Kalkulator

**a. Sebelum Modifikasi (`kalkulator.php`)**

![Kalkulator sebelum modifikasi](assets/prak1-2/10-before-kalkulator.png)

**b. Sesudah Modifikasi (`Kalkulator_Tugas1.php`)**

![Kalkulator sesudah modifikasi](assets/prak1-2/11-after-kalkulator.png)

### 4.2 Tampilan Biodata

**a. Sebelum Modifikasi (`biodata.php`)**

![Biodata sebelum modifikasi](assets/prak1-2/12-before-biodata.png)

**b. Sesudah Modifikasi (`biodata_tugas1.php`)**

![Biodata sesudah modifikasi](assets/prak1-2/13-after-biodata.png)

## 5. Error yang Pernah Muncul

Error muncul saat menambahkan tombol `%` (modulo) pada keypad kalkulator. Logika untuk operator ini sebenarnya sudah ada sejak awal di dalam kode, tetapi belum bisa digunakan karena belum ada tombolnya. Saat tombol ditambahkan dan dicoba menghitung angka desimal, misalnya `10.5 % 3`, browser menampilkan peringatan:

```
Deprecated: Implicit conversion from float 10.5 to int loses precision in
C:\laragon\www\Prak_PBW_A_Railene_24081\Prak1\Kalkulator_Tugas1.php on line 48
```

![Peringatan Deprecated di browser](assets/prak1-2/14-error-deprecated.png)

### Penyebab

Operator `%` di PHP dirancang khusus untuk bilangan bulat (*integer*), bukan bilangan desimal (*float*). Saat memasukkan angka desimal seperti `10.5`, PHP otomatis memotongnya menjadi `10` sebelum dihitung modulusnya. Akibatnya hasil di layar adalah `1`, padahal seharusnya `1.5`.

Baris kode sumber masalah, pada `Kalkulator_Tugas1.php` baris 48:

```php
case '%':
    $display = ($b == 0) ? 'Error' : $a % $b;
    break;
```

![Baris 48 sebelum diperbaiki](assets/prak1-2/15-error-kode-modulo.png)

### Perbaikan

Operator `%` diganti dengan fungsi bawaan PHP `fmod()`, yang memang dibuat khusus untuk menghitung modulus pada bilangan desimal tanpa memotong presisinya:

```php
case '%':
    $display = ($b == 0) ? 'Error' : fmod($a, $b);
    break;
```

![Baris 48 setelah diperbaiki](assets/prak1-2/16-fix-fmod.png)

### Hasil Sebelum dan Sesudah Diperbaiki

**Sebelum** (hasil `1` dan muncul peringatan):

![Hasil sebelum diperbaiki](assets/prak1-2/17-error-sebelum.png)

**Sesudah** (hasil `1.5`):

![Hasil sesudah diperbaiki](assets/prak1-2/18-error-sesudah.png)

---

# Pertemuan 3

*Laporan menyusul.*

---

# Pertemuan 4

*Laporan menyusul.*

---

# Pertemuan 5

*Laporan menyusul.*

---
