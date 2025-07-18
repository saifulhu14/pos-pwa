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


