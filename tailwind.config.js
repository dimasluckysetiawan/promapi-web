import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                // Mengambil alih class warna biru (bg-blue-600, text-blue-500, dll)
                blue: {
                    200: '#0E4473', // Warna ring saat input form di-klik (heading-color)
                    500: '#0E4473', // Warna text link (heading-color)
                    600: '#0E4473', // Warna background tombol (heading-color)
                    700: '#011826', // Warna background tombol saat di-hover (default-color)
                },
                // Mengambil alih class warna kuning (untuk tombol edit)
                yellow: {
                    500: '#F2B705', // Warna tombol edit (accent-color)
                    600: '#d19e00', // Warna tombol edit saat di-hover
                },
                // Mengubah warna background dasar (surface-color)
                gray: {
                    100: '#F2F2F2', // Background body bawaan Breeze
                }
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [forms],
};
