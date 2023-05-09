import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/style.bundle.css', 'resources/js/scripts.bundle.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '192.168.100.10'
    },
});
