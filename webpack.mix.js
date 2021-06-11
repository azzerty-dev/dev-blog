const mix = require('laravel-mix');

mix.browserSync('http://localhost:8001');

mix.js('resources/js/app.js', 'public/js');

mix.sass('resources/assets/sass/style.scss', 'public/css/all.css');
