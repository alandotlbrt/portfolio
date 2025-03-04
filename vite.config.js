import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/home.css', 'resources/css/header.css','resources/css/contact.css', 'resources/css/global.css','resources/css/me.css', 'resources/js/carousel.js', 'resources/js/parallax.js','resources/js/app.js', 'resources/css/projects.css'],
            refresh: true,
        }),
        vue(),
    ],
});
