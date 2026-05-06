#Penjelasan web (Semua foto ada di Image foto Aplikasi)

##1) login

Dari foto 1 adalah foto login, menggunakan username/email dan password untuk masuk, tetapi karena kita belum memiliki kaun kita akan lanjut ke proses selanjutnya yaitu

##2) Registrasi

foto 2 adalah proses registrasi menggunakan username, aplikasi, password dan verifkasi password, setelah selesai akan dibawa kembali ke foto 1

##3) Login
Bisa menggunakan username (foto 3) atau menggunakan email (foto 4) untuk kemudian melanjutkan ke dashboard (foto 5, saat ini hanya tersedia button logout)

##4) username/email salah atau password
Jika user memasukkan email atau password yang salah maka akan muncul peringatan seperti pada foto 6

##5) Melakukan reset password
User akan menekan tombol lupa password dibawah tombol password dan akan dibawa ke foto 7, user akan diminta untuk memasukkan email

##**Proses melakukan reset**
- email diminta
- token dibuat otomatis oleh laravel
- mengakses link reset dari laravel log
- masuk ke halaman token dan reset password
- Setelah semua proses selesai, user akan diminta memasukkan password baru dan verifikasi password baru sebelum kembali dibawa ke login (foto 1)
