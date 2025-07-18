// STRUKTUR 

pos-pwa/
├── app/                   # Laravel backend
├── database/
│   └── migrations/        # Multi-store, produk, transaksi
├── resources/
│   └── js/
│       ├── app.js         # Vue entry
│       ├── router.js      # Vue Router
│       └── components/
│           ├── Kasir.vue
│           └── CustomerView.vue
├── routes/
│   ├── api.php            # REST API
│   └── web.php            # SPA route
├── public/
│   ├── manifest.json
│   └── service-worker.js
├── webpack.mix.js         # Laravel Mix config
└── .env.example


| Komponen    | Teknologi                                                |
| ----------- | -------------------------------------------------------- |
| Auth        | Laravel Auth (classic) + Vue                             |
| UI          | Bootstrap 4 (bisa diganti ke Tailwind)                   |
| Frontend    | Vue 2 (default Laravel 8 + Mix)                          |
| PWA         | Manual Service Worker + Manifest                         |
| Data        | AJAX fetch / Axios ke endpoint Laravel API               |
| Multi-store | via `store_id` di model User & Product                   |
| Dual Screen | Vue Router route: `/kasir` & `/customer-view/:sessionId` |


Sambil saya generate semua file, kamu bisa siapkan:
git clone https://github.com/saifulhu14/pos-pwa.git
cd pos-pwa

# Laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed

# Frontend
npm install
npm run dev

# Jalankan
php artisan serve


============== LANGKAH-LANGKAH ===========
1. Routing Laravel
2. Autentikasi: Sanctum
    - Install Sanctum
    - composer require laravel/sanctum
    - php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
    - php artisan migrate
3. Auth Controller
4. Migration: Toko, Produk, Transaksi
5. dawdawd
6. dawdawd
7. dawdadawd
8. dawdawd
  




