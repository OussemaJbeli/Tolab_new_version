import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/scss/app.scss', 
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    define: {
        '__VUE_OPTIONS_API__': 'true', // Enable Options API support
        '__VUE_PROD_DEVTOOLS__': 'false', // Disable devtools support in production builds
        '__VUE_PROD_HYDRATION_MISMATCH_DETAILS__': 'false' // Disable detailed warnings for hydration mismatches in production builds
    }
});
