import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: '@import "@fortawesome/fontawesome-free/css/all.css";'
            }
        }
    },
    resolve: {
        alias: {
            '@fortawesome/fontawesome-free$': '@fortawesome/fontawesome-free/webfonts',
        },
    },
});
