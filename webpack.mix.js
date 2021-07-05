const mix = require('laravel-mix');

mix.browserSync('http://localhost:8000');

mix.scripts('resources/js/main.js', 'public/js/main.js')
mix.scripts('resources/js/admin/admin.js', 'public/js/admin.js')

mix.sass('resources/assets/sass/style.scss', 'public/css/all.css');
