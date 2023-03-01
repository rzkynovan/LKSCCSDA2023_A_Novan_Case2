LKS Sidoarjo Modul A, by Rizky Novan SMK Telkom Sidoarjo

Saya menggunakan framework laravel dengan fitur login, register, CRUD yang hanya bisa dilakukan oleh role admin.

Url login : add prefix /login
Url Register : add prefix /register

Deskripsi Deployment

Membuat 2 server Prod dan Dev, dimana dev melakukan pull code dari github, lalu server dev bisa melakukan synchronize local ke AWS S3, sedangkan untuk server prod melakukan synchronize ke S3 dari S3 ke local.
