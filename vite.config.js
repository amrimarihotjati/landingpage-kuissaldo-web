import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/css/kuis.css',
                'resources/css/maintanance.css'
            ],
            refresh: true,
        }),
    ],
});
