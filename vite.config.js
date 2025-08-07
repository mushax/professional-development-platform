import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // --- الإضافة الجديدة ---
    server: {
        host: '0.0.0.0', // اجعل الخادم يستمع على جميع الشبكات
        port: 5173,      // المنفذ الذي يعمل عليه Vite
        hmr: {
            host: 'localhost', // أخبر المتصفح أن يتصل بـ localhost
        },
    },
});