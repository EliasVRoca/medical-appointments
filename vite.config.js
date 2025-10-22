import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';

export default defineConfig({
    server: {
        https: {
            key: fs.readFileSync('C:/laragon/etc/ssl/laragon.key'), // o tu key
            cert: fs.readFileSync('C:/laragon/etc/ssl/laragon.crt'), // o tu cert
        },
        host: 'citas.test', // tu dominio local
        port: 5173,
        cors: true,
        hmr: {
            host: 'citas.test',
        },
    },
    
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
