// serviceWorker.js

const CACHE_NAME = 'morristech-cache-v1';
const urlsToCache = [
  '/',
  '/view/CSS/GeneralStyles.css',
  '/view/JS/GeneralScripts.js',
  '/view/Images/LogoNegroMT.png',
  '/view/Images/LogoBlancoMT.png',
  // Agrega aquí todos los archivos que deseas que el Service Worker cachee
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => cache.addAll(urlsToCache))
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        if (response) {
          return response;
        }
        return fetch(event.request);
      })
  );
});

self.addEventListener('activate', event => {
  const cacheWhitelist = [CACHE_NAME];
  event.waitUntil(
    caches.keys()
      .then(cacheNames => Promise.all(
        cacheNames.map(cacheName => {
          if (!cacheWhitelist.includes(cacheName)) {
            return caches.delete(cacheName);
          }
        })
      ))
  );
});
  