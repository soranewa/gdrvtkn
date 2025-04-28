# Google Drive Indexer dengan Cloudflare Workers

Panduan langkah demi langkah untuk menggunakan kode ini:

## 1. Instalasi
- Clone atau download repository ini di **Root Directory** server kamu.

## 2. Buat Project API Google Drive
- Buka [Google Cloud Console](https://console.cloud.google.com/).
- Buat **Project Baru**.
- Aktifkan **Google Drive API**.
- Buat **OAuth 2.0 Client ID** dengan:
  - **Authorized redirect URIs** diisi dengan: `http://127.0.0.1/callback.php`
  - **Scopes** pilih hanya `read-only` dan `metadata`.
- **Tidak perlu publish** ke publik.  
- Tambahkan semua akun Google yang ingin digunakan ke dalam **Test Users** di bagian OAuth Consent Screen.

## 3. Edit `config.php`
- Masukkan `Client ID` dan `Client Secret` dari Project API Google Drive ke dalam `config.php`.

## 4. Launch Website
- Jalankan website kamu di localhost.
- Klik **Login with Google+**.
- Pilih akun Google yang sudah didaftarkan ke Test Users di project API.
- Klik **Next** dan **Continue** hingga muncul **Access Token Info**.

## 5. Copy Refresh Token
- Salin **Refresh Token** dari hasil login tersebut.

## 6. Edit `worker.js`
- Masukkan:
  - `Client ID`
  - `Client Secret`
  - `Refresh Token`
- Edit pada file `worker.js` sesuai format yang sudah disediakan.

## 7. Deploy ke Cloudflare Workers
- Login ke akun Cloudflare kamu.
- Buat **Worker Baru**.
- Salin seluruh isi `worker.js` yang sudah diedit dan paste ke editor Cloudflare Worker.
- Klik **Deploy**.

## 8. Indeks Google Drive Siap Digunakan
- Website indeks Google Drive kamu sekarang aktif!

---
### Informasi Akses
- **Link Production**: [Cloudflare Worker Link] (isi link setelah deploy)
- **Username**: `yubay`
- **Password**: `yubay`

---

## Copyright
&copy; [yubaytech.com](https://yubaytech.com)

Dibuat oleh **Ghosterx Yubay Team**  
Official Website: [yubaytech.com](https://yubaytech.com)
