
# Laravel Registration App (Demo)

> Laravel 10 and Bootstrap 5 forked from template repository

This application take a simple registration form in `/demo/registration` and store it in MySQL database and send a confirmation email with the email address provided in the form.

Upon successful registration you will be redirected into the `/demo/confirmation` and failed registration will be redirected into `/demo/failed`.

You could see list of successful registration in `/demo/show` but the information is partially hidden with asterisks...

> This application is a requested test project

Application demo are shown below : (8 MB)

https://github.com/perrorovic/laravel-registration-app/assets/114989131/b215ce8b-f1c4-43ac-ac4a-73d63bce244c

## Description + QnA

> **Q : Buatlah sebuah halaman web dengan form pendaftaran yang berisi beberapa input, nama, email, dan alamat.**
> 
> A : Form registration terdapat pada `/demo/registration` terdiri dari 3 input yang diminta yaitu: nama, email, dan alamat.

> **Q : Buatlah tabel "registrations" di database MySQL dengan kolom-kolom yang sesuai untuk menyimpan data pendaftaran (kolom id, nama, email, alamat).**
> 
> A : Gunakan `php artisan migrate` database registrations terdapat pada `database\migrations\2023_11_11_165018_create_registrations_table.php`

> **Q : Mengirimkan email notifikasi yang sudah melakukan registrasi.**
> 
> A : Email dikirimkan pada saat data telah tersimpan pada database. Dapat dilihat lebih jelas pada `app\Http\Controllers\RegistrationController.php`. Dan untuk struktur email dapat dilihat pada `resources\views\emails\registration-confirmation.blade.php`

> **Q : Buatlah koneksi ke database MySQL dari halaman web menggunakan bahasa pemrograman PHP atau bahasa backend lainnya yang dikuasai.**
> 
>A : Setting untuk database connection terdapat pada `.env` yang harus mengikuti `.env.example` yang ada.

> **Q : Ketika pengguna mengisi dan mengirim form pendaftaran, data yang diinputkan harus divalidasi untuk memastikan tidak ada data yang kosong atau tidak valid. Setelah validasi berhasil, data yang diinputkan harus disimpan ke dalam tabel "registrations" di database MySQL.**
> 
> A : Pada input terdapat required. sehingga form tidak dapat dikosongkan.

> **Q : Tampilkan pesan konfirmasi kepada pengguna bahwa pendaftaran berhasil dilakukan.**
> 
> A : Tampilan tersebut terdapat pada `/demo/confirmation` dan terdapat tombol untuk kembali pada halaman pendaftaran

> **Q : (Opsional) Buat halaman terpisah yang menampilkan daftar pendaftaran yang telah disimpan dalam database.**
> 
> A : Halaman terdapat pada `/demo/show`. Penampilan daftar pendaftaran yang telah tersimpan oleh database merupakan informasi pribadi pendaftar. Maka ditampilkan seperti `Fullname:Fulxxx, Email:Emaxxx, Address:Addxxx` untuk menjaga kerahasiaan data yang ada. Terdapat database seeder static yang telah diset pada `database\seeders\RegistrationsTableSeeder.php` yang dapat digunakan dengan `npm run db:seed`


## Additional Note

> **Q : Pastikan untuk menyimpan data dengan aman dan menerapkan metode sanitasi input untuk menghindari SQL injection.**
> 
> A : Dapat dilihat pada `app\Http\Controllers\RegistrationController.php` sanitasi menggunakan fungsi `htmlspecialchars()`

> **Q : Jika belum memiliki pengalaman dengan MySQL atau PHP, diizinkan untuk menggunakan teknologi backend lainnya (seperti Node.js dengan database MongoDB atau lainnya).**
> 
> A : Aplikasi dikembangkan dengan MySQL dan PHP pada XAMPP v.3.3.0

> **Q : Jika menguasai mobile development (flutter), diperbolehkan membuat tampilan dalam bentuk android / ios dengan tetap membuat backend api.**
> 
> A : Skipped.

## Additional Point

 - [x] Menggunakan framework laravel seperti versi 10.x / django 4.x.
 - [x] Menggunakan framework css seperti bootstrap versi 5.x / tailwind
       versi 3.x, / lain-lain.

## Known Issues

- Both of `/demo/confirmation` and `/demo/failed` route is open and can be accessed directly. This route should be open only for those who pass it from `RegistrationController` (need to setup middleware)

## Set your local enviroment settings :

**Setup your Node :**

     - Install nvm and use latest version
     - env var: [NVM HOME:"path-to\nvm"]
     - env var: [NVM SYSLINK:"C:\Program Files\nodejs"]

**Setup your PHP :**

     - env var: [Path:"path-to\php"]

**Enable these PHP extension in .ini file :**

     - extension=curl
     - extension=fileinfo 
     - extension=gd
     - extension=mbstring 
     - extension=openssl 
     - extension=pdo_mysql

**Setup your PHP in VScode path :**

     1. Open VScode settings and search "php"
     2. Validate: Executable Path ("php.validate.executablePath") 
     3. Validate: Enable (checked)

**Setup your project :**

     1. Copy .env.example and set for your env (make the same database name with the one listed in .env.example)
     2. Run "php artisan key:generate" if the application ask for keys
     3. Run "composer update"
     4. Run "npm run db:new"
     5. Run "npm start"

