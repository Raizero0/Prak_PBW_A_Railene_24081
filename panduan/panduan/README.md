# 🚀 Panduan Lengkap Git & GitHub Workflow

Dokumen panduan praktis pengelolaan proyek berbasis **Git** dan **GitHub**. Berisi 8 skenario alur kerja mulai dari inisialisasi awal, pengelolaan rutin, kloning, manipulasi file spesifik, hingga penanganan konflik.

---

## 📌 Daftar Isi Skenario

- [1. Inisialisasi & Hubungkan Repositori Baru (Initial Push)](#1-inisialisasi--hubungkan-repositori-baru-initial-push)
- [2. Push Rutin Sehari-hari (Daily Workflow)](#2-push-rutin-sehari-hari-daily-workflow)
- [3. Memperbarui File atau Folder Spesifik](#3-memperbarui-file-atau-folder-spesifik)
- [4. Menghapus & Mengganti File atau Folder](#4-menghapus--mengganti-file-atau-folder)
- [5. Kloning Repositori & Alur Kerja Pasca-Clone](#5-kloning-repositori--alur-kerja-pasca-clone)
- [6. Menangani Push Rejected (Sync / Fetch First)](#6-menangani-push-rejected-sync--fetch-first)
- [7. Bekerja dengan Branch Baru (Feature Branch)](#7-bekerja-dengan-branch-baru-feature-branch)
- [8. Force Push (Kondisi Darurat / Menimpa Remote)](#8-force-push-kondisi-darurat--menimpa-remote)

---

<br>

## 1. Inisialisasi & Hubungkan Repositori Baru (Initial Push)

**Fungsi:** Digunakan saat pertama kali membuat proyek di laptop dan ingin mengunggahnya ke repositori GitHub yang masih kosong.

```bash
# Inisialisasi Git pada direktori lokal
git init

# Tandai seluruh file dalam folder
git add .

# Simpan riwayat perubahan pertama
git commit -m "initial commit"

# Ubah nama branch utama menjadi main
git branch -M main

# Hubungkan repositori lokal ke remote GitHub
git remote add origin https://github.com/Raizero0/Prak_PBW_A_Railene_24081.git

# Unggah pertama kali sekaligus mengunci upstream branch
git push -u origin main
```

<br>

---

<br>

## 2. Push Rutin Sehari-hari (Daily Workflow)

**Fungsi:** Alur standar harian setelah proyek terhubung ke GitHub untuk mengirimkan pembaruan berkala.

```bash
# Cek status file yang diubah/ditambah
git status

# Tandai seluruh perubahan
git add .

# Simpan commit beserta catatan singkat
git commit -m "feat: pembaruan fitur dan tampilan UI"

# Unggah ke repositori GitHub
git push
```

<br>

---

<br>

## 3. Memperbarui File atau Folder Spesifik

**Fungsi:** Digunakan jika hanya ingin mengunggah file atau folder tertentu tanpa mengikutsertakan perubahan file lainnya.

```bash
# Cek status file yang aktif berubah
git status

# Tandai file tunggal spesifik
git add path/ke/file_kamu.php

# ATAU tandai folder spesifik saja (contoh: folder aset foto)
git add assets/Prak5/

# Simpan commit khusus file tersebut
git commit -m "style: pembaruan file dan aset foto praktikum 5"

# Unggah perubahan ke branch main
git push origin main
```

<br>

---

<br>

## 4. Menghapus & Mengganti File atau Folder

**Fungsi:** Menghapus file/folder dari lokal dan GitHub, atau mengganti folder lama dengan versi baru.

### A. Menghapus File/Folder dari Lokal & GitHub:
```bash
# Menghapus file tunggal:
git rm nama_file.txt

# Menghapus folder beserta seluruh isinya:
git rm -r nama_folder/

# Simpan commit & unggah perubahan
git commit -m "refactor: menghapus file/folder yang tidak digunakan"
git push origin main
```

<br>

### B. Menghapus dari GitHub Saja (Tetap Menyimpan File di Komputer Lokal):
```bash
# Menghapus pelacakan file di remote saja:
git rm --cached nama_file.txt
git rm -r --cached nama_folder/

git commit -m "chore: menghapus file dari remote repository"
git push origin main
```

<br>

### C. Mengganti File/Folder Lama dengan yang Baru:
Jika kamu menghapus folder lama lalu menaruh folder baru ber-nama sama:
```bash
# Tandai seluruh aksi tambah, edit, dan hapus sekaligus
git add -A

git commit -m "update: mengganti folder aset dengan versi terbaru"
git push origin main
```

<br>

---

<br>

## 5. Kloning Repositori & Alur Kerja Pasca-Clone

**Fungsi:** Digunakan saat mengunduh (*clone*) proyek dari GitHub ke komputer/folder baru, lalu melakukan penambahan, pembaruan, atau penghapusan file.

```bash
# 1. Kloning repositori dari GitHub ke komputer lokal
git clone https://github.com/Raizero0/Prak_PBW_A_Railene_24081.git

# 2. Masuk ke dalam direktori hasil kloning
cd Prak_PBW_A_Railene_24081

# 3. [Proses Koding] Lakukan edit, tambah, atau hapus file di Code Editor

# 4. Periksa status perubahan
git status

# 5. Tandai seluruh perubahan (tambah, edit, dan hapus)
git add .

# 6. Simpan catatan commit
git commit -m "update: pembaruan dan penambahan file setelah clone"

# 7. Unggah kembali perubahan ke GitHub
git push origin main
```

<br>

---

<br>

## 6. Menangani Push Rejected (Sync / Fetch First)

**Fungsi:** Solusi saat `git push` ditolak karena ada pembaruan di GitHub yang belum ditarik ke laptop.

```bash
# Tarik pembaruan remote dan tumpuk commit lokal di atasnya secara rapi
git pull origin main --rebase

# Unggah kembali hasil perpaduan ke GitHub
git push origin main
```

<br>

---

<br>

## 7. Bekerja dengan Branch Baru (Feature Branch)

**Fungsi:** Membuat cabang kerja terpisah untuk mencoba fitur baru tanpa mengganggu kode di branch utama `main`.

```bash
# Buat dan berpindah ke branch baru
git checkout -b fitur-baru

# Lakukan perubahan koding, lalu simpan commit
git add .
git commit -m "feat: menambahkan modul fitur baru"

# Unggah branch baru ke GitHub
git push -u origin fitur-baru
```

<br>

---

<br>

## 8. Force Push (Kondisi Darurat / Menimpa Remote)

**Fungsi:** Menimpa riwayat repositori di GitHub dengan kondisi lokal secara aman saat terjadi kondisi darurat/penyesuaian histori.

```bash
# Menimpa remote repository menggunakan versi aman (--force-with-lease)
git push --force-with-lease origin main
```