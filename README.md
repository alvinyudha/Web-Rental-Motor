# Web Rental Motor

A modern web application for motorcycle rentals built with Laravel and Tailwind CSS.

## Cara Menjalankan Project

Ikuti langkah-langkah di bawah ini untuk menjalankan project di lingkungan lokal Anda:

### 1. Persiapan Environment

Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database Anda.

```bash
cp .env.example .env
```

### 2. Install Dependency PHP

Gunakan composer untuk mengunduh library yang dibutuhkan.

```bash
composer install
```

### 3. Generate Application Key

```bash
php artisan key:generate
```

### 4. Database Migration & Seeding

Pastikan database sudah dibuat di phpMyAdmin/MySQL, lalu jalankan:

```bash
php artisan migrate:fresh --seed
```

### 5. Link Storage

Hubungkan folder storage ke folder public agar file yang diupload bisa diakses.

```bash
php artisan storage:link
```

### 6. Frontend Setup

Install package node dan jalankan server development.

```bash
npm install
npm run dev:all
```
