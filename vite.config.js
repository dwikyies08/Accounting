<<<<<<< HEAD
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { svelte } from "@sveltejs/vite-plugin-svelte";
import path from 'path';
import tailwindcss from '@tailwindcss/vite';
=======
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        svelte(),
    ],
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "resources/js"),
            "$lib": path.resolve(__dirname, "resources/js/$lib"),
        },
    },
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
>>>>>>> 8aec55e85e9d6a9b53b74c0e47ea6990ac3bf94a
});
